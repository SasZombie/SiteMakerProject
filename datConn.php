<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "1";
    $dbName = "dataBaze";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    if(!$conn)
        {
            echo "connection failed";
            exit();
        }
?>
