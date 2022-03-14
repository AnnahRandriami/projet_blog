<?php include ('header.php');?>
<main>
<form action="contactez" id="contact">
               <section id="contact">
                <div id="contenuForm">
                        <h2>Contact</h2>
                        <label for="email">E-mail</label>
                        <input type="email" id="email" placeholder="E-mail" >
                        <label for="message">Message</label>
                        <textarea type="text" id="message"></textarea>
                </div>
                <div id="contenuButton">
                        <button type="submit" action="envoyerMessage" class="btn btn-primary">Inscription</button>
                </div>
        </section>
        </form>
        <form action="Annuler">
        <div id="contenuButton">
  <button type="submit" action="envoyerMessage" class="btn btn-primary">Inscription</button>
</div>
</form>
</main>
<?php include ('footer.php');?>