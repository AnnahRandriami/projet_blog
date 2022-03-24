<?php include('header.php'); ?>

<main id="toto1">
    <form action="recettes">
        <section id="right">

            <article id="six">
                <input id="profil1" type="text" name="name" value="admin">
                <input id="profil1" type="text" name="datePublication" value="Le 22/10/2018">
                <input id="profil1" type="text" name="title" value="Plat">
            </article>
                <textarea id="profil1" name="descriptionArticle" value="" cols="30" rows="10"> dgfsdgsdgdsgsg</textarea>
            <article id="5">
                <img id="imgRight" src="http://localhost/recette2/src/image/pasta.jpg" alt="" id="accueil">
            </article>
            <article id="8">
                  <textarea id="profil1" name="descriptionArticle" value="" cols="30" rows="10"> dgfsdgsdgdsgsg</textarea>
            </article>


            <button action="commentaire" type="submit" class="btn btn-block btn-primary">Commenter</button>

    </form>
    </article>

    </section>

    <h2 id="rec">Recettes récentes</h2>
    <section id="troisrecent">

        <form action="VoirPlus">

            <?php foreach ($dataRecent as $key => $value) : ?>
                <article id="five">
                    <img id="imgRight1" src="http://localhost/recette2/src/image/<?php echo $value['images'] ?>" alt="" id="accueil">
                    <div id="tata">

                        <input id="petit" type="text" name="category" value="<?php echo $value['title']; ?>">
                        <textarea name="" id="piu" cols="20" rows="1">   <?php echo $value['content']; ?>    </textarea>

                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Voir plus</button>
        </form>


        </article>
    <?php endforeach;   ?>
    </section>
</main>
<?php include('footer.php'); ?>