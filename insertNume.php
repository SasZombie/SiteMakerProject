<?php
    include_once 'dataCon.php';

    $text = $_REQUEST['text'];
    $category = $_REQUEST['cat'];
    $text2 = $_REQUEST['text2'];
    
    
    
    if($category != '0')
    {
      $text2 = ($text2 * 10) + 15;
      $categoria = "Dinamica";
      $sql = "INSERT INTO ListaOwneri(Numele, Price, TipPagina) VALUES ('$text', '$text2', '$categoria')";


      header("Location: Configuration.php?Numele=$text&categoria=$category");
    }
    else 
    { $text2 = $text2 * 10;
      $categoria = "Statica";
      $sql = "INSERT INTO ListaOwneri(Numele, Price, TipPagina) VALUES ('$text', '$text2', '$categoria')";
      header("Location: Configuration2.php?Numele=$text&categoria=$category");
    }
    
    mysqli_query($con, $sql);


    
?>
