<?php
session_start();
$_SESSION['letters'] = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
$_SESSION['usedLetters'] = [];
$_SESSION['attempts'] = 6;
//Sélection d'un mot aléatoirement
$rand = array_rand($_SESSION['words']);
$_SESSION['word']= $_SESSION['words'][$rand]; //sélectionne un mot aléatoirement du fichier

header("Location: ./pendu.php")
?>