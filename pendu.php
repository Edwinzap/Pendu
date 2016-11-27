<?php
/**Page principale (page sur laquelle se trouve le jeu)
 */
session_start();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jeu du Pendu</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<div class="layout-main">
<h1>Jeu du Pendu</h1>
<div id="wordToFind">
    <?php
    /*Crée l'affichage du mot à trouver (avec tiret ou lettre trouvée)*/
    foreach (str_split($_SESSION['word']) as $item)
    {
        if (in_array($item,$_SESSION['usedLetters']))
        {
            echo $item;
        }
        else
        {
            echo '_ ';
        }
    }
    ?>
</div>

<?php
/*Affiche le nombre d'essais restant*/
if($_SESSION['attempts']>1)
{
    echo '<p>Essais restants: ' . $_SESSION['attempts'] . '</p>';
}
else
{
    echo '<p>Essai restant: ' . $_SESSION['attempts'] . '</p>';
}
echo '<p>Lettres utilisées: ' . implode(" ",$_SESSION['usedLetters']) . '</p>';
?>

<form action="main.php" method="post" name="my_form" id="my_form">
    <select name="letters" id="letters" autofocus ">
        <?php
        /*Crée la liste de lettres*/
        foreach ($_SESSION['letters'] as $item)
        {
            echo "<option value=$item>$item</option>";
        }
        ?>
    </select>
    <input type="submit" value="OK" id="test"/>
</form>
<div classe="image">

    <?php
    /*Change d'image en fonction du nombre d'essais restants*/
    switch ($_SESSION['attempts']){
        case 6: echo '<img src="img/pendu0.png">';
            break;
        case 5: echo '<img src="img/pendu1.png">';
            break;
        case 4: echo '<img src="img/pendu2.png">';
            break;
        case 3: echo '<img src="img/pendu3.png">';
            break;
        case 2: echo '<img src="img/pendu4.png">';
            break;
        case 1: echo '<img src="img/pendu5.png">';
            break;
    }
    ?>
</div>
<form action="newgame.php" method="link">
    <input type="submit" value="Nouvelle partie"/>
</form>
</div>
</body>
</html>