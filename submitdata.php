<?php
    include_once "datacon.php";
$fname = $_REQUEST['fname'];
$cpucd = $_REQUEST['cpucd'];
$gpucd = $_REQUEST['gpucd'];
$mbcd = $_REQUEST['mbcd'];
$ramcd = $_REQUEST['ramcd'];
$psucd = $_REQUEST['psucd'];

$sql = "INSERT INTO wishlistbolz(Numelee,cpu,gpu,mb,ram,psu) VALUES('$fname','$cpucd','$gpucd','$mbcd','$ramcd','$psucd')";
mysqli_query($con, $sql);
echo "adaugat la wishlist";

?>
<html>
    <p style="color: white">caca</p>
</html>