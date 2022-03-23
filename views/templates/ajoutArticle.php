<?php include('header.php'); ?>
<main id="toto">
  <form action="ValiderAjout" id="ajoutArticle" method="POST">
    <label for="title">Titre</label>
    <input name="title" type="text">
   
    <label for="cotent">Contenu</label>
    <textarea name="content" type="text" value=""> </textarea>
   
    <label for="images">Image</label>
    <input name="images" type="text">
   
    <label for="category">Category</label>
    <select name="idCategory" type="text" >
      
    <?php foreach ($data_category as $key => $value): ?>
      <option value="<?php echo $value['idCategory']?>"><?php echo $value['category']  ?></option>
      <?php 
      endforeach ?>
   
    </select>
    <?php foreach ($_SESSION as $key => $value): ?>
    <input id="invisible" name="idUsers" type="text" value= "<?php echo $value['idUsers'] ?>">
    <?php 
      endforeach ?>
    <button>Ajouter</button>
  </form>
  
   

</main>
<?php include('footer.php'); ?>