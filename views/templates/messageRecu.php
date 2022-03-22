<?php include ('header.php');?>
<main>
<section id="admin">
    <div id="contenuAdmin">
      <h2 id=admin> Administration</h2>
      <form action="admin">
        <button type="submit">Retour</button>
    </div>

    <table>
      <tr>
        <td name="idUsers">id</td>
        <td name="Email">Email</td>
        <td name="Message">Message</td>
      </tr>
      <?php foreach ($data_message as $key => $value) : ?>
        <tr>
          <td name="idArticle"><?php echo $value['idmessages']; ?></td>
          <td name="title"><?php echo $value['email']; ?></td>
          <td name="category"><?php echo $value['messages']; ?></td>
        </tr>
      <?php endforeach ?>
    </table>
  </section>
         
</form>
</main>
<?php include ('footer.php');?>

