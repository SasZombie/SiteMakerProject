<?php
include_once 'dataCon.php';

$item = $_REQUEST['cat2'];

$numele = $_REQUEST['cat'];

$NumePoza= $_REQUEST['cats'];



$numele = str_replace(' ', '', $numele);
$sql = "CREATE TABLE " . $numele . "( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, price INT, numeProdus VARCHAR(50), imgPath VARCHAR(50))";

if(mysqli_query($con, $sql))
	echo "yes";
else
	echo "no";

echo "sas";
mkdir("$numele");
mkdir("$numele/uploads");



$filePath = 'uploads/' . $NumePoza;
echo $filePath;
$destinationFilePath = $numele . '/uploads' . $NumePoza;
echo $destinationFilePath;
if(!rename($filePath, $destinationFilePath) ) {  

    echo "File can't be moved!";  

}  

else {  

    echo "File has been moved!";  

} 

$currentItem = 0;
while($item > 0)
{
if(isset($_POST['submit']))
{
$img = 'Poza'.$currentItem;
$img_type = $_FILES[$img]['type'];
$img_name = $_FILES['Poza0']['name'];
$img_size = $_FILES[$img]['size'];
$tmp_name = $_FILES[$img]['tmp_name'];
$error = $_FILES[$img ]['error'];

$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			
			$allowed_exs = array("jpg", "jpeg", "png"); 
	
			if (in_array($img_ex_lc, $allowed_exs)){
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_path = 'uploads/' . $new_img_name;
				$img_upload_path = $numele . '/' . 'uploads/' .$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
            }

}
$numeProdus = $_REQUEST[$currentItem];
$PretProdus = $_REQUEST['Pret' . $currentItem];
$sql = "INSERT INTO " . $numele . "(price, numeProdus, imgPath) VALUES ('$PretProdus', '$numeProdus', '$img_path')";
mysqli_query($con, $sql);
$currentItem++;
$item--;
}


header("Location:Smeker.php?Numele=$numele&NumePoza=$NumePoza");
?>
