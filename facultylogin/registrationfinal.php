<html>
<head>
<title> DISPLAY RECORDS </title>
</head>
<body>
<table border = "4" cellspacing="7">
<tr>
<th> R_NO </th>
<th> NAME_OF_EVENT </th>
<th> NAME_OF_STUDENT </th>
<th> ID </th>
<th> ROLL_NO</th>
<th> BRANCH </th>
<th> CLASS </th>
<th> DATE </th>
</tr>
<?php
include("connection.php");
error_reporting(0);
date_default_timezone_set('asia/kolkata');
$timezone = date_default_timezone_get();
$date=date('Y/m/d');
$query = "SELECT * FROM REGISTRATION)";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $result['R_NO'] . " " .  $result['NAME_OF_EVENT'] . " " . $result['NAME_OF_STUDENT'] . " " . $result['ID'] . " " . $result['ROLL_NO'] . " " . $result['BRANCH']. " " .$result['CLASS'] ;


if($total!=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['R_NO']."</td>
		<td>".$result['NAME_OF_EVENT']."</td>
		<td>".$result['NAME_OF_STUDENT']."</td>
		<td>".$result['ID']."</td>
		<td>".$result['ROLL_NO']."</td>
		<td>".$result['BRANCH']."</td> 
		<td>".$result['CLASS']."</td> 
		<td>".$result['DATE']."</td> 
		
		
		</tr>
		";
		
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