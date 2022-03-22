<?php include('header.php'); ?>
<main>
  <section id="admin">
    <div id="contenuAdmin">
      <h2 id=admin> Administration</h2>
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
              <button type="submit" action="ModiferArticle" class="btn btn-primary">Modifier</button>
            </form>
            <form action="supprimerArticle">
              <button type="submit" action="SupprimerArticle" class="btn btn-primary">Supprimer</button>
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </section>
</main>
<?php include('footer.php'); ?>