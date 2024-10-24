<?php

// tableau indexé
$fruits = ['🍎', '🥝', '🍇'];
$fruitsLength = count($fruits);
echo $fruits[1] . PHP_EOL; // 🥝

// tableau associatif
$animals = ['f' => '🐟', 's' => '🐍', 'l' => '🦁'];
echo $animals['l'] . PHP_EOL; // 🦁

# Parcours du tableau associatif

foreach ($animals as $key => $value) {
    echo $key . ' : ' . $value . PHP_EOL;
}

// tableau multidimensionnel
$clients = [
    ['prenom' => 'Alice', 'age' => 30, 'dispo' => true],
    ['prenom' => 'Bob', 'age' => 25, 'dispo' => false],
    ['prenom' => 'Charlie', 'age' => 42, 'dispo' => false],
];

# Accès aux données de Bob
$bob = $clients[1];

// var_dump() pour afficher la structure du tableau mais de manière générale var_dump() est une fonction de debogage
var_dump($bob);
print_r($bob);


# Parcours du tableau multidimmensionnel

foreach ($clients as $key => $value) {
    echo $value["prenom"] . PHP_EOL;
    echo nl2br($value["age"] . PHP_EOL);
    if ($value["dispo"] === 1) {
        echo nl2br("Disponible" . PHP_EOL);
    } else {
        echo nl2br("Non disponible" . PHP_EOL);
    }
}
;

# Accès aux données de tous les clients
foreach ($clients as $client) {
    echo $client['prenom'] . PHP_EOL;
    echo $client['age'] . PHP_EOL;
    echo $client['dispo'] . PHP_EOL;
}


// METHODES DE TABLEAUX

$numbers = [1, 2, 3, 4, 5];

# array_map()
// https://devdocs.io/php/function.array-map
// récuperer un tableau avec les valeurs de $numbers doublées

function double($n)
{
    return ($n + $n);
}

$double = array_map('double', $numbers); // [2, 4, 6, 8, 10]
print_r($double);


# array_filter()
// https://devdocs.io/php/function.array-filter
// récupérer tous les nombres impairs contenus dans le tableau $numbers

$odd_numbers = array_filter($numbers, function ($number) {
    return $number % 2 != 0;
}); // [1, 3, 5]
print_r($odd_numbers);


# array_reduce()

function somme($accumulateur, $n)
{
    $accumulateur += $n;
    return $accumulateur;
}

var_dump(array_reduce($numbers, "somme")); // int(15)
// valeur initiale : 0
// 0 + 1 = 1 => accumulateur
// accumulateur = accumulateur + 2;


// valeur intiale : 100
var_dump(array_reduce($numbers, "somme", 100)); // int(115)







