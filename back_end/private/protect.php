<?php

    if(!isset($_SESSION)) {
        session_start();
    };

    if(!isset($_SESSION['nomeUser'])) {
        header('LOCATION: ./index.html');
    }

?>