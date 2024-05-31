<html>
        <head>
            <title>Make a webpage</title>
        </head>
    <body>
        <?php
          $Numele  = rawurldecode($_GET['Numele']);
          
          $NumePoza = $_REQUEST['NumePoza'];

          $myfile = fopen("$Numele/dataCon.php", "w");

          $txt = "
          
            
          <?php
          \$dbServername = \"localhost\";
          \$dbUsername = \"root\";
          \$dbPassword = \"1\";
          \$dbName = \"dataBaze\";

\$con = mysqli_connect(\$dbServername, \$dbUsername, \$dbPassword, \$dbName);
if(!\$con)
{
  echo \"connection failed\";
  exit();
}
?>";

            fwrite($myfile, $txt);


   
          $myfile = fopen("$Numele/index.php", "w");

          $txt = " <html>
                       <head>
                  <title>";
          fwrite($myfile,$txt);
          fwrite($myfile,$Numele);
          $txt = "</title>
          
          <style>
          h1 {text-align: center;}
          </style>

          
          </head> 
                
          <body  style=\"background-image: url('uploads";
          fwrite($myfile,$txt);
        
      
      
          $txt = $NumePoza;
          fwrite($myfile, $txt);




          $txt = "'); \" >
          
          
          <p style= \"text-align: center\">";
      fwrite($myfile, $txt);
      
        include_once 'dataCon.php';
        $sqli="SELECT * FROM " . $Numele;
      $result = mysqli_query($con, $sqli);
        
        while($row=mysqli_fetch_array($result))
        {
      
            $txt = $row['txt'];
            
        }



      

        fwrite($myfile, $txt);
        $txt = "
            </p>
        </body>
    </html>";
      fwrite($myfile, $txt);

        $copos = $Numele;
        $bra = "";
        $space = $copos .  "/index.php";
        urlencode($space);
      header("Location:$space");

        ?>
    </body>
</html>