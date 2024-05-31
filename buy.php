<?php 
    include_once 'datConn.php';

    $id = $_REQUEST['Name'];
    $sql="INSERT INTO Basket(Numele) VALUES('$id')";
    mysqli_query($con, $sql);
    echo "Adaugat in Cos";
    

?>
