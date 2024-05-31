<html>
    <head>
        <title>Cosul Cumparaturi</title>
    </head>
    <body style= "background-color: cyan;">
        <p>Cosul Dumneavoasta este: </p>
        <?php
            include_once 'dataCon.php';
            echo "sas";
            $sql="SELECT * FROM `Basket`";
            echo "sas";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result))
            {
              echo $row['numeProdus'];
              
  
            }
            ?>
    </body>
</html>
