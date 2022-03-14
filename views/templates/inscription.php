<?php include('header.php'); ?>

<main id="toto">
  <div #inscription>
    <form id="inscrire" action="inscrire" method="post">
      <div>
        <h2>Veuillez créez un compte</h2>
      </div>
      <!-- Input -->
      <div>
        <input type="text" id="Nom" name="firstname" class="form-control " value="" required="" placeholder="Nom">
      </div>
      <div>
        <input type="text" id="Prenom" name="lastname" class="form-control " value="" required="" placeholder="Prénom">
      </div>
      <div>
        <input type="text" id="pseudo" class="form-control " name="pseudo" value="" required="" placeholder="Pseudo">
      </div>
      <div>
        <input type="email" id="email" class="form-control " name="email" value="" required="" placeholder="Adresse email">
      </div>
      <div>
        <input type="password" id="pwd" class="form-control " name="passwords" value="" required="" placeholder="Mot de passe">
      </div>
      <div>
        <button id="authentifier" type="submit" class="btn btn-block btn-primary">S 'inscrire</button>
      </div>
    </form>
  </div>
</main>
<?php include('footer.php'); ?>