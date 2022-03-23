<?php include('header.php'); ?>
<main id="toto">

  <form action="modifier?idArticle=<?php  echo $hello[0]['idArticle']  ?>" id="ajoutArticle" method="post" >

    <label for="title">Titre</label>
    <input name="title" type="text" value="<?php echo $hello[0]['title'] ?>">

    <label for="content">Contenu</label>
    <textarea name="content" id="" cols="30" rows="10">
   <?php echo $hello[0]['content'] ?>
   </textarea>

    <label for="images">Image</label>
    <input name="images" type="text" value="<?php echo $hello[0]['images'] ?>">
    <label for="category">Category</label>
   
    <select name="idCategory" type="text">
      <?php foreach ($data_category as $key => $value) : ?>
        <option <?php if ($hello[0]['idCategory'] == $value['idCategory']) echo 'selected'; ?> value="<?php echo $value['idCategory'] ?>"><?php echo $value['category']  ?></option>
      <?php endforeach ?>
    </select>
 <button>Modifier</button>
  </form>
</main>
<?php include('footer.php'); ?>