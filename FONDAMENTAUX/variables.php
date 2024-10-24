<?php

$animal = 'chien';
$chien = 'labrador';

echo "Le $chien est un $animal" . PHP_EOL;
echo $animal . $chien . PHP_EOL;

// Variable de variable (deprectaed depuis la version PHP 8.2)
echo "Le ${$animal} est un $animal" . PHP_EOL;

# CONSTANTE
define("COULEUR", "rouge");
echo "Ma couleur préférée est le " . COULEUR;

# CONSTANTES MAGIQUES
echo "__LINE__ : " . __LINE__ . PHP_EOL;
echo "__DIR__ : " . __DIR__ . PHP_EOL;
echo "__FILE__ : " . __FILE__ . PHP_EOL;

# VALEUR ET REFERENCE
$a = 10;
$b = $a; # affectation (classique) par valeur 
$c = &$a; # affectation par référence 'esperluette ou & commercial
$a = 20;

echo "\$a = " . $a . PHP_EOL;
echo "\$b = " . $b . PHP_EOL;
echo "\$c = " . $c . PHP_EOL;




