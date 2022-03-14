<?php include('header.php'); ?>
<main id="connexion">
 
    <form action="authentifier" method="post">
            <div id="contenu1">
                <h2>Connexion</h2>
                <input type="email" name="email" class="form-control"  placeholder="email" required>
                <input type="password" name="passwords" id="password" placeholder="Mot de passe" required>
                <button type="submit" class="btn-primary">Connexion</button>
            </div>
    </form>
    <form action="inscription" method="post">
        <div id="contenu1">
            <p id="inscription">Vous n'avez pas encore de compte?</p>
            <button type="submit" id="popol" >Inscription</button>
        </div>
    </form>

</main>
<?php include('footer.php'); ?>