<?php include ('header.php');?>
<main>
 <form action="afficheMessage" id=admin>
                 <section id="admin">
                   <div id="contenuAdmin">
                   <h2 id=admin> Liste des message recu</h2>
                   <button type="submit" action="RetourAdmin" class="btn btn-primary">Ajouter</button>
             
                   </div>
         
                     <table>
                       <tr>
                         <td name="idmessages">id</td>
                         <td name="email">email</td>
                         <td name="messages">Message</td>
                         <td>Action
                         <button type="submit" action="ModiferArticle" class="btn btn-primary">Modifier</button>
                  <button type="submit" action="SupprimerArticle" class="btn btn-primary">Supprimer</button>
                         </td>
                     </table>
         
</form>
</main>
<?php include ('footer.php');?>

