<?php include('header.php'); ?>
<main id="toto">
    <form action="recettes">
        <section id="right">
            <?php foreach ($data_article as $key => $value) : ?>
                <article id="5">
                    <img id="imgRight" src="http://localhost/recette2/src/image/<?php echo $value['images'] ?>" alt="" id="accueil">
                </article>
                <article id="6">
                    <i id="profil" class="fa-solid fa-user"></i>
                    <input id="profil1" type="text" name="lastname" value="<?php echo $value['lastname']; ?>">
                    <input id="profil1" type="text" name="" value="<?php echo $value['dateCreated']; ?>">
                    <input id="profil1" type="text" name="category" value="<?php echo $value['category']; ?>">
                </article>
                <article id="7">
                    <textarea name="" id="" cols="80" rows="20">   <?php echo $value['content']; ?>    </textarea>
                </article>
    </form>
    <article id="voirplus">
        <form action="VoirPlus">
            <button type="submit" class="btn btn-block btn-primary">Voir plus</button>
        </form>
        <form action="Commenter">
            <button type="submit" class="btn btn-block btn-primary">Commenter</button>
        </form>
    </article>

<?php endforeach;   ?>

</section>

</main>
<?php include('footer.php'); ?>