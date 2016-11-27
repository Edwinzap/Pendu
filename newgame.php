<?php
/**Page d'initialisation d'une nouvelle partie*/

session_start();

//$_SESSION['letters'] = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
$_SESSION['letters'] = range('A', 'Z');
$_SESSION['usedLetters'] = [];
$_SESSION['attempts'] = 6;

//Sélection d'un mot aléatoirement
$rand = array_rand($_SESSION['words']); //Ou utiliser Shuffle()
$_SESSION['word']= $_SESSION['words'][$rand]; //sélectionne un mot aléatoirement du fichier

header("Location: ./pendu.php")
?>