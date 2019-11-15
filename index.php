<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="scss/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800&display=swap" rel="stylesheet">
    <title>Multiplicator</title>
</head>

<body>
    <div class="container">
        <h1>Multiplicator</h1>
        <h2>Choisissez la table à afficher</h2>
        <div class="choixTable">
            <form action="table.php" method="post">
                <div class="liste">
                    <?php
                for ($i = 1; $i < 16; $i++) {
                    echo '<div class="nombre"><input type="radio" id="nombre' . $i . '" name="groupe" value="' . $i . '"><label for="nombre' . $i . '"> Table de ' . $i . '</label></div>';
                }
                ?>
                </div>
                <input type="submit" value="Afficher la table">
            </form>
        </div>
    </div>



    <!-- <script src="js/script.js"></script>   -->
</body>

</html>