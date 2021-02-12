<?php
    $host = 'localhost';
    $db = 1390413;
    $password = 'JRLEt9D56-X9vVQ';
    $user = 1390413;

    // Create connection
    $conn = new MySQLi($host, $db, $password, $user);

    // Check connection
    if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
    }
?>
