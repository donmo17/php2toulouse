<?php

function cleanData($data)
{
    //Retranscription de caractères HTML pour éviter les attaques XSS
    $data = htmlspecialchars($data);
    //Retirer les espaces
    $data = trim($data);
    //Echapper les antislashs
    $data = stripslashes($data);

    return $data;
}
;


// Vérifier que le formulaire :
// - a été soumis isset($_POST['submit'])
// - utilise la méthode d'envoi POST

// Récupération des données
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$date = $_POST['hidden'];

// Nettoyage des données
$prenom = cleanData($prenom);
$email = cleanData($email);

// Vérifier les données
if (empty($prenom)) {
    echo "Prénom vide";
}
if (empty($email)) {
    echo "Email vide";
}

// Valider les données
if (!preg_match("/^[a-zA-Zéèî]{2,30}$/", $prenom)) {
    echo "Le prénom n'est pas validé.";
}
;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email non valide.";
}

echo "Prénom : " . $prenom . "<br>";
echo "Email : " . $email . "<br>";
echo "Date d'envoi :" . $date;

