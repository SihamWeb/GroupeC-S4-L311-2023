<?php
    # Inclusion des fonctions
    include 'inc/inc.functions.php';
?>

<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="fr">

    <head>
        <title>Story by HTML5 UP</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <?php
            # Inclusion des styles CSS
            include 'inc/inc.css.php';
        ?>
    </head>

    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper" class="divided">
            <?php
                # Appel de la fonction getPageTemplate() avec la page demandée en paramètre
                /* Si la page demandée n'existe pas ou si aucune page n'est spécifiée, c'est une redirection
                par défaut, ou plus précisément le template de la page d'accueil qui est inclus par défaut */
                getPageTemplate(
                    array_key_exists('page', $_GET) ? $_GET['page'] : null
                );
            ?>

            <?php
                # Inclusion du pied de page
                include 'inc/tpl-footer.php';
            ?>
        </div>

        <?php
            include 'inc/inc.js.php';
        ?>

    </body>

</html>