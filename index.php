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
        <p>Choisissez la table à afficher dans la liste</p>
        <div class="choixTable">
            <form action="table.php" method="post">
                <?php
                for ($i = 1; $i < 16; $i++) {
                    echo '<div class="nombre"><input type="radio" id="nombre' . $i . '" name="groupe" value="' . $i . '"><label for="nombre' . $i . '"> table de ' . $i . '</label></div>';
                }
                ?>
                <input type="submit" value="Afficher la table">
            </form>
        </div>
    </div>



    <!-- <script src="js/script.js"></script>   -->
</body>

</html>