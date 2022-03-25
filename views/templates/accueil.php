<?php include('header.php'); ?>


<main id="toto">

    <section id="texteAccueil">
        <p id="bienvenue">Bienvenue sur Aventures Gustatives !</p>
        <p id="textebienvenue">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fugit vel quisquam, optio, voluptate magnam consectetur sint sunt architecto quia harum in odio illo, fugiat enim saepe aliquam officia reprehenderit.
            Illo distinctio tenetur consequuntur voluptatem expedita quo repellat quos officiis architecto dignissimos, magni velit vitae sed ipsum nemo cum! Dicta assumenda modi aliquid itaque labore ipsam quisquam commodi tempora ut?
            Sunt quibusdam consequatur quia enim expedita beatae officiis, sit magnam, temporibus fugiat perspiciatis neque quam vero veniam amet nam earum quo mollitia quos maiores, eveniet nobis libero. Quae, quidem? Ducimus!
            Recusandae obcaecati at ea atque tempora sint possimus, adipisci tempore itaque necessitatibus, officia excepturi quasi quas sunt iure ducimus! Enim quibusdam fugit magni quo mollitia minus laborum placeat animi autem.
            Repellat tempora earum, molestias cum, dolorem fugiat sed rem magni culpa repudiandae quisquam quo quam provident quos. Accusamus, est! Nisi modi laborum non, omnis voluptatem ratione earum minima accusantium maiores.</p>
    </section>

    <div id="center">

        <form action="VoirPlus">
            <section id="left">
                <article id="one">
                    <p>Bonjour</p>
                    <hr>
                </article>
                <article id="oneone">
                    <p>Lorem ipsum dolor sit amet quuntur nulla optio blanditiis delectus ex quod totam. Molestiae expedita quidem maxime optio quae ex temporibus sit, odio modi a quam, cum incidunt maiores iste at?</p>
                    <hr>
                </article>
                <article>
                    <nav id="two">
                        <ul id="two">
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-pinterest"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </nav>
                </article>
                <article id="etoile">
                    <p>__________<i class="fa-solid fa-star"></i>_________</p>
                </article>
                <p> Elu meilleur blog culinaire </p>
                <article id="4">
                    <p>Ma dernière recette</p>
                    <img id="imgLeft" src="http://localhost/recette2/src/image/pasta.jpg" alt="">
                    <div id="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ipsum nam alias, perspiciatis saepe porro. Rerum, molestias quam dignissimos quas excepturi doloribus obcaecati illo ad nulla minima mollitia voluptatum consequatur.</p>
                    </div>
                 
        </form>
        <form action="VoirPlus">

            <button type="submit" name="idArticle" value="<?php echo $value['idArticle'] ?>">Voir plus</button>
        </form>
        </article>
        </section>


        <form action="VoirPlus" method="post">
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
                        <textarea name="" id="mi">
                  <?php echo $value['content']; ?> 
                    </textarea>
                    </article>
        </form>
        <form action="VoirPlus">

            <button type="submit" name="idArticle" value="<?php echo $value['idArticle'] ?>">Voir plus</button>
        </form>
    <?php endforeach;   ?>
    </article>
    </section>
    </div>

</main>