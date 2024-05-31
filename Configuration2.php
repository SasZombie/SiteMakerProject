<?php include_once "datCon.php"; ?>
<!DOCTYPE html>
<html>
<head> 
	<title> Configuration</title>
       <link rel="stylesheet" href="style.css">

</head>

<body >
     	
     
     <form action="upload2.php?Numele=
     <?php    $numele = rawurldecode($_GET['Numele']);
              $categoria = $_REQUEST['categoria'];
              echo $numele;
              echo "&";
              echo $categoria;
       ?>"
           method="post"
           enctype="multipart/form-data">


           <input type="file" 
                  name="my_image">

           <br>
          <label for="text">Intro Textul </label>
          <br>
          <textarea class = "textarea2" name="text" id="text"></textarea>

          <br>

           <button class = "neon-button" type="submit" 
                  name="submit">Upload </button>
			<br>
			
			
		
           
     	
     
</body>
</html>
