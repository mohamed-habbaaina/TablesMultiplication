<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">

    <title>Tables de Multiplication</title>
</head>
<body>
    <main>

        <div>
            <p>Bonjour <span>John</span></p>
        </div>

        <div class="container">

            <div class="home">
                <h2>Révisez les tables de multiplication</h2>
                <form action="./src/revision.php" id="tables">
                    <label for="number">Choisis un Chiffre:</label>

                    <select name="number" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>

                    </select>
                    <button>Validez</button>
                </form>
            </div>

            <div class="home">
                <h2>S'entraîner</h2>
                <form action="./src/practice.php">
                    <select name="shuffle">
                        <option value="1">Aliatoire</option>
                        <!-- <option value="2">Choisis un chiffre</option> -->
                    </select>
                    <button>Validez</button>
                </form>
            </div>

            
        </div>

        <div>
            <button class="btn"><a href="./src/resultats.html">Voir Les Résultats</a></button>
        </div>
    </main>
</body>
</html>