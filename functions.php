<?php
session_start();
$psw_length = $_GET["psw_length"];

// rand(int 0, int count($available_characters)): int
function generateRndPsw($psw_length)
{

    if (isset($_GET["psw_length"])) {
        // Prendere la lunghezza dell'array e ciclare l'array di caratteri disponibili pushandoli all'array della password effettiva fino ad arrivare al numero richiesto dalla lunghezza
        $available_characters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ123456789!"£$%&/()=?{}[]';
        $password_result = "";

        while (strlen($password_result) < $psw_length) {
            $rnd = rand(0, (strlen($available_characters) - 1));
            $character = $available_characters[$rnd];
            $password_result .= $character;
        }
        $_SESSION["password"] = $password_result;
        header("Location: ./password.php");
    }
}
