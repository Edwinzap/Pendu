<?php
/**Page de traitement*/

session_start();

if (isset($_POST['letters']))
{
    array_push($_SESSION['usedLetters'], $_POST['letters']); //ajoute la lettre choisie dans 'usedLetters'
    $_SESSION['letters'] = array_diff($_SESSION['letters'], array($_POST['letters'])); //retire la lettre choisie de 'letters'
}
/*Tableau contenant les lettres uniques du mot à trouver*/
$uniqueArray = array_unique(str_split($_SESSION["word"])); 

/*Tableau contenant les lettres encore à trouver*/
$leftLetters = array_diff($uniqueArray, $_SESSION['usedLetters']);

/*Tableau contenant les lettres en trop*/
$extraLetters = array_diff($_SESSION['usedLetters'], $uniqueArray);

$_SESSION['attempts'] = 6 - count($extraLetters);

/*Vérifie si la partie est gagnée*/
if(count($leftLetters)<=0)
{
    header("Location: ./end.php?victory=true");
}
elseif ($_SESSION['attempts'] <= 0)
{
    header("Location: ./end.php?victory=false");
}
else
{
    header("Location: ./pendu.php");
}

?>

