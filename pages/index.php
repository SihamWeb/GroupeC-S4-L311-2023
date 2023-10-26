<!--Corps du blog avec un titre, du contenu et une image-->
<section
        class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
    <div class="content">
        <h1>Mon [ blog ].</h1>
        <p class="major">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur porta tellus, quis
            auctor ante pulvinar non. Quisque aliquet lacus posuere purus vestibulum, eget rutrum turpis
            scelerisque.</p>
        <ul class="actions stacked">
            <li><a href="#first" class="button big wide smooth-scroll-middle">Consulter mes articles</a></li>
        </ul>
    </div>
    <div class="image">
        <img src="images/banner.jpg" alt=""/>
    </div>
</section>

<?php
// Récupere tout les articles dans $_articles avec la fonction getArticleFromJson()
$_articles = getArticlesFromJson();

// Vérifie s'il y a des articles
if ($_articles && count($_articles)) {
    $compteur = 1; // Initialise le compteur à 1
    // Parcours les articles
    foreach ($_articles as $article) {
        // Définie si l'article s'affiche à gauche ou à droite selon son chiffre
        $classCss = ($compteur % 2 == 0 ? 'left' : 'right');
        $compteur++; // Incrémente le compteur de 1
        ?>
        <!--Corps de l'article avec la récupération de son titre, id ,image-->
        <section
                class="spotlight style1 orient-<?php echo $classCss; ?>  content-align-left image-position-center onscroll-image-fade-in"
                id="first">
            <div class="content">
                <h2><?php echo $article['titre']; ?></h2>
                <p><?php echo $article['titre']; ?></p>
                <ul class="actions stacked">
                    <!--Lien avec comme paramétre la page qui sera utiliser par la fonction getPageTemplate(page) et l'id utiliser par getArticleById(id)-->
                    <li><a href="?page=article&id=<?php echo $article['id']; ?>" class="button">Lire la suite</a></li>
                </ul>
            </div>
            <div class="image">
                <img src="<?php echo $article['image']; ?>" alt=""/>
            </div>
        </section>

        <?php
    }
}
?>