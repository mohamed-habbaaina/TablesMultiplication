<?php
session_start();
var_dump($_GET['response'], $_SESSION);
    if(isset($_GET['response'])):
        
        $result = (int) $_GET['response'];

        $number1 = $_SESSION['number1'];
        $number2 = $_SESSION['number2'];


        if($result === $number1 * $number2):
        
            $message = 'Felicitation';
            $scors = time();

        else: $message = 'Dommage';
        endif;
    endif;

    $_SESSION['scors'] = $message;
    header('location:./practice.php');