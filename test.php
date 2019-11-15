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
    <title>Multiplicator</title>
</head>

<body>
    <div class="container">
        <h1>Multiplicator</h1>

        <h2>Révisez la table de <?php $nombre = $_SESSION['nombre'];echo $nombre; ?></h2>

        <?php
        if ($_SESSION['partie'] < 9) {
            if (isset($_SESSION['mult']) && isset($_POST['essai'])) {
                // test si c'est bon ou pas
                $essai = $_POST['essai'];
                $mult = $_SESSION['mult'];
                $score = $_SESSION['score'];
                $partie = $_SESSION['partie'];
                if ($essai == $nombre * $mult) {
                    echo '<p>Gagné</p!>';
                    $score++;
                    $partie++;
                } else {
                    echo '<p>Loupé, c\'est ' . $nombre * $mult . '</p>';
                    $partie++;
                }
                $_SESSION['mult'] = rand(1, 15);
                $_SESSION['score'] = $score;
                $_SESSION['partie'] = $partie;
                $mult = $_SESSION['mult'];
                echo '<p>Combien vaut ' . $mult . ' multiplié par ' . $nombre . ' ?</p><form action="test.php" method="post"><input type="text" name="essai" autofocus><input type="submit" value="Envoyer"></form>';
            } else {
                $_SESSION['mult'] = rand(1, 15);
                $mult = $_SESSION['mult'];
                echo '<p>Combien vaut ' . $mult . ' multiplié par ' . $nombre . ' ?</p><form action="test.php" method="post"><input type="text" name="essai" autofocus><input type="submit" value="Envoyer"></form>';
            }
            echo '<p>Score : ' . $_SESSION['score'] . ' sur ' . $_SESSION['partie'] . '</p>';
        } else {
            echo '<p>Partie terminée ! Votre score : ' . $_SESSION["score"] . ' sur 10</p>';
        }
        ?>
        <div class="bouton">
            <a href="index.php">Afficher une autre table</a>

        </div>
    </div>


    <!-- <script src="js/script.js"></script>   -->
</body>

</html>