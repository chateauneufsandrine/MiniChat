<?php 
session_start();

if(!isset($_SESSION['chatter']) || empty($_SESSION['chatter'])){
    header("Location: ../public/inscription.php");
}

?>