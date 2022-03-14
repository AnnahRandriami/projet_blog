<?php

$url = trim($_SERVER['PATH_INFO']);   //les pages après le dossier
$url = explode('/', $url);
$action = $url[1];
switch ($action) {
    case 'hello':
        require SRC . SP . "index.php";
        break;
    case 'accueil':
        require VIEWS . SP . "templates" . SP . "accueil.php";
        break;
    case 'admin':
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
    case 'messagesRecu':
        require VIEWS . SP . "templates" . SP . "messageRecu.php";
        break;
    case 'recettes':
        require VIEWS . SP . "templates" . SP . "recettes.php";
        break;
    case 'affciherConnexion':
        require VIEWS . SP . "templates" . SP . "inscription.php";
        break;
    case 'recette':
        require VIEWS . SP . "templates" . SP . "recette.php";
        break;
        case '':
            require VIEWS . SP . "templates" . SP . "accueil.php";
            break;
    case 'inscrire':
        $model->inscrire();
        $model->role();
        break;

case'phpinfo':
    break;
    case 'authentifier':
        $model->login();
    break;
    default:
        echo 'URL NON RECONNU';
        break;
}




?>