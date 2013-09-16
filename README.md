# OpenData

Version numérique du livre blanc d'[OWNI](http://www.owni.fr) sur l'OpenData.

## Le projet

OWNI a publié en 2010 une compilation de ses meilleurs articles sur l'OpenData.

Le projet a pour but de reprendre ces articles, de les republier sur le Web dans un endroit de référence et de les mettre en valeur. Toutes les technologies peuvent être utilisées tant qu'elles apportent une valeur ajoutée au contenu et qu'il est possible de les mettre en place en moins de deux jours.

Ces articles sont sous licence Creative Commons.

## Structure du projet

Il y a actuellement deux branches au projet :

- *master* : version 1.0 du site
- *1.1.x* : version 2.0 du site

## 1.0.x

Cette version est la production actuelle. Elle est codée en PHP / HTML / JavaScript / CSS. Elle n'utilise pas de framework ou de CMS.

Elle dispose de ces fonctionnalités :

### Lecture

Tous les articles du livre d'OWNI sont consultables en ligne. La mise en page est sobre et met en valeur les articles. Il n'y a ni publicité ni flux venant des réseaux sociaux pour ne pas distraire la lecture.

Il sera cependant possible d'ajouter des fonctionnalités comme un fil Twitter, à condition que ce contenu ne soit pas dans le même espace. Il peut être sous l'article par exemple.

### Mobile first

Cette version est navigable avec le même confort sous mobile, tablette et desktop.

**Attention** : les articles étaient assez longs, nous avons fait le choix d'optimiser le site pour tablette et desktop.

### Téléchargement

Il est possible de télécharger le PDF original d'OWNI. Le lien est disponible dans le menu, à côté du lien vers le site d'OWNI.

### Navigation

La navigation principale se fait grâce au panneau latéral gauche. Il apparaît lorsqu'on clique sur le logo. Il contient le menu, les liens annexes (page de contact, site d'OWNI et lien pour télécharger le livre) et l'utilisateur actuel (toujours anonyme pour l'instant).

Ce système de navigation a été choisi pour désencombrer l'espace de lecture. Grâce à lui, il est possible d'avoir des visuels, des slideshows, des cartes et des vidéos en pleine page.

### Contact

Le site dispose d'un formulaire de contact. Tous les champs (email et message) sont requis.

### Slideshows

Le site a un slideshow fonctionnant avec [SwipeJS](http://swipejs.com/). Les images défilent automatiquement toutes les trois secondes. Le slideshow est tactile, l'utilisateur peut interagir avec lui comme expliqué dans le paragraphe "Détection des gestes".

### Carte

L'accueil du site est occupé par une carte des principales villes travaillant sur l'OpenData en France. Ces villes sont Bordeaux, Paris, Lyon, Strasbourg, Mulhouse, Clermont-Ferrant, Nantes, Rennes, Toulouse, Lille.

La carte n'est pas pinchable ou zoomable. Elle ne dispose pas de boutons pour zoomer.

En revanche, elle est draggable au doigt et à la souris. Elle dispose d'un bouton de géolocalisation en bas à gauche. Ce bouton fait zoomer la carte sur la localisation de l'utilisateur pour qu'il puisse voir les initiatives autour de lui.

Les données proviennent du travail réalisé par [LiberTIC](http://www.opendata-map.org/map).

### Styles

Le site utilise deux typographies :

- [Cardo](http://www.google.com/fonts/specimen/Cardo), une serif, pour les textes
- [Open Sans Condensed](http://www.google.com/fonts/specimen/Open+Sans+Condensed), une sans-serif, pour les titres et les éléments du menu principal. Elle l'utilise toujours en uppercase.

Les textes sont noir (#000) ou blanc (#fff) selon le contraste. Les légendes sont en gris (#aaa).

### Navigation linéaire

Toutes les pages disposent d'une navigation linéaire, en pied d'article, permettant de passer d'une page à l'autre. Le lien à gauche remonte d'un cran vers l'accueil, celui à droite descend vers la page de contact.

L'ordre est le même que celui du menu.

### Détection des gestes

Le site répond aux gestes de l'utilisateur. Les gestes reconnus actuellement sont : 

- le swipe sur les slideshows : on peut faire défiler les galeries avec le doigt, depuis un mobile ou une tablette
- le swipe sur les articles : on peut passer d'un article à l'autre avec le doigt. Il n'y a pour l'instant pas d'animation, mais ça pourra être envisager dans la 2.0

## 2.0.x

Cette version est la version en cours de développement. Elle doit intégrée de nouvelles fonctionnalités qui augmentent les articles. Quelques idées de fonctionnalités :

- partage sur Facebook et Twitter
- finalisation de la carte d'après les données de [LiberTIC](http://www.opendata-map.org/map)
- authentification avec Facebook
- webapplication with jQuery mobile
- intégration des commentaires avec Disqus
- storytelling sur Facebook (action comme "cet article change le monde", "cet article est à lire absoluement", ...)