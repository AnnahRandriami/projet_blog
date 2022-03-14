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

    function getArticle(){
        $sql = "SELECT * FROM article";
        try {
           $result = $this->connexion->prepare($sql);
        } catch (\Throwable $th) {
            //throw $th;
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
           if ($data){
               $data_users = $model->createUsers($lastname, $firstname, $pseudo, $email, $passwords);
               if (!$data_users == $data) {
                require VIEWS . SP . "templates" . SP . "inscription.php";
               }else{
              echo'<p id="danger"> Bienvenue '.$lastname.' </p>';
              require VIEWS . SP . "templates" . SP . "recette.php";
               }
           }
        }

        function Deconnexion(){
            session_start();
          session_destroy();
           echo '<p class="danger">Vous etes déconnecté</p>';
           require VIEWS . SP . "templates" . SP . "recette.php";  
          }

}
