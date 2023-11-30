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
    $charactersLength = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, $charactersLength - 1);
        $password .= $characters[$index];

        if (!$allow_repetition) {
            $characters = substr_replace($characters, '', $index, 1);
            $charactersLength--;
        }
    }

    return $password;
}

?>
