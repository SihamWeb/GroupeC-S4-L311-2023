<!-- Footer -->
<!-- Début du pied de page -->
<footer class="wrapper style1 align-center">
    <div class="inner">
        <!-- Texte + lien vers le site de l'auteur du design-->
        <p>Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
    </div>
</footer>
<!-- Fin du pied de page -->

<!-- Sticky -->
<!-- Bouton collant -->
<span class="sticky">
	<?php if (!isConnected()) { ?> <!-- Si l'utilisateur n'est pas connecté -->

        <!-- Affiche un bouton pour se connecter à l'administration du blog -->
        <a class="button fit" href="?page=login" title="Se connecter à l'administration du blog">
            <span class="logo icon fa-arrow-alt-circle-right">Se connecter</span>
        </a>

    <?php } else { ?> <!-- Si l'utilisateur est connecté -->

        <!-- Affiche un bouton pour se déconnecter de l'administration du blog -->
        <a class="button fit" href="?page=disconnect" title="Se déconnecter de l'administration du blog">
            <span class="logo icon fa-arrow-alt-circle-right">Se déconnecter</span>
        </a>

    <?php } ?>
</span>