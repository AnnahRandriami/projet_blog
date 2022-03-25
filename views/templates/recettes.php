<?php include('header.php'); ?>
<main id="toto">
    <form action="recettes">
        <section id="right">
            <?php foreach ($data_article as $key => $value) : ?>
                <article id="5">
                    <img id="imgRight" src="http://localhost/recette2/src/image/<?php echo $value['images'] ?>" alt="" id="accueil">
                </article>
                <article id="six">
                    <i id="profil" class="fa-solid fa-user"></i>
                    <input id="profil1" type="text" value="<?php echo $value['lastname']; ?>">
                    <input id="profil1" type="text" value="<?php echo $value['dateCreated']; ?>">
                    <input id="profil1" type="text" value="<?php echo $value['category']; ?>">
                </article>
                <article id="7">
                    <textarea name="" id="recettes" cols="65" rows="20">   <?php echo $value['content']; ?>    </textarea>
                </article>
    </form>
    <form action="VoirPlus">
        <article id="voirplus">
            <button type="submit" name="idArticle" value="<?php echo $value['idArticle'] ?>">Voir plus</button>
    </form>
  <form action="Commenter">
        <button type="submit" class="btn btn-block btn-primary">Commenter</button>
</article>
    </form>
    </article>

<?php endforeach;   ?>

</section>

</main>
<?php include('footer.php'); ?>