<?php include('header.php'); ?>
<main id="toto">
  <form action="ajoutArticle" id="ajoutArticle">
    <label for="titre">Titre</label>
    <input name="titre" type="text" value="">
    <label for="contenu">Contenu</label>
    <textarea name="content" type="text" value=""> </textarea>
    <label for="content">Image</label>
    <input name="titre" type="text" value="">
    <label for="category">Category</label>
    <select name="category" type="text" value="">
      <?php foreach ($data_category as $key => $value): ?>
      <option value=""><?php echo $value['category']  ?></option>
      <?php endforeach ?>
    </select>
    <label for="auteur">Auteur</label>
    <select name="auteur" type="text" value="">
    <?php foreach ($data_auteur as $key => $value): ?>
      <option value=""><?php echo $value['lastname']  ?></option>
      <?php endforeach ?>
    </select>
  </form>
  <form action="ValiderAjout">
    <button>Ajouter</button>
  </form>
</main>
<?php include('footer.php'); ?>