<?php
    //Credenziali
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prova01";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Controllo
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>