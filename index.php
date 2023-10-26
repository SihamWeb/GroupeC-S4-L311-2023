<?php
# Inclusion des fonctions réutilisables dans toutes les pages
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
    <!-- Définition de l'encodage des caractères -->
    <meta charset="utf-8"/>
    <!-- Assurer un affichage correct sur tous les appareils -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <?php
    # Inclusion des styles CSS appliqués sur l'ensemble des pages
    include 'inc/inc.css.php';
    ?>
</head>

<body class="is-preload">

<!-- Wrapper / Div contenant le contenu de la page-->
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
    # Inclusion du pied de page réutilisé pour l'ensemble du site
    include 'inc/tpl-footer.php';
    ?>
</div>

<?php
# Inclusion des scripts Javascript appliqués à toutes les pages
include 'inc/inc.js.php';
?>

</body>
</html>