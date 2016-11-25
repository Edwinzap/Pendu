<?php
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
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
if($_GET['victory'] == "true")
{
    echo "<h2>Felicitations !</h2>";
}
else
{
    echo '<h2>Zut alors, tu as perdu...</h2>';
    echo '<h2>Essaye encore !</h2>';

    echo '<img src="img/pendu6.png">';
}

echo '<p>Le mot était: ' . $_SESSION['word'] . '</p>';
?>
<form action="newgame.php" method="link">
    <input type="submit" value="Nouvelle partie"/>
</form>
</body>
</html>