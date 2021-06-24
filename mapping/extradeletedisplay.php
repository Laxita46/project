<html>
<head>
<title> DISPLAY RECORDS </title>
</head>
<body>
<table border = "4">
<tr>
<th> E_NO </th>
<th> NAME_OF_EVENT </th>
<th> DATETIME </th>
<th> VENUE </th>
<th> BRANCH </th>
<th> OPERATIONS </th>
</tr>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * from event";
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
		<td>".$result['BRANCH']."</td> 
		<td><a href ='delete.php?en=$result[E_NO]'>DELETE</td>
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