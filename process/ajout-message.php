<?php
// var_dump($_POST);
require_once "../utils/isConnected.php";

// On vérifie que la méthode utilisé est bien celle qu'on voulait
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../public/chat.php");
    exit();
}

// On vérifie qu'on a bien reçu tous les inputs
if (
    !isset($_POST["message"]) 
) {
    header("Location: ../public/chat.php");
    exit();
}

// On vérifie qu'un des champs n'est pas vide
if (
    empty($_POST["message"])
) {
    header("Location: ../public/chat.php");
    exit();
}

// Input Sanitization
$message = htmlspecialchars(trim($_POST["message"]));

$dateTime = date("Y-m-d H:i:s");
$adresseIp = $_SERVER["REMOTE_ADDR"];
$userId = $_SESSION['chatter']['id']; 


// $id = htmlspecialchars(trim($_POST["id"]));

// On vérifie que les règles d'usages sont respectées
if (strlen($message) > 500) {
    header("Location: ../public/chat.php");
    exit();
}

require_once "../utils/db_connexion.php";

// on commence par préparer la requète grace à prepare()(requête avec variable)
$request = $db->prepare('INSERT INTO messages (message, created_at, ip_adress, user_id)
    VALUES (:message, :created_at, :ip_adress, :user_id)
');

$request->execute([
    ":message" => $message,
    ":created_at" => $dateTime,
    ":ip_adress" => $adresseIp,
    ":user_id" => $userId
   

]);

header("Location: ../public/chat.php");
exit;
