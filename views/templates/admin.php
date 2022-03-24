<?php include('header.php'); ?>
<main>
  <section id="admin">
  
      <h2 id=admin> Administration</h2>
      <div id="contenuAdmin">
      <form action="ajoutArticle">
        <button type="submit" action="AjouterArticle">Ajouter</button>
      </form>
      <form action="messageRecu">
        <button type="submit" action="messageRecu">Contact</button>
      </form>
    </div>


    <table>
      <tr>

        <td name="idArticle">id</td>
        <td name="title">Titre</td>
        <td name="category">Catégorie</td>
        <td>Action
        </td>
      </tr>
      <?php foreach ($data_articles as $key => $value) : ?>
        <tr>
          <td name="idArticle"><?php echo $value['idArticle']; ?></td>
          <td name="title"><?php echo $value['title']; ?></td>
          <td name="category"><?php echo $value['category']; ?></td>
          <td id="button">
            </form>
            <form action="modifArtcile">
              <button id ="green" type="submit" name ="idArtcileM" value ="<?php echo $value['idArticle'] ?>" action="ModiferArticle">Modifier</button>
            </form>
            <form action="supprimer?idArticleM=<?php echo $value['idArticle']  ?>">
              <button id ="red" type="submit" name ="idArticleM" value ="<?php echo $value['idArticle'] ?>" >Supprimer</button>
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </section>
</main>
<?php include('footer.php'); ?>



