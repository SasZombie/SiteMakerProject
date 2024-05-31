<html>
        <head>
            <title>Make a webpage</title>
        </head>
    <body>
        <?php
          $Numele  = rawurldecode($_GET['Numele']);
          $NumePoza = $_REQUEST['NumePoza'];

          $myfile = fopen("$Numele/style.css", "w");

          $txt = " h1 {
            text-align: center;
        }
        
        label{
            font-size: 30px;
        }
        
        textarea{
            width: 36%;
            height: 30px;
            padding: 6px 20px;
            box-sizing: border-box;
            border: 2px solid purple;
            border-radius: 4px;
            background-color: purple;
            font-size: 16px;
            color: var(--clr-neon);
            resize: none;
        }
        .textarea2 {
            width: 200%;
            height: 200px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid purple;
            border-radius: 4px;
            color: var(--clr-neon);
            background-color: purple;
            font-size: 16px;
            resize: none;
        }
        select{
        
            width: 36%;
            height: 30px;
            box-sizing: border-box;
            border: 2px solid purple;
            border-radius: 4px;
            background-color: purple;
            font-size: 16px;
            color: var(--clr-neon);
            resize: none;
        
        }
        form label{
            text-align: center;
        }
        
        html, body {
            margin: 0;
            padding: 0;
          }
          .background {
            position:  absolute;
            display:  block;
            top: 0;
            left: 0;
            z-index: 0;
            
        } 
        
        :root {
            --clr-neon: hsl(317 100% 54%);
            --clr-bg: hsl(323 21% 16%);
          }
          
          *,
          *::before,
          *::after {
            box-sizing: border-box;
          }
          
          body {
            min-height: 70vh;
           
            place-items: center;
            background: var(--clr-bg);
            font-family: \"Balsamiq Sans\", cursive;
            color: var(--clr-neon);
            padding-right: 10rem;
          }
          
          .neon-button {
            font-size: 1rem;
            
            display: inline-block;
            cursor: pointer;
            text-decoration: none;
            color: var(--clr-neon);
            border: var(--clr-neon) 0.125em solid;
            padding: 0.25em 1em;
            border-radius: 0.25em;
          
            text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em currentColor;
          
            box-shadow: inset 0 0 0.5em 0 var(--clr-neon), 0 0 0.5em 0 var(--clr-neon);
          
            position: relative;
          }
          
          .neon-button::before {
            pointer-events: none;
            content: \"\";
            position: absolute;
            background: var(--clr-neon);
            top: 120%;
            left: 0;
            width: 100%;
            height: 100%;
          
            transform: perspective(1em) rotateX(40deg) scale(1, 0.35);
            filter: blur(1em);
            opacity: 0.7;
          }
          
          .neon-button::after {
            content: \"\";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            box-shadow: 0 0 2em 0.5em var(--clr-neon);
            opacity: 0;
            background-color: var(--clr-neon);
            z-index: -1;
            transition: opacity 100ms linear;
          }
          
          .neon-button:hover,
          .neon-button:focus {
            color: var(--clr-bg);
            text-shadow: none;
          }
          
          .neon-button:hover::before,
          .neon-button:focus::before {
            opacity: 1;
          }
          .neon-button:hover::after,
          .neon-button:focus::after {
            opacity: 1;
          }";

          fwrite($myfile, $txt);
          $myfile = fopen("$Numele/delete.php", "w");

          $txt = "
          
          <?php
          
          require_once 'dataCon.php';

          \$id = \$_REQUEST['id'];

          \$sql = \"DELETE FROM Basket WHERE Numele = '\" . \$id . \"' LIMIT 1\" ;
          mysqli_query(\$con, \$sql);

           header(\"Location:Cosul.php\");


          ?>";

            fwrite($myfile, $txt);

          $myfile = fopen("$Numele/Cosul.php", "w");
        $txt = 
        "
        <html>
        <head>
            <title>Cosul Cumparaturi</title>
            <link rel=\"stylesheet\" href=\"style.css\"> 
        </head>
        <body>
            <p>Cosul Dumneavoasta este: </p>
            <?php
                include_once 'dataCon.php';
                \$sql=\"SELECT * FROM Basket\";
                \$suma = 0;
                \$result=mysqli_query(\$con,\$sql);
                
                while(\$row=mysqli_fetch_array(\$result))
                {
                 
                  echo \$row['Numele'];
                  echo \" \";
                  echo \$row['Pret'];
                  \$suma = \$suma + \$row['Pret'];
                  echo \" \";
                  echo \"<a href='delete.php?id=\" . \$row['Numele'] . \"'><button>Sterge</button></a><strong>\";
                  echo \"<br>\";
                }
    
                echo \"Totalul Dumneavoastra este: \";
                echo \$suma;
                ?>
        </body>
    </html>";
    
fwrite($myfile, $txt);




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

        $myfile = fopen("$Numele/buy.php", "w");

        $txt = "<?php 
        function Cumparand()
        {
            include_once 'dataCon.php';
    
            
           
            \$Numele = \$_REQUEST['id'];
            \$price = \$_REQUEST['price'];
            \$sql=\"INSERT INTO Basket(Numele, Pret) VALUES('\$Numele', '\$price')\";
    
            \$result = mysqli_query(\$con,\$sql);
            if(\$result)  
                return 0;
            return 1;
        }
    
        
    ?>
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
        <style>
            button{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
          }
          
        </style>
    </head>
    <body style= \"background-color: #99e6ff\">
    
    <?php
        \$poza = \$_REQUEST['img'];
        echo \"<img src='\$poza' style='width:500px;height:600px;'>\";
    ?>
        <p id = \"buy\">Cumpara</p>
    <button onclick = 'buy()'>Buy</button>
    
    <script>
      
                    function buy()
                    {
                        const ok= <?php echo Cumparand(); ?>;
                        document.getElementById(\"buy\").innerHTML = \"Cumparat\";
                    }
    
                </script>
                
        
    </body>
    </html> ";
        
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
          button{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
          }
          </style>

          
          </head> 
                
          <body  style=\"background-image: url('uploads";
          fwrite($myfile,$txt);
          $txt = $NumePoza;
          fwrite($myfile, $txt);
          $txt = "'); \" > 
          <h1> Magazinul Online este Deschis </h1>

          <a href=\"Cosul.php\" ><strong  style=\"color: black; font-size: 20; strong\"> Cos de Cumparaturi</strong> </a> <br>

          <?php   
          include_once 'dataCon.php';
          \$sql=\"SELECT * FROM " . $Numele . "\";

          \$result=mysqli_query(\$con,\$sql);
          while(\$row=mysqli_fetch_array(\$result))
          {
            echo \$row['numeProdus'];
            \$img = \$row['imgPath'];
            echo \"<br>\";
            echo \"<img src='\$img' style='width:500px;height:600px;'>\";
            echo \"<br>\";   
          
            echo \"<a href='buy.php?id=\" . \$row['numeProdus'] . \"&price=\" . \$row['price'] .\"&img=\" . \$img .\"'><button class = 'neon-button'>View More</button></a><strong>\";
            echo \"<br>\";

          }
          ?>





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