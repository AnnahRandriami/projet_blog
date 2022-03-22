<?php
$url = trim($_SERVER['PATH_INFO']);   //les pages après le dossier
$url = explode('/', $url);
$action = $url[1];
switch ($action) {
    case 'hello':
        require SRC . SP . "index.php";
        break;
    case 'accueil':
        global $model;
        $data_article = $model->recettes();
        require VIEWS . SP . "templates" . SP . "accueil.php";
        break;
    case 'admin':
        global $model;
        $data_articles = $model->articles();
        require VIEWS . SP . "templates" . SP . "admin.php";
        break;
    case 'apropos':
        require VIEWS . SP . "templates" . SP . "apropos.php";
        break;
    case 'contact':
        require VIEWS . SP . "templates" . SP . "contact.php";
        break;
    case 'connexion':
        require VIEWS . SP . "templates" . SP . "connexion.php";
        break;
    case 'deconnexion':
        $model->deconnexion();
     
        break;
    case 'inscription':
        require VIEWS . SP . "templates" . SP . "inscription.php";
        break;
    case 'messageRecu':
        global $model;
        $data_message = $model->message();
        require VIEWS . SP . "templates" . SP . "messageRecu.php";
        break;
    case 'recettes':
        global $model;
        $data_article = $model->recettes();
        require VIEWS . SP . "templates" . SP . "recettes.php";
        break;
    case 'affciherConnexion':
        require VIEWS . SP . "templates" . SP . "inscription.php";
        break;
    case 'recette':
        require VIEWS . SP . "templates" . SP . "recette.php";
        break;
    case '':
        global $model;
        $data_article = $model->recettes();
        require VIEWS . SP . "templates" . SP . "accueil.php";
        break;
    case 'inscrire':
        $model->inscrire();
        require VIEWS . SP . "templates" . SP . "accueil.php";
        break;
    case 'authentifier':
        $model->login();
        break;
    case 'ajoutArticle':
        $data_category = $model->category();
        $data_auteur = $model->auteur();
        require VIEWS . SP . "templates" . SP . "ajoutArticle.php";
        break;
    case 'modifArtcile':
        $data_category = $model->category();
        $data_auteur = $model->auteur();
        require VIEWS . SP . "templates" . SP . "modifArticle.php";
        break;
        case 'ValiderAjout':
            $model->ajoutArticle();
            require VIEWS . SP . "templates" . SP . "recettes.php";
            break;
    default:
        echo 'URL NON RECONNU';
        break;
}
?>