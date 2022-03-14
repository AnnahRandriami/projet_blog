<?php include ('header.php');?>
<main>
 <form action="afficheAdmin" id=admin>
                 <section id="admin">
                   <div id="contenuAdmin">
                   <h2 id=admin> Administration</h2>
                   <button type="submit" action="AjouterArticle" class="btn btn-primary">Ajouter</button>
                  <button type="submit" action="messageRecu" class="btn btn-primary">Contact</button>
                   </div>
         
                     <table>
                       <tr>
                         <td name="idArticle">id</td>
                         <td name="title">Titre</td>
                         <td name="category">Catégorie</td>
                         <td>Action
                         <button type="submit" action="ModiferArticle" class="btn btn-primary">Modifier</button>
                  <button type="submit" action="SupprimerArticle" class="btn btn-primary">Supprimer</button>
                         </td>
                     </table>
         
</form>
</main>
<?php include ('footer.php');?>

