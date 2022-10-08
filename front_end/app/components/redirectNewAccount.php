<?php


        if(strlen($_POST['username']) < 8)
        {
            echo "Seu username deve conter 8 ou mais digitos!";
        } else if(strlen($_POST['password']) <= 8) {
            echo "Sua senha deve conter 8 ou mais digitos!";
            } else if(strlen($_POST['email']) <= 12) {
                    echo "Insira um email valido!";
                    } else {               
                        if(strlen($_POST['password']) <= 8) {
                    echo "Sua senha deve conter 8 ou mais digitos!";
            } else {
                header("LOCATION: redirectNewAccount.php");
        };

    

    // echo "Ola ".$username.", seja bem vindo ao Web_Code!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta criada - Aguarde enquanto processamos seus dados...</title>
</head>
<body>
    
</body>
</html>