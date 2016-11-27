<?php
/**Page d'initialisation
 */
session_start();
$_SESSION['words'] = trimTab(file('pendu.txt'));

header("Location: ./newgame.php");


/*Trim tous les mots puis les met dans le tableau*/
function trimTab($tab)
{
    $t = [];
    foreach ($tab as $item)
    {
        array_push($t,trim($item));
    }
    return $t;
}
?>