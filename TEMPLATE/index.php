<?php

// inclure le fichier de configuration du projet
require_once './config/config.php';

# EN-TETE DE PAGE COMMUN A TOUTES LES PAGES DU SITE
// Inclusion de header.php
require_once './inc/header.php';

# INCLURE LA PAGE DEMANDEE PAR L'UTILISATEUR (avec un système de routage)

// Récupération de la page à afficher

# Méthode n°1 : isset() 
# isset() détermine si une variable est déclarée et si elle est différente de "null"
//$page = isset($_GET['pg']) ? $_GET['pg'] : 'home';

# Méthode n°2 : ?? (opérateur de fusion null)
$page = $_GET['pg'] ?? 'home';

// Si la page n'existe pas

# Alterntive n°1 : redirection vers la page d'accueil 
// if (!file_exists('./pages/' . $page . '.php')) {
//     //header('Location: index.php');
//     //require './pages/404.php';
//     //exit();
//     $page = '404';
// }


# Alternative n°2 : enregistrer toutes les pages dans un tableau, si la page n’est pas contenu dans le tableau rediriger sur un page par défaut (404) ou home
$authorizedPages = ['home', 'videos', 'about', 'contact', 'product', '404', 'toto'];
$page = in_array($page, $authorizedPages) ? $page : '404';


// Inclusion de la page demandée
require_once './pages/' . $page . '.php';


# PIED DE PAGE COMMUN A TOUTES LES PAGES DU SITE
// Inclusion de footer.php
require_once './inc/footer.php';