<?php
    include_once 'dataCon.php';

    $text = $_REQUEST['text'];

    $sql = "SELECT * FROM ListaOwneri";
    $result = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_query($result))
        if($row['Numele'] == $text)
        

        
    
    
    
?>