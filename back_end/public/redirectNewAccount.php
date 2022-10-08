<?php



    if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
        header('LOCATION: createAccounts.php');
        exit();
    };

    if(strlen($_POST['username']) >= 3 && strlen($_POST['username']) <= 6 && strlen($_POST['password']) >= 8 && strlen($_POST['email']) >= 6) {
        insertToDatabase();
    } else {
        header('LOCATION: ../../front_end/app/components/createAccounts.php');
    };

    function insertToDatabase() {
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        include('../private/configUsers.php');

        $query = mysqli_query($mysqli,"INSERT INTO users(nome, email, senha)VALUES('$username', '$email', '$password')");

        startEnterSession();

    };

    function startEnterSession() {
        if(!isset($_SESSION)) { 
            session_start();
        };

        $_SESSION['nomeUser'] = $_POST['username'];
        $_SESSION['emailUser'] = $_POST['email'];
        $_SESSION['passwordUser'] = $_POST['password'];

        header("LOCATION: ../../front_end/app/feedAccounts.php");
    };

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta criada - Aguarde enquanto processamos seus dados...</title>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .containerMain
        {
            padding: 3rem;
            border-radius: .3rem;
            border: .01rem solid #000;

            text-align: center;

            display: block;
        }

        .containerMain h1 {
            font-family: monospace;
            font-size: 2rem;
        }

        .load
        {
            width: 2rem;
            height: 2rem;
            border: 0.1rem solid #000;
            border-bottom: 0.1rem solid transparent;
            animation: load 3s infinite ease-in-out;
            border-radius: 50%;
        }

        @keyframes load {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

    </style>

</head>
<body>
    <section class="containerMain">
        <h1>Olá, <?php echo $_POST['username']?> seja bem vindo ao mundo das noticias! <br> 
        Estamos preparamos tudo para você !
    </h1>
    <div class="load"></div>
    </section>
</body>
</html>