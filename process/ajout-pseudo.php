<?php
var_dump($_POST);

// On vérifie que la méthode utilisé est bien celle qu'on voulait
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../public/inscription.php");
    exit();
}

// On vérifie qu'on a bien reçu tous les inputs
if (!isset($_POST["pseudo"])) {
    header("Location: ../public/inscription.php");
    exit();
}

// On vérifie qu'un des champs n'est pas vide
if (
    empty($_POST["pseudo"])
) {
    header("Location: ../public/inscription.php");
    exit();
}

// Input Sanitization

$pseudo = htmlspecialchars(trim($_POST["pseudo"]));
// $id = htmlspecialchars(trim($_POST["id"]));


// On vérifie que les règles d'usages sont respectées
if (strlen($pseudo) > 50) {
    header("Location: ../public/inscription.php");
    exit();
}

require_once "../utils/db_connexion.php";

// on commence par préparer la requète grace à prepare()(requête avec variable)
$request =  $db->prepare('INSERT INTO chatters(pseudo)
        VALUES (:pseudo)');

$request->execute([
    ":pseudo" => $pseudo
]);

header("Location: ../inscription.php");
exit;
