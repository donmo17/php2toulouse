<?php

// définition d'une constante pour le fichier de données "data.php"
define('DATA', 'data.php');

// inclusion du fichier de données 
require_once DATA;

// définition d'une constante pour le fichier de données "data.json"
define('DATAJSON', __DIR__ . '/data.json');

// definir une image par défaut
define('DEFAULT_IMAGE', './img/default-article-image.png');

// Fonction qui permet de retourner l'ensemble des articles
function getArticles()
{
    // récupération au format JSON
    $allArticles = file_get_contents(DATAJSON);

    // Afin d'exploiter les données, il faut les récupérer sous forme de tableau associatif
    $allArticlesArray = json_decode($allArticles, true);

    return $allArticlesArray;
}

function getDetail($title)
{
    $datas = json_decode(file_get_contents(DATAJSON), true);
    $dataFound = '';
    var_dump(ucfirst($title));

    foreach ($datas as $data) {
        if ($data['title'] === ucfirst($title)) {
            $dataFound = "Title: " . $data['title'] . " Date: " . $data['date'] . " Views: " . $data['views'] . "  Image: " . $data['image'];

            var_dump($dataFound);
            exit();
        }
    }
    return $dataFound;
}



