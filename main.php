<?php
session_start();
if (isset($_POST['letters']))
{
    array_push($_SESSION['usedLetters'], $_POST['letters']); //ajoute la lettre choisie dans 'usedLetters'
    $_SESSION['letters'] = array_diff($_SESSION['letters'], array($_POST['letters'])); //retire la lettre choisie de 'letters'
}

$uniqueArray = array_unique(str_split($_SESSION["word"]));

$leftLetters = array_diff($uniqueArray, $_SESSION['usedLetters']);
$extraLetters = array_diff($_SESSION['usedLetters'], $uniqueArray);

$_SESSION['attempts'] = 6 - count($extraLetters);

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

