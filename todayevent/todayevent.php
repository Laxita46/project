<html>
<head>
<title> DISPLAY RECORDS </title>
</head>
<body>
<table border = "4">
<tr>
<th> E_NO </th>
<th> NAME_OF_EVENT </th>
<th> DATE </th>
<th> VENUE </th>
<th> BRANCH </th>
</tr>
<?php
include("connection.php");
error_reporting(0);
//$currentdate=date('d');
//echo $currentdate;
date_default_timezone_set('asia/kolkata');
$timezone = date_default_timezone_get();
$date=date('Y/m/d');


$query = "SELECT * FROM EVENT WHERE DATE='$date'";

$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
echo $result['E_NO'] . " " .  $result['NAME_OF_EVENT'] . " " . $result['DATE'] . " " . $result['VENUE'] . " " . $result['BRANCH'];


if($total!=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['E_NO']."</td>
		<td>".$result['NAME_OF_EVENT']."</td>
		<td>".$result['DATE']."</td>
		<td>".$result['VENUE']."</td>
		<td>".$result['BRANCH']."</td> ";
		
}
}
else
{
	echo "no records found";
}
?>
</table>
</body>
</html>