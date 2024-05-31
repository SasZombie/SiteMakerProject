<?php include_once "datCon.php"; ?>
<!DOCTYPE html>
<html>
<head> 
	<title> Configuration</title>
       <link rel="stylesheet" href="style.css">
</head>

<body>
     	
     
     <form action="upload.php?Numele=
     <?php    $numele = rawurldecode($_GET['Numele']);
              $categoria = $_REQUEST['categoria'];
              echo $numele;
              echo "&";
              echo $categoria;
       ?>"
           method="post"
           enctype="multipart/form-data">
       

           <input  type="file" 
                  name="my_image">
                  

           <br>
          <label for="text">Numar De Produse: </label>
          <textarea name="text" id="text"></textarea>


           <button class = "neon-button" type="submit" 
                  name="submit">Upload </button>
			<br>          
     	
     
</body>
</html>
