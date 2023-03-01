<?php
session_start();

    if(isset($_GET['shuffle'])):
        $level = (int)$_GET['shuffle'];
    else: $level = 1; // if user uses the url to access the page
    endif;
    
    if($level === 1):
        $number1 = random_int(1, 9);
        $number2 = random_int(1, 9);
        $_SESSION['number1'] = $number1;
        $_SESSION['number2'] = $number2;

    endif;

    if(isset($_SESSION['scors'])):
    
        $message = $_SESSION['scors'];
    endif;


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Practice</title>
</head>
<body>
<header>
    <button class="btn" style="margin-top: 30px;"><a href="../index.php">Accueil</a></button>
    <button class="btn"><a href="./resultats.html">Voir Les Résultats</a></button>
</header>
<main>

    <div class="practice">
        <table>
            <tr>
                <td><?= $number1?></td>
                <td> * </td>
                <td><?= $number2?></td>
            </tr>
        </table>

        <form action="./calcul.php" id="practiceForm">
            <label for="response">Réponse:</label>
            <input type="number" name="response" id="response" placeholder="Répondez ici">
            <button>Validez</button>
        </form>
            
            <!-- Displaye message -->
            <p>
                <?php if(isset($message)):
                echo $message;
                endif;?>
            </p>
    </div>
</main>
    
</body>
</html>
<?php
