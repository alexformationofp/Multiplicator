<?php
session_start();
$nombre = ($_POST['groupe']);
$_SESSION['nombre'] = $nombre;
$_SESSION['score'] = 0;
$_SESSION['partie'] = 0;
// var_dump ($nombre);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="scss/style.css">
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet">
    <title>Multiplicator</title>
</head>

<body> 
    <h1>Multiplicator</h1>
    <?php
    echo '<h2>La table de ' . $nombre . '</h2>';
    ?>
    <div class="container">
        <div class="choixTable">
            <ul>
                <?php
                for ($i = 1; $i < 16; $i++) {
                    echo '<li>' . $nombre . ' X ' . $i . ' = ' . $nombre * $i . '</li>';
                }
                ?>
            </ul>
        </div>     
    </div>
    <div class="bouton">
        <a href="index.php">Afficher une autre table</a>
        <a href="test.php">Réviser la table de <?php echo $nombre ?></a>
    </div>


    <!-- <script src="js/script.js"></script>   -->
</body>

</html>