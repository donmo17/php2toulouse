<?php
error_reporting(E_ALL);
// Ou son équivalent : ini_set('error_reporting', E_ALL);

// Enregister les erreurs survenues dans un fichier de log
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/error.log');
// echo "__DIR__ :" . __DIR__ . PHP_EOL;

// DONNEES SCALAIRES

$entier = 1; // entier
$flottant = 2.3; // flottant
$vrai = true; //boolean
$faux = false; // boolean

echo "\$vrai : " . $vrai . PHP_EOL;
echo "\$faux : " . $faux . PHP_EOL;

// DONNEES COMPOSEES

# Tableaux
$arr1 = array("chaine", 2, true);
$arr2 = ["string", 12, false];
//$obj = new Animal();

# Fonctions
$displayName = function () {
    echo "Je suis Alice !";
};

// Récupération du type d'une donnée

# gettype()
echo gettype($arr1) . PHP_EOL; // array
echo gettype($displayName) . PHP_EOL; // object

# fonctions is_???
echo is_int($entier) . PHP_EOL; // 1
echo is_bool($faux) . PHP_EOL; // 1


// Conversions

# conversion implicite (mauvaise pratique)
$n1 = 2;
$str1 = "10 unités";
echo $n1 + $str1 . PHP_EOL; // 12

# conversion explicite (bonne pratique)
$n2 = 6;
$str2 = "10";
echo $n2 + (int) $str2 . PHP_EOL;

# utilisation de settype (bonne pratique)
$n3 = 6;
$str3 = "10 unités";
settype($str3, "int");
echo $n3 + $str3 . PHP_EOL;

# ??val()
$n4 = "20.55BC";
echo floatval($n4) . PHP_EOL;
