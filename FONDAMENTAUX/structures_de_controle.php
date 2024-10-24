<?php

// if ... else
$a = 50;

if ($a > 100) {
    echo "Réussite !";
} else {
    echo "Echec !";
}

// ternaire
echo ($a > 100) ? "Réussite !" : "Echec !";


// switch

$langue = 'fr';

switch ($langue) {
    case 'de':
        echo "Wilkomen !";
        break;
    case 'en':
        echo "Welcome !";
        break;
    case 'es':
        echo "Bienvenidos !";
        break;
    default:
        echo "Bienvenue !";
        break;
}

// MATCH (depuis PHP 8)

$langue = 'it';

$message = match ($langue) {
    "de" => "Hallo",
    "en" => "Hello",
    "fr" => "Bonjour",
    default => "Bonjour"
};

echo $message;

// Comparer les prix de deux produits pour déterminer le produit le moins cher.
// Dans le cas de prix identiques, indiquer "Les 2 produits sont au même prix".

$produit1 = 18;
$produit2 = 15;
$identique = "Les 2 produits sont au même prix.";

# comparaison classique
if ($produit1 < $produit2) {
    echo "Le produit 2 est plus cher que le 1";
} elseif ($produit1 > $produit2) {
    echo "Le produit 1 est plus cher que le 2";
} else {
    echo $identique;
}
;

# utilisation du "spaceship operator"
$response = match ($produit1 <=> $produit2) {
    -1 => "Le produit 1 est moins cher que le produit 2",
    1 => "Le produit 2 est plus cher que le produit 1",
    0 => $identique
};
echo $response . PHP_EOL;


// Opérateur de fusion null ??
$userName = null;
$defaultUserName = "Visiteur";

// if ($userName = null) {
//     echo $defaultUserName;
// } else {
//     echo $userName;
// }

// Si $userName est null alors on prend la valeur de droite (ici $defaultUserName)
$message = $userName ?? $defaultUserName;
echo $message . PHP_EOL; // visiteur

$userName = "Alice";
$message = $userName ?? $defaultUserName;
echo $message . PHP_EOL; // Alice

// Affectation de l'opérateur fusion null ??
$civilite = null;
$civilite ??= "M.";
echo $civilite . PHP_EOL; // M.

$civilite = "Mme";
$civilite ??= "M.";
echo $civilite . PHP_EOL; // Mme.