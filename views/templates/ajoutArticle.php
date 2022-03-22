<?php include('header.php'); ?>
<main id="toto">
  <form action="ValiderAjout" id="ajoutArticle">
    <label for="title">Titre</label>
    <input name="title" type="text">
   
    <label for="cotent">Contenu</label>
    <textarea name="content" type="text" value=""> </textarea>
   
    <label for="images">Image</label>
    <input name="images" type="text">
   
    <label for="category">Category</label>
    <select name="category" type="text" >
      
    <?php foreach ($data_category as $key => $value): ?>
      <option value=""><?php echo $value['category']  ?></option>
      <?php 
   
      endforeach ?>
   
    </select>
    <p name="idCategory"></p>

    <label for="auteur">Auteur</label>
    <select name="auteur" type="text">
    <?php foreach ($data_auteur as $key => $value): ?>
      <option value=""><?php echo $value['lastname']  ?></option>
      <?php endforeach ?>
    
    </select>
    <button>Ajouter</button>
  </form>
  
   

</main>
<?php include('footer.php'); ?>