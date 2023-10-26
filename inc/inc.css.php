<?php
/*Lier une feuille de style externe (main.css dans le dossier assets puis css) aux fichiers HTML
(PHP) en utilisant les includes*/
?>

<link rel="stylesheet" href="assets/css/main.css" />
<?php
/*
    Balise pour fournir une alternative pour les utilisateur désactivant JavaScript dans leur navigateur
    ou que leur navigateur ne supporte tout simplement pas JavaScript.
    Ainsi, si JavaScript est désactivé, c'est cette feuille de style externe (noscript.css dans le dossier
    assets puis css) qui sera appliquée.
 */
 ?>
<noscript>
    <link rel="stylesheet" href="assets/css/noscript.css" />
</noscript>