<?php
    $servername = "db";
    $username = "Yasser";
    $password = "azerty";

    try {
    $db = new PDO("mysql:host=$servername;dbname=appData", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
