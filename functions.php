    <?php
    session_start();

    function generatePassword($length,$allow_repetition) {
        
        $characters = '';
        if(count($_POST['characters']) > 0){
            if(in_array('numbers', $_POST['characters'])){
                $characters .= '0123456789';
            }
            if(in_array('letters', $_POST['characters'])){
                $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            }
            if(in_array('symbols', $_POST['characters'])){
                $characters .= '!@#$%^&*()-_+=<>?';
            }
        }


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

        return $_SESSION['password'] = $password;
    }

    //var_dump($_SESSION['prova']);

    if(isset($_POST['length'])){
        $length = $_POST['length'];
        $repete = isset($_POST['repete']);

        $password=generatePassword($length,$repete);
        var_dump($password);
        //$_SESSION['pippo'] = $password;
        //var_dump($_SESSION['pippo']);
        //header('Location: showpassword.php');
        //exit();
    }
        /*
        echo '<h2>Your Password:</h2>';
        echo '<h3>' . $password . '</h3>';
        */
        /*
        if($password){
            $_SESSION['password'] = $password;
            header('Location: showpassword.php');
            exit();
        }else{
            echo '<h2>Your Password:</h2>';
            echo '<p>' . $password . '</p>';
        }  */
    ?>
