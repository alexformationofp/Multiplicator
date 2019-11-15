<?php
session_start();
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
    <h2>Révisez la table de <?php $nombre = $_SESSION['nombre'];
                            echo $nombre; ?></h2>
    <div class="flexindex">
            <div class="container relative">
        <div class="choixTable">
            <?php
            if ($_SESSION['partie'] < 9) {
                if (isset($_SESSION['mult']) && isset($_POST['essai'])) {
                    // test si c'est bon ou pas
                    $essai = $_POST['essai'];
                    $mult = $_SESSION['mult'];
                    $score = $_SESSION['score'];
                    $partie = $_SESSION['partie'];
                    if ($essai == $nombre * $mult) {
                        echo '<p id ="gagner" class="message">Gagné !</p>';
                        $score++;
                        $partie++;
                    } else {
                        echo '<p class="message">Loupé, </br>'.$mult.' X '.$nombre.' = ' . $nombre * $mult . '</p>';
                        $partie++;
                    }
                    $_SESSION['mult'] = rand(1, 15);
                    $_SESSION['score'] = $score;
                    $_SESSION['partie'] = $partie;
                    $mult = $_SESSION['mult'];
                    echo '<p class="test">' . $mult . ' X ' . $nombre . '</br>=</p><form class="formulaire" action="test.php" method="post"><input class="tentative" type="text" size="3" name="essai" autofocus><input type="submit" class="valider" value="Valider"></form>';
                } else {
                    $_SESSION['mult'] = rand(1, 15);
                    $mult = $_SESSION['mult'];
                    echo '<p class="test">' . $mult . ' X ' . $nombre . '</br>=</p><form class="formulaire" action="test.php" method="post"><input class="tentative" type="text" size="3" name="essai" autofocus><input type="submit" class="valider" value="Valider"></form>';
                }
                echo '<p class="score">Score : ' . $_SESSION['score'] . ' sur ' . $_SESSION['partie'] . '</p>';
            } else {
                echo '<p class="fin">Partie terminée !</br> Votre score :</br> ' . $_SESSION["score"] . ' sur 10</p>';
            }
            ?>
        </div>

    </div>

    <div class="bouton">
        <a href="index.php">Afficher une autre table</a>

    </div>

    </div>



    <!-- <script src="js/script.js"></script>   -->
</body>

</html>