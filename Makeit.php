<html>
    <head> 
        <title> Make It </title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php 
	include "datCon.php";

	$Numele = $_REQUEST['Numele'];
	$numePoza = $_REQUEST['NumePoza'];
    $numarProduse = $_REQUEST['numarPag'];
    $item = 0;
?>

<form action="FinalStep.php?"  method="post"
        enctype="multipart/form-data">
<?php 
    while($numarProduse>0)
        {
        echo "<label for=\"text\">Nume Produs </label>
        <textarea name=" . $item . " id=" . $item . "></textarea>";
        echo "<br>";
        
        echo "<input type= \"file\" name = Poza" . $item . " >";

        echo "<br>";
        echo "<label for=\"text\">Pret Produs </label>
        <textarea name = Pret" . $item . " id = Pret" . $item . "></textarea>";
        echo "<br>";
        $item++;
        $numarProduse--;
        }
    

        echo "<label for=\"cat\">Nume</label>
                <select name=\"cat\" id=\"cat\">
                    <option value=\"$Numele\">$Numele</option>
                </select>";
                
        echo "<br>";
        echo "<label for=\"cat\">Poza Fundal</label>
                <select name=\"cats\" id=\"cats\">
                    <option value=\"$numePoza\">$numePoza</option>
                </select>";
        echo "<br>";
         echo "<label for=\"cat\">Numar Produse</label>
             <select name=\"cat2\" id=\"cat2\">
                    <option value=\"$item\">$item</option>
                </select>";
?>
  <button class = "neon-button" type="submit" name="submit">Go </button>
</body>
</html>