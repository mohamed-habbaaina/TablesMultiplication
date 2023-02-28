<?php
session_start();

if(isset($_GET['response'])):
        
        $result = (int) $_GET['response'];

        $number1 = $_SESSION['number1'];
        $number2 = $_SESSION['number2'];

        if($result === $number1 * $number2):
        
            $message = 'Felicitation';
            $scors = time();
            $calcul = $number1 . ' * ' . $number2;
            $rsl = 'Juste';
            require_once './connection.php';
            $request = $db->prepare("INSERT INTO `scors` (`date`, `calcul`, `result`) VALUE (NOW(), '$calcul', '$rsl')");
            $request->execute();

        else:
            $message = 'Dommage';
            $scors = time();
            $calcul = $number1 . ' * ' . $number2;
            $rsl = 'Faux';
            require_once './connection.php';
            $request = $db->prepare("INSERT INTO `scors` (`date`, `calcul`, `result`) VALUE (NOW(), '$calcul', '$rsl')");
            $request->execute();

        endif;
    endif;

    $_SESSION['scors'] = $message;
    header('location:./practice.php');