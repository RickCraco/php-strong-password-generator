<?php
session_start();

function generatePassword($length, $use_numbers, $use_letters, $use_symbols, $allow_repetition) {

    $characters = '';
    if ($use_numbers) $characters .= '0123456789';
    if ($use_letters) $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($use_symbols) $characters .= '!@#$%^&*()-_+=<>?';

    if (!$characters) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=<>?';
    }

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];

        if (!$allow_repetition) {
            $characters = substr_replace($characters, '', $index, 1);
            $charactersLength--;
        }
    }

    return $password;
}


if(isset($_POST['length']) && isset($_POST['numbers']) && isset($_POST['letters']) && isset($_POST['symbols']) && isset($_POST['repete'])){
    $length = $_POST['length'];
    $numbers = $_POST['numbers'];
    $letters = $_POST['letters'];
    $symbols = $_POST['symbols'];
    $repete = $_POST['repete'];

    $password = generatePassword($length, $numbers, $letters, $symbols, $repete);

    if($password){
        $_SESSION['password'] = $password;
        header('Location: result.php');
        exit();
    }else{
        echo 'Error generating password';
    }
}
?>
