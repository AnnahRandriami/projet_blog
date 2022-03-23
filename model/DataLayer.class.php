<?php
/*************************************CONNEXION A LA BASE DE DONNEE *******************************************/
class DataLayer{
    private $connexion; 
    //test si la connexion avec la database de mysql est fait
 function __construct() {
      try {
          $this->connexion = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
         // echo "connexion à la base de donnée reussi";
  //définit l'erreur si pas de connexion
      } catch (PDOException $th ) {
         echo $th->getMessage();
      }
    }

  /*************************************REQUETE SQL*******************************************/
    function createUsers($lastname, $firstname, $pseudo, $email, $passwords)
    {
        $sql = "INSERT INTO `users` (lastname, firstname, pseudo, email, passwords, roles) 
        VALUES ( :lastname,:firstname,:pseudo, :email, :passwords, 'Utilisateur')";
        //print_r($sql);exit();
        try {
            $result = $this->connexion->prepare($sql);
            $var =  $result->execute(array(
                ':lastname' => $lastname,
                ':firstname' => $firstname,
                ':pseudo' => $pseudo,
                ':email' => $email,
                ':passwords' => password_hash($passwords, PASSWORD_BCRYPT),
            ));
            if ($var) {
                return TRUE;
            } else {
                return FALSE;
            }
        } catch (PDOException $th) {
            return NULL;
        }
    }

    function authentifier($email, $passwords)
    {
        $sql = "SELECT * FROM `users` WHERE email = :email";
        try {
          
            $result = $this->connexion->prepare($sql);
            $result->execute(array(
                ':email' => $email
            ));
            $data = $result->fetch(PDO::FETCH_ASSOC);
             // array_push($_SESSION, $data);
             $_SESSION['users'] = $data;
            $pass = $data['passwords'];
            if (password_verify($passwords, $pass)) {

                echo'<p id="danger"> vous etes connecté </p>';
              require VIEWS . SP . "templates" . SP . "recette.php";
            } else {
                echo '<p id="danger"> Vérifier vos identifiants </p>';
                require VIEWS . SP . "templates" . SP . "connexion.php";
            }
        } catch (PDOException $th) {
            return NULL;
        }
    }

    function getSess($email)
    {
        $sql = "SELECT * FROM `users` WHERE email = :email";
  
            $result = $this->connexion->prepare($sql);
            $result->execute(array(
                ':email' => $email
            ));
            $data = $result->fetch(PDO::FETCH_ASSOC);
             // array_push($_SESSION, $data);
             $_SESSION['users'] = $data;
        }

    function verifEmail($email)
    {
        $sql = "SELECT email FROM `users` WHERE email = :email";
        try {
           
            $result = $this->connexion->prepare($sql);
            $result->execute(array(
                ':email' => $email
            ));
            $data = $result->fetch(PDO::FETCH_ASSOC);
            if ($data && ($data['email'] == $email)) {
                echo ' <p id="danger"> Vérifier vos identifiants </p> </main>';
                require VIEWS . SP . "templates" . SP . "inscription.php";
            }else{
                return TRUE;
            }
        } catch (PDOException $th) {
            return NULL;
        }
    }
/*************** verif si produit existe deja ************************* */
function verifArticle($title)
{
    $sql = "SELECT title FROM `article` WHERE title = :title";
    try {
       
        $result = $this->connexion->prepare($sql);
        $result->execute(array(
            ':title' => $title
        ));
        $data = $result->fetch(PDO::FETCH_ASSOC);
        if ($data && ($data['title'] == $title)) {
            echo ' <p id="danger"> Vérifier vos identifiants </p> </main>';
            require VIEWS . SP . "templates" . SP . "inscription.php";
        }else{
            return TRUE;
        }
    } catch (PDOException $th) {
        return NULL;
    }
}
 /*********inner join dans article******/
 function recettes(){
     $sql = "SELECT lastname, title, content, images, dateCreated, dateUptade , category FROM article INNER JOIN users ON article.idUsers = users.idUsers INNER JOIN category ON article.idCategory = category.idCategory ";
  //print_r($sql);exit();
  try {
    $result = $this->connexion->prepare($sql);
    $result->execute();
  $data_article =  $result->fetchAll(PDO::FETCH_ASSOC);
  return $data_article;
  } catch (PDOException $th) {
     return FALSE;
 }
  }

  /************************category******************* */

  function category(){
      $sql= " SELECT * FROM category";
      try {
        $result = $this->connexion->prepare($sql);
        $result->execute();
      $data_category =  $result->fetchAll(PDO::FETCH_ASSOC);
      return $data_category;
      } catch (PDOException $th) {
         return FALSE;
     }
  }

/************************ inner join auteur ************************* */
  function auteur(){
      $sql = "SELECT DISTINCT lastname FROM article INNER JOIN users WHERE article.idUsers = users.idUsers " ; 
      try {
        $result = $this->connexion->prepare($sql);
        $result->execute();
      $data_auteur =  $result->fetchAll(PDO::FETCH_ASSOC);
      return $data_auteur;
      } catch (PDOException $th) {
         return FALSE;
      }
  }

 
  /**************inner join article pour artcile********************** */
function articles(){
    $sql = "SELECT idArticle, title, category FROM article INNER JOIN category WHERE article.idCategory = category.idCategory ";
try {
    $result = $this->connexion->prepare($sql);
    $result->execute();
  $data_articles =  $result->fetchAll(PDO::FETCH_ASSOC);
  return $data_articles;
} catch (\Throwable $th) {
    //throw $th;
}
}
 /**************inner join article pour message*********************** */
 function message(){
    $sql = "SELECT * FROM messages";
try {
    $result = $this->connexion->prepare($sql);
    $result->execute();
  $data_messages =  $result->fetchAll(PDO::FETCH_ASSOC);
  return $data_messages;
} catch (\Throwable $th) {
    //throw $th;
}
}

/**************select article *********************** */
function crudArticle(){
    $sql = "SELECT idmessages, email , messages FROM messages INNER JOIN users WHERE messages.idUsers = users.idUsers ORDER BY idmessages ASC ";
try {
    $result = $this->connexion->prepare($sql);
    $result->execute();
  $data_message =  $result->fetchAll(PDO::FETCH_ASSOC);
  return $data_message;
} catch (\Throwable $th) {
    //throw $th;
}
}
/*********************insert article************************** */
function createArticle($idUsers, $title, $content, $images, $idCategory)
{
    $sql = "INSERT INTO `article` (idUsers, title, content, images, idCategory) 
    VALUES ( :idUsers, :title, :content, :images, :idCategory)";
   // print_r($sql);exit();
    try {
        $result = $this->connexion->prepare($sql);
        $var =  $result->execute(array(
            ':idUsers' => $idUsers,
            ':idCategory' => $idCategory,
            ':title' => $title,
            ':content' => $content,
            ':images' => $images,
        ));
        if ($var) {
            return TRUE;
        } else {
            return FALSE;
        }
    } catch (PDOException $th) {
        return NULL;
    }
}
/************************insert message**************************** */
function createMessages($idUsers, $messages, $email)
{
    $sql = "INSERT INTO `messages` (idUsers, messages, email) 
    VALUES ( :idUsers, :messages, :email)";
    try {
        $result = $this->connexion->prepare($sql);
        $var =  $result->execute(array(
            ':idUsers' => $idUsers,
            ':messages' => $messages,
            ':email' => $email,
        ));
        if ($var) {
            return TRUE;
        } else {
            return FALSE;
        }
    } catch (PDOException $th) {
        return NULL;
    }
}

/******************affiche uptade article************************ */
function modifierArticle($idCategorys){
    $sql = "SELECT * FROM article WHERE idArticle = :idCategorys";
    try {
        $result = $this->connexion->prepare($sql);
        $result->execute(array(
            ':idCategorys' => $idCategorys,
        ));
        $dataArticles =  $result->fetchAll(PDO::FETCH_ASSOC);
     return $dataArticles;
    } catch (PDOException $th) {
        return NULL;
    }
    
}

    function uptadeSet($idArticle, $title, $content, $images, $idCategory)
    {
        $sql = "UPDATE article SET idCategory= :idCategory , title= :title , content= :content , images= :images , dateUptade = NOW() WHERE idArticle = :idArticle";
     
       // print_r([$idArticle, $title, $content, $images, $idCategory]); 
       // print_r($sql);exit();
        try {
            $result = $this->connexion->prepare($sql);
            $var = $result->execute(array(
                ':idArticle' => $idArticle,
                ':title' => $title,
                ':content' => $content,
                ':images' => $images,
                ':idCategory' => $idCategory,
        ));
        if ($var) {
          //  print_r($var);exit();
            return TRUE;
        } else {
            return FALSE;
        }
    } catch (PDOException $th) {
        return NULL;
    }
}
/*************************************FONCTION *******************************************/

    function login()
    {
        global $model;
        $email = $_REQUEST["email"];
        $passwords = $_REQUEST["passwords"];
        $model->authentifier($email, $passwords);
    }


    function inscrire()
    {
        global $model;
        // print_r($_REQUEST); exit();
        $firstname = $_REQUEST["firstname"];
        $lastname = $_REQUEST["lastname"];
        $pseudo = $_REQUEST["pseudo"];
        $email = $_REQUEST["email"];
        $passwords = $_REQUEST["passwords"];
        $data = $model->verifEmail($email);
        if ($data) {
            $data_users = $model->createUsers($lastname, $firstname, $pseudo, $email, $passwords);
            if (!$data_users == $data) {
                require VIEWS . SP . "templates" . SP . "inscription.php";
            } else {
                $model->getSess($email);
                echo '<main> <p id="danger"> Bienvenue ' . $lastname . ' </p> </main>';
            }
        }
    }



    function modifArticles()
    {
        global $model;
        $idArticle = $_GET['idArticle'];
        $idCategory = $_REQUEST["idCategory"];
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
        $images = $_REQUEST["images"];
        //print_r($_REQUEST);exit();
     $model->uptadeSet($idArticle, $title, $content, $images, $idCategory);
   
    }

    function ajoutArticle()
    {
        global $model;
        $idUsers = $_REQUEST["idUsers"];
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
        $images = $_REQUEST["images"];
        $idCategory = $_REQUEST["idCategory"];
   $model->createArticle($idUsers, $title, $content, $images, $idCategory);
     
    }

    function addMessage(){
        global $model;
        $idUsers = $_REQUEST["idUsers"];
        $messages = $_REQUEST["messages"];
        $email = $_REQUEST["email"];
     $model->createMessages($idUsers, $messages, $email);
     
    }


    function afficherModif()
    {
        global $model;
        $idCategorys = $_REQUEST["idArtcileM"];
        $hello = $model->modifierArticle($idCategorys);
        //print_r($hello);
        return $hello;
    }



    function Deconnexion()
    {
        session_destroy();
        echo '<p class="danger">Vous etes déconnecté</p>';
    }













}
