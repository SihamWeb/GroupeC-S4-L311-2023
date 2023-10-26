<?php
//Initialisation de la variable message
$message = null;

/*
 * Permet de vérifier que la connexion est correcte
 *
 * Commence par vérifier la méthode de requête, il faut que ça soit une requête POST
 * Puis vérifie si les clés login et password existent dans POST
 * On vérifie que les champs login et password ne sont pas vide
 * Si les trois conditions précédentes sont vérifiés, on appelle fonction connectUser avec en paramètre les champs login et password
 * Si tout est correct, la page renvoie vers la page d'accueil
 * Sinon, affiche un message d'erreur
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") { //Vérifie que la requête est POST
    if (array_key_exists('login', $_POST) && array_key_exists('password', $_POST)) { //Vérifie si les clés existent
        if (!empty($_POST['login']) && !empty($_POST['password'])) { //Vérifie que les champs ne sont pas vides
            //Appel de la fonction connectUser avec en paramètres les valeurs des champs login et password
            $_SESSION['User'] = connectUser($_POST['login'], $_POST['password']);

            if (!is_null($_SESSION['User'])) { //Vérifie si les valeurs sont correctes
                //Renvoie vers la page d'accueil
                header("Location:index.php");
            } else {//Sinon, renvoie un message d'erreur
                $message = "Mauvais login ou mot de passe";
            }
        }
    }
}
?>

<section class="wrapper style1 align-center">
    <div class="inner">
        <div class="index align-left">
            <section>
                <header>
                    <!--Titre-->
                    <h3>Se connecter</h3>
                    <!--Bouton pour revenir à l'accueil-->
                    <a href="index.php" class="button big wide smooth-scroll-middle">Revenir à l'accueil</a>
                </header>
                <div class="content">
                    <!--Si la variable message n'est pas null, affiche son contenu-->
                    <?php echo(!is_null($message) ? "<p>" . $message . "</p>" : ''); ?>
                    <!--Formulaire avec méthode post-->
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <!--Champ pour le login-->
                                <label for="login">Nom d'utilisateur</label>
                                <input type="text" name="login" id="login" value=""/>
                            </div>
                            <div class="field half">
                                <!--Champ pour le password-->
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" id="password" value=""/>
                            </div>
                        </div>
                        <ul class="actions">
                            <!--Bouton d'envoi des champs-->
                            <li><input type="submit" name="submit" id="submit" value="Se connecter"/></li>
                        </ul>
                    </form>
                </div>
            </section>
        </div>
    </div>
</section>