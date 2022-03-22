<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f00c55aea5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="http://localhost/recette2/src/css/style.css">
    <title></title>
</head>
<header>
    <nav>
        <ul>
            <li id="menu1"><a href="<?php echo 'accueil' ?>">ACCEUIL</a></li>
            <li id="menu1"><a href="<?php echo 'recettes' ?>">RECETTES</a></li>
            <li id="menu1"><a href="<?php echo 'apropos' ?>">A PROPOS</a></li>
            <li id="menu1"><a href="<?php echo 'contact' ?>">CONTACT</a></li>
            <?php if (!isset($_SESSION["users"])) :   ?>
                <li id="menu1"><a href="<?php echo 'connexion' ?>">CONNEXION</a></li>
            <?php endif; ?>
            <?php if (isset($_SESSION["users"])) : ?>
                <li id="menu1"><a href="<?php echo 'deconnexion' ?>">DECONNEXION</a></li>
            <?php endif; ?>


            <?php $data = ($_SESSION['users']);
            $role = $data['roles'];
            if ($role == 'Admin') : ?>

                <li id="menu1"><a href="<?php echo 'admin' ?>">ADMIN</a></li>

            <?php endif; ?>
        </ul>
    </nav>

    <img id="logo" src="http://localhost/recette2/src/image/logo.png" alt="logo">
    <p id="logo">Aventures Gustatives</p>
    <hr>
</header>