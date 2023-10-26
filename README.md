*****************************************

Ce fichier README a été généré le 26 octobre 2023 par UE311 - Groupe C \
Dernière mise-à-jour le : 26 octobre 2023.

***************************************
# INFORMATIONS GENERALES
***************************************

## Titre du dossier

GroupeC-S4-L311-2023

## Objectifs de l'application

Avoir accès aux différents articles du blog
Pouvoir se connecter à son espace personnel

 
## Auteurs et contact

4 étudiants de l'Univesrité de Limoges \
[@Maxime Canac](https://github.com/MaximeCanac) - maxime.canac@etu.unilim.fr \
[@Mya Dumas](https://github.com/MyaDL) - mya.dumas@etu.unilim.fr \
[@Siham Charef](https://github.com/SihamWeb) - siham.charef@etu.unilim.fr \
[@Valentine Maillard](https://github.com/Valou38) - valentine.maillard@etu.unilim.fr


## Hébergement

L'ensemble du code est hébergé de façon publique sur la plateforme GitHub \
https://github.com/SihamWeb/GroupeC-S4-L311-2023

 

*******************************************
# LE PROJET
*******************************************

## Cadre du projet

Projet créé dans le cadre de la formation Licence professionnelle métiers de l'informatique - Applications web de l'Université de Limoges. \
Travail de groupe constitué de 4 étudiants en 3ème année \
Promotion 2023 - 2024

## Méthodologie du projet

Jeu de fichiers créés et fournis par l'Université. 
L'ensemble des modifications de programmation a été réalisé en équipe et de façon synchrone par l'intermédiaire de logiciels annexes (JetBrains, Teams)

La partie asynchrone est constituée des commentaires de code, du fichier README et tout autre information textuelle permettant une meilleure compréhension des fichiers. 

## Objectifs du projet

Réaliser un débogage de l'application web \
Editer l'ensemble des fichiers pour permettre une meilleure compréhension 


**********************************************
# INFORMATIONS TECHNIQUES de l'APPLICATION
***********************************************

## Fonctionnement

Pour faire fonctionner l'application, lancer le fichier index.php dans un navigateur.
Attention à bien sélectionner le fichier à la racine du dossier. \
Une fois l'application lancée, vous avez accès à un blog, dont 3 articles sont rédigés. La page d'accueil du blog fournit une description rapide, ainsi qu'un bouton qui scroll down vers les différents articles. \
Sur chacun d'entre eux, un bref aperçu et un bouton pour accéder à l'article complet. 
Une fois dans l'article, un bouton retour permet de revenir à la page d'accueil. 

Dans le coin en haut à droite, un bouton "se connecter" donne accès au profil utilisateur. Par défaut, les identifiants sont : \
Nom d'utilisateur : mylogin \
Mot de passe : mypassword  

## Langages d'écriture

Le dossier est constitué de fichiers contenant les extension PHP, JavaScript, json, CSS et Markdown.


## Arborescence


```
GroupeC-S4-L311-2023

├── Main
    ├── assets
        ├── css
        ├── js
        ├── sass
        └── webfonts
    ├── db
        └── articles.json
    ├── images
    ├── inc
        ├── inc.css.php
        ├── inc.functions.php
        ├── inc.js.php
        └── tpl-footer.php
    ├── pages
        ├── articles.php
        ├── disconnect.php
        ├── index.php
        └── login.php
    ├── README.md
    └── index.php

```

## Organisation des fichiers

Le dossier "assets" contient des fichiers CSS et Javascript sous license. Aucune modification n'a été effectuée sur ces fichiers.  
Le dossier "bd" stocke la base de données concernant les articles
Les dossiers "inc" et "pages" et le fichier "index.php" définissent l'organisation architecturale de l'application suivant le motif d'architecture logicielle MVC :

- Modèle : inc
- Vue : pages
- Controleur : index.php

## Convention de nommage des fichiers :

Afin d'éviter toute confusion, la branche main est la branche principale dans laquelle sont logés les fichier d'exécution.

Les autres branches servent uniquement au développement et sont nommées en fonction de leur utilité pour les développeurs.
Par exemple, la branche "commentairePHP" n'est utilisée que pour la création des commentaires du fichier PHP.


**********************************************
# POUR LES DÉVELOPPEURS 
**********************************************

# Page d'accueil

Pour modifier la page d'accueil du blog, ouvrir le dossier "pages" et se rendre dans le fichier "index.php" 

main/pages/index.php

```
<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">

	<div class="content">
		<h1>Mon [ blog ].</h1>
		<p class="major">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur porta tellus, quis auctor ante pulvinar non. Quisque aliquet lacus posuere purus vestibulum, eget rutrum turpis scelerisque.</p>
		<ul class="actions stacked">
			<li><a href="#first" class="button big wide smooth-scroll-middle">Consulter mes articles</a></li>
		</ul>
	</div>
	<div class="image">
		<img src="images/banner.jpg" alt="" />
	</div>
</section>
```
Les données sont modifiables directement dans le document. \
Le titre se trouve entre les balises \<h1> \
La description est rédigée dans le paragraphe entre les balises \<p> \
La source de l'image est importée depuis la balise \<img>. Pensez à ajouter au préalable votre nouvelle image au dossier "images".


# Articles

Pour modifier ou ajouter un article, allez dans le repertoire "db" et modifiez le fichier "articles.json" en ajoutant les lignes de codes comme dans l'exemple suivant :

main/db/articles.json
```
  {
    "id": 4,
    "titre": "Ceci est le titre du nouvel article",
    "texte": "Ceci est le texte du nouvel article",
    "image": "images/[monimage].jpg"
  }

```
Attention à conserver la numérotation \
Modifiez [monimage] avec le nom exacte de l'image souhaitée. Elle doit avoir été préalablement enregistrée dans le dossier "images".

# Comptes utilisateurs

Pour modifier les identifiants utilisateurs, se rendre dans le fichiers inc.functions.php et changer les données 'mylogin' et 'mypassword' par les valeurs souhaitées. 

main/inc/inc.functions.php 

```  
    define('TL_ROOT', dirname(__DIR__));
    define('LOGIN', 'mylogin');
    define('PASSWORD', 'mypassword');
    define('DB_ARTICLE', TL_ROOT.'/db/articles.json');
``` 
