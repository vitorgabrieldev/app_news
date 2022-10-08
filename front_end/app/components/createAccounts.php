<?php ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Crie sua conta gratuitamente</title>

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ========================== Style sheets ========================== -->
    <link rel="stylesheet" href="./createAccounts.css">


    <style>
        .msg_alert
        {
            font-size: 1rem;
            font-family: monospace;
            margin: 1.5rem;
        }
    </style>
    
</head>
<body>
    <!-- Components -->

    <section class="formContainer">
        <form action="../../../back_end/public/redirectNewAccount.php" method="POST" class="form">
            <h1 class="titleForm">Login</h1>
            <br>
            <label class="labelForm" for="username">Username</label>
            <br>
            <input type="text" name="username" id="username" placeholder="Your username" spellcheck="false" required>
            <br>
            <label class="labelForm" for="email">Email</label>
            <br>
            <input type="text" name="email" id="email" placeholder="Your email" spellcheck="false" required>
            <br>
            <label class="labelForm" for="Password">Password</label>
            <br>
            <input type="password" name="password" id="Password1" placeholder="Your Password" spellcheck="false" required>
            <br>
            <br>
            <div  id="createAccounts">
                <input value="Criar" type="submit" name="submit" class="containerSubmitForm">
            </div>
            <p class="msg_alert">
                Username deve conter até 8 digitos ! <br>
                Senha deve conter 8 ou mais digitos !
            </p>
            <div class="containerSubmitForm responsiveBTNredirect">
                <button type="button" class="createAccountsBTN">Entrar</button>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
        </form>
        <article class="redirectEnter">
            <h1 class="titleForm2">YOU ALREADY HAVE AN ACCOUNT</h1>
            <br><br><br>
            <div class="containerSubmitForm">
                <button type="button" class="createAccountsBTN">Entrar</button>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
        </article>
    </section>

    <!-- ========================== Scripts Sheets ========================== -->
    <script src="./validation_form.js"></script>

</body>
</html>