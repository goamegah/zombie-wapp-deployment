## Table of Contents
1. [General Info](#general-info)
2. [Project](#project)
3. [Technologies](#technologies)
4. [Structure](#structure)
5. [Installation](#installation)
6. [Architecture](#architecture)
7. [Base de donnée](#base-de-donnée)
8. [Requête AJAX](#requête-ajax)


## General Info
***
Ce [dépot](https://git.unistra.fr/kgamegah/progweb2.git) contient l'intégralité du projet du cours **Programmation Web 2**.
Le projet a été réalisé en licence 2 informatique par **GODWIN AMEGAH**.

## Project
***

Il s'agit de réaliser un site de ***Recettes de Zombies*** qui présenterait non seulement la grande communauté de zombie x)
mais aussi les meilleurs plâts de zombie. Il serait aussi possible à un utilisateur zombie de consulter les différentes
recettes et encore mieux sous réserve d'être membre ie d'être inscrit, de pouvoir proposer des recettes à part ceux 
proposer par l'équipe. Une autre fonctionnalité qui pourrait être sympa, serait de d'avoir la possibilité de **commander**
une recette.

Pour un début et compte tenu des contraintes du projet, j'ai choisi une architecture **One page** pour deux raisons.
La première étant le fait que je n'ai pas beaucoup de contenu dans ma page et la second comme déjà mentionner plus haut,
lié au contrainte du projet. Bien évidemment cette architecture pourra évoluer en dehors du deadline :wink: .

## Technologies
***
Pour ce projet les technologies utilisées sont :
* **HTML5**: pour la partie structuration de la page.
* **CSS3**: pour appliquer un peu de styles .
* **JS**: pour un comportement dynamique de notre site et pour la gestion d'un formulaire.
* **AJAX**: pour l'extraction des données sans rechargement de la page.
* **PHP**: pour la gestion du back end et création d'une la base de données.

## Structures
***

- **/assets**
   - **css/** contient toutes les styles
   - **img/** contient toutes les images utilisées dans le site
   - **js/** contient toutes les fichiers js ayant des fonctionnalitées spécifiques( controle dynamique, regex, requettes AJAX etc... )
   - **template/** contient l'ensemble des fichiers pouvant faire l'objet d'inclusion et permettre la réutilisation du code et éviter des répétitions.
   - **Database0.db** : Le fichier d'une BDD Sqlite3
   - **FormCreationVerif.php**: fichier servant à la vérification d'un formulaire après soumissions
   - **fr.php**: fichier de traduction du site en francais.
   - **en.php**: fichier de traduction du site en Anglais.
   - **index.php**: la page de démarrage du site, première page sollicitée par le serveur.
   - **meal.php**: fichier permettant d'extraire les data de la BDD et qui sera utilisé par une requette AJAX.

## Installation
***
Pour pouvoir afficher la page web et obtenir le comportement attendu, 
vous aurez besoin de quelques commandes ci-dessous:  

```
$ sudo apt install sqlite3 php-sqlite3 php7.4-sqlite3
$ git clone https://git.unistra.fr/kgamegah/progweb2.git
$ cd progweb2
$ php -S localhost:8000
```

**ATTENTION :** Les Commandes ci-dessus sont à excécuter dans un environnement 
de type **Unix**.


Si vous disposer déjà une version de *php-5* ou supérieur, la première commande
vous sera sans doute pas utile. Ensuite il faudra récupérer en local
projet grâce à la deuxième commande ```git clone...```. Une fois dans le bon
répertoire **ie** ```progweb2```, vous pouvez démarrer le serveur grâce à
la quatrième commande. Voilà vous êtes enfin prêt pour visualiser la page 
la commande suivante dans votre navigateur ;)

```
http://localhost:8000/
```

## Architecture
***
Si tout ce passe comme prévu, vous pourriez remarquer que le mini site comporte
4 parties:
   - **Une entête (Header)**
     
     IL comporte un **logo** ainsi q'un **menu de navigation**. On y trouve également 
     deux drapeau permettant de traduire l'ensemble de page en **Français** ou
     en **Anglais**. Ce système de traduction est implémenter via les fichiers
     ***fr.php*** et ***en.php***.

   - **Une première section**
     
      Dans cette section se trouve l'ensemble des recettes proposer par l'équipe des zombies. 
      Les utilisateurs zombies pouront consulter les différentes recettes via le bouton
     ```get Recipe```.
     
   - **Une second section**
     
      Dans cette section on offre la possibilité aux utilisateurs (inscrits)
     de pouvoir créer des recettes via un **formulaire**. Je rapelle que 
     pour l'instant, la gestion d'un espace membre n'a pas encore été mis en place.
     
      Le remplissement du *formulaire* impose des restrictions. Ne vous inquiétez pas si
      vous n'arriviez pas à soumettre ;), celà est fait exprès. En effet une 
      vérification avant soumission est necessaire pour prévenir les attaques 
      de zombie **malveillants**. Cette vérification est effectué en **JS** via le fichier 
     ***regex.js***.
     
      Après soumission une deuxième vérification est effectué en **PHP** afin de tenir compte des contraintes 
      lié à la BDD. Cette vérification étant effectuer grâce au fichier ***formCreationVerif.php***
     
   - **Un pied de page**
     
      Dans cette partie on y retrouve les éléments du **menu**, le **logo** du site et quelques informations 
      supplémentaires. Il est à noté que tous les **liens** n'ont pas encore  été 
      en quelque sorte initialisés.
     
**ATTENTION :** Au niveau du **back-end** la gestion de la **BDD** ainsi que la vérification
des contraintes de ce dernier est de la responsabilité d'un fichier *Class* nommé
***Db.php***. Le fichier ***formCreationVerif.php*** par exemple utilise donc ce fichier via un **include**.

## Base de donnée
***
Il s'agit d'une base de donnée **Sqlite** créée en **php**. Elle comporte une table ***recette*** créée via une reqêtte **SQL** 
composé des champs ***id***, ***username***, ***email***, ***title*** et 
***description***.

Lorsqu'un utilisateur zombie saisie les différentes informations dans le formulaire, sous réserve qu'elles
soient conformes et correctes, elles seront alors transféré dans **BDD**.

voici la commande qui permet de créer la table:


```sqlite
CREATE TABLE IF NOT EXISTS recette (
        username VARCHAR(100) NOT NULL,
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        email VARCHAR(100) NOT NULL,
        title VARCHAR(100) NOT NULL,
        descript VARCHAR(5000) NOT NULL
    )
```

## Requête AJAX
***
Pour consulter une recette l'utilisateur devraa cliquer sur le bouton
```get recipe``` en **Anglais** ou ```voir la recette``` en **Français**.
Une fenetre modal s'ouvrira _sans rechargement de la page_ avec la description , l'auteur , et le titre  
de la recette.

Pour ce faire chaque recette correspond dans l'ordre à une information  dans la **BDD**. L' **extraction** de ces informations ce fait grâce à un un fichier intermédiaire
***meal.php***, ensuite une requête **AJAX** est appliquer via le fichier ***recette.js***, sur ce fichier
pour récupérer les données. Les données ainsi récupérer seront insérer dans la page 
dans des conteneurs _HTML_ présentes dans le fichier ***index.php***.

Vous l'aurez peut être deviné, mais chacun des conteneurs porte des attributs
qui permettent de les identifier le (**data-id**). Cet identifiant permet de recupérer de manière précise
une ligne portant le même **id** dans la **BDD**.


