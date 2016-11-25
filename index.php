<?php
session_start();
$_SESSION['words'] = trimTab(file('pendu.txt'));

header("Location: ./newgame.php");

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