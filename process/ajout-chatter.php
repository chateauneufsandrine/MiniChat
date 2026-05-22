<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../public/inscription.php");
    exit();
}

if (!isset($_POST["pseudo"])) {
    header("Location: ../public/inscription.php");
    exit();
}

if (empty($_POST["pseudo"])) {
    header("Location: ../public/inscription.php");
    exit();
}

$pseudo = htmlspecialchars(trim($_POST["pseudo"]));

if (strlen($pseudo) > 50) {
    header("Location: ../public/inscription.php");
    exit();
}

require_once "../utils/db_connexion.php";

$request = $db->prepare('SELECT * FROM chatters WHERE pseudo = :pseudo');
$request->execute([':pseudo' => $pseudo]);
$chatter = $request->fetch(PDO::FETCH_ASSOC);

if (!$chatter) {
    // Nouveau pseudo : la photo est obligatoire
    if (!isset($_FILES['photo-profil']) || empty($_FILES['photo-profil']['name'])) {
        header("Location: ../public/inscription.php");
        exit();
    }

    $request = $db->prepare('INSERT INTO chatters(pseudo) VALUES (:pseudo)');
    $request->execute([":pseudo" => $pseudo]);

    $request = $db->prepare('SELECT * FROM chatters WHERE pseudo = :pseudo');
    $request->execute([':pseudo' => $pseudo]);
    $chatter = $request->fetch(PDO::FETCH_ASSOC);
}

// On upload la photo seulement si une nouvelle est envoyée
if (!empty($_FILES['photo-profil']['name'])) {
    $uploaddir = '../uploads/';
    $uploadfile = $uploaddir . uniqid() . '-' . basename($_FILES['photo-profil']['name']);

    if (!move_uploaded_file($_FILES['photo-profil']['tmp_name'], $uploadfile)) {
        header("Location: ../public/inscription.php");
        exit();
    }

    $chatter['photo_profil'] = $uploadfile;

    $request = $db->prepare('UPDATE chatters SET photo_profil = :photo_profil WHERE id = :id');
    $request->execute([
        ":photo_profil" => $uploadfile,
        ":id" => $chatter['id']
    ]);
}

$_SESSION["chatter"] = $chatter;

header("Location: ../public/chat.php");
exit;

?>


<!-- ancien code
session_start();


// On vérifie que la méthode utilisé est bien celle qu'on voulait
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../public/inscription.php");
    exit();
}

// On vérifie qu'on a bien reçu tous les inputs
if (!isset($_POST["pseudo"]) || !isset($_FILES['photo-profil'])) {
    header("Location: ../public/inscription.php");
    exit();
}

// On vérifie qu'un des champs n'est pas vide
if (
    empty($_POST["pseudo"]) ||
    empty($_FILES['photo-profil'])
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
// on vérifie si le pseudo n'existe pas déjà, si c'est le cas on récupère le chatter en question plutot que de le recréer
$request =  $db->prepare('SELECT * FROM chatters WHERE pseudo = :pseudo');
$request->execute([
    ':pseudo' => $pseudo
]);

$chatter = $request->fetch(PDO::FETCH_ASSOC);

if (!$chatter) {
    // on commence par préparer la requète grace à prepare()(requête avec variable)
    $request =  $db->prepare('INSERT INTO chatters(pseudo)
        VALUES (:pseudo)');

    $request->execute([
        ":pseudo" => $pseudo
    ]);

    // / on vérifie si le pseudo n'existe pas déjà, si c'est le cas on récupère le chatter en question plutot que de le recréer
    $request =  $db->prepare('SELECT * FROM chatters WHERE pseudo = :pseudo');
    $request->execute([
        ':pseudo' => $pseudo
    ]);

    $chatter = $request->fetch(PDO::FETCH_ASSOC);
}

$uploaddir = '../uploads/';
$uploadfile = $uploaddir . uniqid() . '-' . basename($_FILES['photo-profil']['name']);

if (!move_uploaded_file($_FILES['photo-profil']['tmp_name'], $uploadfile)) {
    header("Location: ../public/inscription.php");
    exit();
}




// j'associe l'image que je viens d'upload à l'utilisateur qu'on essaye de connecter
$chatter['photo_profil'] = $uploadfile;

// et j'indique ce chemin pour le chatter en BDD aussi 
$request =  $db->prepare('UPDATE chatters SET photo_profil = :photo_profil WHERE id = :id');

$request->execute([
    ":photo_profil" => $uploadfile,
    ":id" => $chatter['id']
]);


// On connecte la personne au site (représentation de la connexion par la sauvegarde de l'utilisateur dans la session qui ensuite sera accessible de partout sur le sit0e)
$_SESSION["chatter"] = $chatter;

header("Location: ../public/chat.php");
exit; -->
