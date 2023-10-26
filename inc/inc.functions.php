<?php
    // Démarrer une session PHP pour gérer les variables de session
    session_start();

    // Définir des constantes
    define('TL_ROOT', dirname(__DIR__)); // Le chemin du répertoire racine du projet
    define('LOGIN', 'mylogin'); // Nom d'utilisateur attendu
    define('PASSWORD', 'mypassword'); // Mot de passe attendu
    define('DB_ARTICLE', TL_ROOT.'/db/articles.json'); // Chemin vers le fichier JSON des articles

    // Fonction pour connecter un utilisateur
    function connectUser($login = null, $password = null){
        // Cette fonction vérifie si un nom d'utilisateur et un mot de passe sont fournis
        if(!is_null($login) && !is_null($password)){
            // Si les informations de connexion sont valides, renvoyer un tableau d'informations d'utilisateur
            if($login === LOGIN && $password === PASSWORD){
                return array(
                    'login'    => LOGIN,
                    'password' => PASSWORD
                );
            }
        }
        // Si les informations de connexion ne sont pas valides, renvoyer null
        return null;
    }

    // Fonction pour déconnecter l'utilisateur
    function setDisconnectUser(){
        // Cette fonction supprime la variable de session 'User' et détruit la session
         unset($_SESSION['User']);
         session_destroy();
    }

    // Fonction pour vérifier si un utilisateur est connecté
    function isConnected(){
        // Cette fonction vérifie si un utilisateur est connecté en regardant la variable de session 'User'
        if(array_key_exists('User', $_SESSION) && !is_null($_SESSION['User']) && !empty($_SESSION['User'])){
            return true;
        }
        // Si l'utilisateur n'est pas connecté, renvoyer false
        return false;
    }

    // Fonction pour obtenir le modèle de page
    function getPageTemplate($page = null){
        $fichier = TL_ROOT.'/pages/'.(is_null($page) ? 'index.php' : $page.'.php');
        // Cette fonction charge un modèle de page en fonction du nom de la page passé en paramètre
        if(!file_exists($fichier)){
            // Si le fichier de modèle n'existe pas, charge le modèle par défaut 'index.php'
            include TL_ROOT.'/pages/index.php';
        }else{
            // Charge le modèle de page spécifié
            include $fichier;
        }
    }

    // Fonction pour obtenir des articles à partir d'un fichier JSON
    function getArticlesFromJson(){
        if(file_exists(DB_ARTICLE)) {
            // Lit le contenu du fichier JSON
            $contenu_json = file_get_contents(DB_ARTICLE);
            // Décode le JSON en un tableau PHP
            return json_decode($contenu_json, true);
        }
        // Si le fichier n'existe pas, renvoyer null
        return null;
    }

    // Fonction pour obtenir un article par son ID
    function getArticleById($id_article = null){
       if(file_exists(DB_ARTICLE)) {
            // Lit le contenu du fichier JSON
            $contenu_json = file_get_contents(DB_ARTICLE);
            // Décode le JSON en un tableau PHP
            $_articles    = json_decode($contenu_json, true);

           // Parcourt le tableau d'articles pour trouver l'article par son ID
            foreach($_articles as $article){
                if($article['id'] == $id_article){
                    return $article;
                }
            }
        }
        // Si l'article n'est pas trouvé, renvoyer null
        return null;
    }
