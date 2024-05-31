<?php 
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "datCon.php";

	$Numele = $_REQUEST['Numele'];
	$img_type = $_FILES['my_image']['type'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$numar = $_REQUEST['text'];

	if ($error === 0) {
		if ($img_size > 1250000) {
			echo "Scuze, Imaginea e prea mare";
		    
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			
			$allowed_exs = array("jpg", "jpeg", "png"); 
	
			if (in_array($img_ex_lc, $allowed_exs)){
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				header("Location:Makeit.php?Numele=$Numele&NumePoza=$new_img_name&numarPag=$numar");
				
			}else {
				echo "Aceest tip este invalid";
		        
			}
		}
	}else {
		echo "Erroare necunoscuta!";

	}

}
?>


