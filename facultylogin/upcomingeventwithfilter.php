<html>
<head>
<style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
</head>
<body>
<form action="upcomingeventwithfilter.php" method="post">
 <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
 <input type="submit" name="search" value="Filter"><br><br>
<table border = "4">
<tr>
<th> E_NO </th>
<th> NAME_OF_EVENT </th>
<th> DATE </th>
<th> TIME </th>
<th> VENUE </th>
<th> BRANCH </th>
<th> REGISTRATION </th>
</tr>
<?php
include("connection.php");
error_reporting(0);
date_default_timezone_set('asia/kolkata');
$timezone = date_default_timezone_get();
$date=date('Y/m/d');
if(isset($_POST['search']))
{
$valueToSearch = $_POST['valueToSearch'];
$query = "SELECT * FROM `event` WHERE DATE>'$date' && CONCAT(`E_NO`, `NAME_OF_EVENT`,`VENUE`,`BRANCH`) LIKE '%".$valueToSearch."%'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if($total!=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		$pu=$result['REGISTRATION'];
		//echo $pu;
		echo "
		<tr>
		<td>".$result['E_NO']."</td>
		<td>".$result['NAME_OF_EVENT']."</td>
		<td>".$result['DATE']."</td>
		<td>".$result['TIME']."</td>
		<td>".$result['VENUE']."</td>
		<td>".$result['BRANCH']."</td> ";
		 if($pu == 'NA')
		{
			echo "<td>".$result['REGISTRATION']."</td> ";
		}
		elseif($pu == 'free')
		{
			echo " <td><a href ='registration.php?en=$result[E_NO]&nm=$result[NAME_OF_EVENT]'>free</td> ";
		}
		else
		{
			echo " <td><a href ='registration.php?en=$result[E_NO]&nm=$result[NAME_OF_EVENT]'>paid</td> ";
		}
		
		
		
}
}
else
{
	echo "no records found\n\n";
	
}
}
else
{
	$query = "SELECT * FROM EVENT WHERE DATE>'$date'";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);



if($total!=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		$pu=$result['REGISTRATION'];
		//echo $pu;
		echo "
		<tr>
		<td>".$result['E_NO']."</td>
		<td>".$result['NAME_OF_EVENT']."</td>
		<td>".$result['DATE']."</td>
		<td>".$result['TIME']."</td>
		<td>".$result['VENUE']."</td>
		<td>".$result['BRANCH']."</td> ";
		 if($pu == 'NA')
		{
			echo "<td>".$result['REGISTRATION']."</td> ";
		}
		elseif($pu == 'free')
		{
			echo " <td><a href ='registration.php?en=$result[E_NO]&nm=$result[NAME_OF_EVENT]'>free</td> ";
		}
		else
		{
			echo " <td><a href ='registration.php?en=$result[E_NO]&nm=$result[NAME_OF_EVENT]'>paid</td> ";
		}
		
		
		
}
}
else
{
	echo "no records found";
}
}
?>

</table>
</form>
</body>
</html>