<html>
    <head> 
        <title> Pagini </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php 
        $nume = $_REQUEST['text'];
        include_once 'dataCon.php';
                

        $sql = "SELECT * FROM ListaOwneri";
        $result = mysqli_query($con, $sql);
        while($row=mysqli_fetch_array($result))
        {   
            if($row['Numele'] == $nume)
            {
                echo "Untilizatorul: " . $nume . " are de platit: " . $row['Price'];
            }
            
        }
        echo " lei";
        
        echo "<a href='" . $nume . "'><button class = 'neon-button'>Afiseaza Pagina</button></a><strong>";

    ?>
           


    </body>
</html>