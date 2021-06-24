<?php
include("connection.php");
//error_reporting(0);
$eno=$_GET['en'];
$query = "DELETE FROM EVENT WHERE E_NO = '$eno'";
$data=mysqli_query($conn,$query);
if($data)
{
echo "<font color = 'black'> record deleted from database";
}
else
{
echo "<font color = 'red'> failed to delete record from database";
}
?>
