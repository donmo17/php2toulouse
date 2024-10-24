<?php
//declare(strict_types=1); // force le respect des types des paramètres d'une fonction

$addition = function ($a, $b) {
    $somme = $a + $b;
    return $somme;
};

echo $addition(3, 5) . PHP_EOL; // 8

// TYPAGE DES PARAMETRES (PHP8)
function customerData(string $civilite, string $prenom, int $age, bool|int $dispo): array
{
    $arr = ['civilite' => $civilite, 'prenom' => $prenom, 'age' => $age, 'dispo' => $dispo];
    return $arr;
}
;

$client = customerData('Mme', 'Alice', 24, true);
var_dump($client);

// ARGUMENTS NOMMES (PHP8)
function userInfos(string $civilite, string $prenom, $age, $dispo): array
{
    // Ne pas oublier de traiter les types de données

    // ternaire; impose une valeur par défaut si le type n'est pas respecté
    $civilite = is_string($civilite) ? $civilite : 'Monsieur/Madame';
    $prenom = is_string($prenom) ? $prenom : 'Visiteur';
    $age = is_int($age) ? $age : '-';
    $dispo = is_int($dispo) ? $dispo : '❌';

    $arr = ['civilite' => $civilite, 'prenom' => $prenom, 'age' => $age, 'dispo' => $dispo];
    return $arr;
}
;

$userInfos = userInfos(age: '24', dispo: 2.5, civilite: 'Mr', prenom: 'Bob');
var_dump($userInfos);