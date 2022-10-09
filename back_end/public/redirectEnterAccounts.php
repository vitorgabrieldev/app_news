<?php

    include('../private/configUsers.php');

    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $mysqli->real_escape_string($_POST['password']);

    $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = '$password'";
    $sql_query = $mysqli->query($sql_code) OR die("Falha na execução da query" . $mysqli->error);

    $qtdUsers = $sql_query->num_rows;

    if($qtdUsers >= 1) {
        $user = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) { 
            session_start();
        };

        $_SESSION['nomeUser'] = $user['nome'];
        $_SESSION['idUser'] = $user['id'];

        header("LOCATION: ../../front_end/app/feedAccounts.php");

    } else {
        header("LOCATION: ../../front_end/app/components/enterAccounts.php");
    };

?>