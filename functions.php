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


    $length = isset($_POST['length']);
    $numbers = isset($_POST['numbers']);
    $letters = isset($_POST['letters']);
    $symbols = isset($_POST['symbols']);
    $repete = isset($_POST['repete']);

    var_dump($length);
    var_dump($numbers);
    var_dump($letters);
    var_dump($symbols);
    var_dump($repete);
    //$password = generatePassword($length, $numbers, $letters, $symbols, $repete);
    //var_dump($password);

    /*
    if($password){
        $_SESSION['password'] = $password;
        header('Location: showpassword.php');
        exit();
    }else{
        echo 'Error generating password';
    } */
?>
