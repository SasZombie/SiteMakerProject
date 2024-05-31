<?php
include_once 'dataCon.php';
$numele = $_REQUEST['Numele'];
$NumePoza= $_REQUEST['NumePoza'];
$sql = "CREATE TABLE " . $numele . "( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, txt TEXT(1000))";
if(mysqli_query($con, $sql))
echo "yes";
else
echo "no";
$numele = str_replace(' ', '', $numele);
mkdir("$numele");
mkdir("$numele/uploads");


$filePath = 'uploads/' . $NumePoza;
echo $filePath;
$destinationFilePath = $numele . '/uploads' . $NumePoza;
echo $destinationFilePath;
if( !rename($filePath, $destinationFilePath) ) {  

    echo "File can't be moved!";  

}  

else {  

    echo "File has been moved!";  

} 


$numeProdus = $_REQUEST['text'];
$sql = "INSERT INTO " . $numele . "(txt) VALUES ('$numeProdus')";
mysqli_query($con, $sql);
$currentItem++;
$item--;

header("Location:Smeker2.php?Numele=$numele&NumePoza=$NumePoza");
?>
