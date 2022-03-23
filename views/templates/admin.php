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
              <button type="submit" name ="idArtcileM" value ="<?php echo $value['idArticle'] ?>" action="ModiferArticle" class="btn btn-primary">Modifier</button>
            </form>
            <form action="supprimerArticle">
              <button type="submit" name ="idArticleM" value ="<?php echo $value['idArticle'] ?>" action="SupprimerArticle" class="btn btn-primary">Supprimer</button>
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </section>
</main>
<?php include('footer.php'); ?>


mettre $hello ici et mettre dans method du bouton 
supprimer ensuite ajouter une requete delete dans supprimer
j'ai deja le id à sodium_crypto_box_keypair_from_secretkey_and_publickeycréer un delete 
when idArtoclle = dans l'url
