<?php include('header.php'); ?>
<main id="toto">

  <form action="modifier" id="ajoutArticle" method="post">

    <label for="idArticle">idArtcile</label>
    <input name="idArticle" type="text" value="<?php echo $hello[0]['idArticle'] ?>">

    <label for="titre">Titre</label>
    <input name="titre" type="text" value="<?php echo $hello[0]['title'] ?>">

    <label for="contenu">Contenu</label>
    <textarea name="" id="" cols="30" rows="10">
   <?php echo $hello[0]['content'] ?>
   </textarea>

    <label for="content">Image</label>
    <input name="titre" type="text" value="<?php echo $hello[0]['images'] ?>">
    <label for="category">Category</label>
    <select name="category" type="text" value="">
      <?php foreach ($data_category as $key => $value) : ?>
        <option <?php if ($hello[0]['idCategory'] == $value['idCategory']) echo 'selected'; ?> value="<?php echo $value['idCategory'] ?>"><?php echo $value['category']  ?></option>
      <?php endforeach ?>
    </select>

    <button>Modifier</button>
  </form>
</main>
<?php include('footer.php'); ?>