<?php include('header.php'); ?>

<main id="toto1">
    <form action="recettes">
        <section id="right">

            <article id="six">
                <input id="profil1" type="text"  value="<?php echo $datarec[0]['lastname'] ?>">
                <input id="profil1" type="text" value="<?php echo $datarec[0]['dateUptade'] ?>">
                <input id="profil1" type="text"  value="<?php echo $datarec[0]['category']?>">
            </article>
            <textarea id="profil1" name="descriptionArticle" value="" cols="30" rows="10"> <?php echo $datarec[0]['title'] ?></textarea>
            <article id="5">
                <img id="imgRightR" src="http://localhost/recette2/src/image/<?php echo $datarec[0]['images'] ?>">
            </article>
            <article id="8">
                <textarea id="profil1" name="descriptionArticle" value="" rows="10"> <?php echo $datarec[0]['content'] ?></textarea>
            </article>
    </form>
    </article>
<article id="center">
<form action="nbComments">
        <article id="nb" >
        <i class="fa-solid fa-message"></i> 
        <input type="text" value="nbcomments">
        </article>
        <article id="comments">
            <input id="profil2" type="text" value="Rédigé par :">
            <input id="profil3" name="name" type="text" value="">
            <input id="profil4" type="text" name="dateComments " value="dateComments">
            </article>    
            <textarea name="" id="coms" >Value comments</textarea>
        <article id ="postComments">
       
            <form action="EnvoyerComments">
            <input type="text" name="pseudo" value="pseudo">
            <textarea name="" id="" >Comments </textarea>
            <button type="submit" >Commenter</button>
            </form>
        </article>
</article>
   
    </form>
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
                    <form action="VoirPlus">

            <button type="submit" name="idArticle" value="<?php echo $value['idArticle'] ?>">Voir plus</button>
        </form>
        </form>


        </article>
    <?php endforeach;   ?>
    </section>
</main>
<?php include('footer.php'); ?>