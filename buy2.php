<?php 
    include_once 'datConn.php';

    $id = $_REQUEST['Name'];
    $sql="INSERT INTO Basket(Numele) VALUES('$id')";
    mysqli_query($conn, $sql);
    echo "Adaugat cu sucess in baza de date";

?>
