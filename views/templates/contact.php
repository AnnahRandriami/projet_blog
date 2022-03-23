<?php include('header.php'); ?>
<main id="toto">
        <form action="EnvoyerMessage" method="GET">
                <section id="cou">

                        <h2>Contact</h2>
                        <?php if(isset($_SESSION['users'])) : ?>
                        <label for="idUsers">Users</label>
                        <input type="text" id="email" name="idUsers" value="<?php echo $_SESSION['users']['idUsers']   ?>">
                        <?php endif; ?>
                        <label for="email">E-mail</label>
                        <input name ="email" type="email" id="email" required value="<?php echo $_SESSION['users']['email']   ?>">
                        <label for="message">Message</label>
                        <textarea name ="messages" type="text" id="message"></textarea>
                </section>
      
       
                <section id="lou">
                        <button type="submit" action="envoyerMessage" class="btn btn-primary">Envoyer</button>
        </form>

        <form action ="annuler">
                <button type="submit" action="envoyerMessage" class="btn btn-primary">Annuler</button>
        </form>
        </section>


</main>
<?php include('footer.php'); ?>