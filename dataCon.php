<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "1";
    $dbName = "dataBaze";

    $con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    if(!$con)
        {
            echo "connection failed";
            exit();
        }
?>
