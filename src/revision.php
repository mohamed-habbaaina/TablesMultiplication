<?php
    if(isset($_GET['number'])):
        $number = (int)$_GET['number'];
    else: $number = 1; // if user uses the url to access the page
    endif;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>les tables de multiplication</title>
</head>
<body>
    <header><button class="btn"><a href="../index.php">Acceul</a></button></header>
    <main>
        <div class="table">
                <table>
                    <thead>
                        <th>La table de: <?= $number; ?></th>
                    </thead>

                    <?php
                    /**
                     * automatic table creation
                     * @return table of $number eg: 5 * 7 = 35
                     */
                    $i = 1;
                    while ($i < 10) {
                        $result = $i * $number;
                        echo '<tr>
                        <td>' . $number . ' * ' . $i . ' =  <span>' . $result . '</span></td></tr>';
                        $i++;
                    }
                    ?>
                </table>
        </div>

    </main>
</body>
</html>