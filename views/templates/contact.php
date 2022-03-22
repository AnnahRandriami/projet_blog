<?php include('header.php'); ?>
<main id="toto">
        <form action="contactez">
                <section>

                        <h2>Contact</h2>
                        <label for="email">E-mail</label>
                        <input type="email" id="email" placeholder="E-mail">
                        <label for="message">Message</label>
                        <textarea type="text" id="message"></textarea>
                        <button type="submit" action="envoyerMessage" class="btn btn-primary">Envoyer</button>
        </form>
        <form>
                <button type="submit" action="envoyerMessage" class="btn btn-primary">Annuler</button>
        </form>
        </section>
</main>
<?php include('footer.php'); ?>