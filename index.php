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
    <h2>Choisissez la table à afficher</h2>

    <form class="flexindex" action="table.php" method="post">
        <div class="container">
            <div class="choixTable">
                <div class="nombre">
                    <input type="radio" id="nombre1" name="groupe" value="1" checked>
                    <label for="nombre1"> Table de 1</label>
                </div>
                <?php
                for ($i = 2; $i < 16; $i++) {
                    echo '<div class="nombre"><input type="radio" id="nombre' . $i . '" name="groupe" value="' . $i . '"><label for="nombre' . $i . '"> Table de ' . $i . '</label></div>';
                }
                ?>
            </div>
        </div>
        <input class="hop" type="submit" value="Hop !!!">
    </form>





    <!-- <script src="js/script.js"></script>   -->
</body>

</html>