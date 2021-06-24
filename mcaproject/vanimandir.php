<html>
<head>
<title> Vani Mandir </title>
<link rel="stylesheet" href="vanimandir.css">
</head>
<body>

<div class="container">
<div class="navbar">
			<img src="Banasthali_Vidyapeeth_Logo.png" class="logo">
			<nav>
				<ul>
				<li><a href="vanipage.html">HOME</a></li>
					<li><a href="insertvani.php">INSERT</a></li>
					<li><a href="vanirecords.php">REGISTRATION DATA</a></li>
				</ul>
			</nav>
		</div>

<table border = "4" cellspacing="7">
<caption> LIST OF EVENTS </caption>
<tr>
<th> E_NO </th>
<th> NAME_OF_EVENT </th>
<th> DATE </th>
<th> TIME </th>
<th> VENUE </th>
<th> BRANCH </th>
<th> REGISTRATION </th>
<th colspan= "2" align= "centre">OPERATIONS </th>
</tr>
<?php
include("connection.php");
error_reporting(0);
date_default_timezone_set('asia/kolkata');
$timezone = date_default_timezone_get();
$date=date('Y/m/d');
$bh='arts';
$bhs='extra curricular ';
$query = "SELECT * FROM EVENT WHERE DATE>='$date' && (BRANCH='$bh' || BRANCH='$bhs')";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
echo $result['E_NO'] . " " .  $result['NAME_OF_EVENT'] . " " . $result['DATE'] . " " . $result['TIME'] . " " . $result['VENUE'] . " " . $result['BRANCH']. " " .$result['REGISTRATION'] ;


if($total!=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['E_NO']."</td>
		<td>".$result['NAME_OF_EVENT']."</td>
		<td>".$result['DATE']."</td>
		<td>".$result['TIME']."</td>
		<td>".$result['VENUE']."</td>
		<td>".$result['BRANCH']."</td> 
		<td>".$result['REGISTRATION']."</td> 
		<td><a href ='delete.php?en=$result[E_NO]'>DELETE</td>
		<td><a href ='update.php?en=$result[E_NO]&nm=$result[NAME_OF_EVENT]&dt=$result[DATE]&tn=$result[TIME]&vn=$result[VENUE]&br=$result[BRANCH]&rg=$result[REGISTRATION]'>EDIT/UPDATE</td>
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
</div>
</body>
</html>