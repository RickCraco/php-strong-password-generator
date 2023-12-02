<?php 

if(isset($_POST['length'])){
    $length = $_POST['length'];

    if(!empty($_POST['repete'])){
        $repete = $_POST['repete'];
    }else{
        $repete = "0";
    }
    if(!empty($_POST['characters'])){
        $characters = $_POST['characters'];
    }else{
        $characters = ["letters"];
    }

    $password = generaPassword($length, $repete, $characters);

    echo '<h3>'.$password.'</h3>';
}

function generaPassword($length, $repete, $characters){
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%&';

    $stringtoUse = '';

    $password = '';

    // se l'array é vuoto voglio che stringtoUse sia concatenata a tutti i numeri lettere e simboli

    if(count($characters) > 0){

        if(in_array('letters', $characters)){
            $stringtoUse .= $letters;
        }
        if(in_array('numbers', $characters)){
            $stringtoUse .= $numbers;
        }
        if(in_array('symbols', $characters)){
            $stringtoUse .= $symbols;
        }
    }else{
        $stringtoUse = $letters.$numbers.$symbols;
    }

    if($repete === "1"){
        for($i = 0; $i < $length; $i++){
            $password .= $stringtoUse[rand(0, strlen($stringtoUse) - 1)];
        }
    }elseif($repete === "0"){
        while(strlen($password) < $length){
            $newCharacter = $stringtoUse[rand(0, strlen($stringtoUse) - 1)];
            if(!strpos($password, $newCharacter)){
                $password .= $newCharacter;
            }
        }
    }

    return $password;
}

?>