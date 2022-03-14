
 <?php include ('header.php');?>

<main id="toto">
    <form action="recettes">
    <section id="right">
            <article id="5">
                <img id="imgRight" src="http://localhost/recette2/src/image/pasta.jpg" alt="" id="accueil">
            </article>
            <article id="six">
                <form action="profil" id="profil">
                <i id="profil" class="fa-solid fa-user"></i>
                    <input id="profil1"type="text" name="nom" value="Maria LOpez">
                    <input id="profil1"type="text" name="datePublication" value="Le 22/10/2018">
                    <input id="profil1"type="text" name="category" value="Plat">
                </form>
            </article>
            <article id="7">
                <form action="descriptionArticle">
                    <textarea id="profil1" name="descriptionArticle" value="fdsfdsfdssdfsd dsfdsfdsfdsfdsds" cols="30" rows="10"></textarea>
                </form>
            </article>
            <article id="8">
                <form action="VoirRecette">
                    <button action="inscription" type="submit" class="btn btn-block btn-primary">Voir plus</button>
                </form>
            </article>
            <article id="9">
                <form action="VoirRecette">
                    <button action="commentaire" type="submit" class="btn btn-block btn-primary">Voir plus</button>
                    
                </form>
            </article>

        </section>


    </form>
  
</main>
<?php include ('footer.php');?>

