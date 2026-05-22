<?php 
session_start();

unset($_SESSION['chatter']);

header("Location: ../public/inscription.php")
?>