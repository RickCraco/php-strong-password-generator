<?php
session_start();

function generatePassword($length, $use_numbers, $use_letters, $use_symbols, $allow_repetition) {
    
    $characters = '';
    if ($use_numbers) $characters .= '0123456789';
    if ($use_letters) $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($use_symbols) $characters .= '!@#$%^&*()-_+=<>?';

    $password = '';

    if($allow_repetition == true){
        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $password .= $characters[$index];
            //var_dump($password);
        }
    }else{
        while(strlen($password) < $length){
            $newCharacter = $characters[rand(0, strlen($characters) - 1)];
            if(!strpos($password, $newCharacter)){
                $password .= $newCharacter;
            }
        }
    }

    
    $_SESSION['password'] = $password;
    return $password;
}

if(isset($_POST['length'])){
    $length = $_POST['length'];
    $numbers = isset($_POST['numbers']);
    $letters = isset($_POST['letters']);
    $symbols = isset($_POST['symbols']);
    $repete = isset($_POST['repete']);

    $password = generatePassword($length, $numbers, $letters, $symbols, $repete);
}
    
    var_dump($password);

    /*
    if($password){
        $_SESSION['password'] = $password;
        header('Location: showpassword.php');
        exit();
    }else{
        echo '<h2>Your Password:</h2>';
        echo '<p>' . $password . '</p>';
    } */
?>
