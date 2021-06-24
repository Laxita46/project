<html>
<head>
<title>Upcoming Event List</title>
<link rel="stylesheet" href="event.css">
<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
<style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
</head>
<body>

<div class="container">
<div class="navbar">
			<img src="Banasthali_Vidyapeeth_Logo.png" class="logo">
			<nav>
				<ul>
					<li><a href="homepage.html">HOME</a></li>
					<li><a href="todayevent.php">TODAY'S EVENT</a></li>
					<li><a href="upcomingevent.php">UPCOMING EVENT</a></li>
					<li><a href="gallery.html">GALLERY</a></li>
					<li><a href="contactus.html">CONTACT US</a></li>
				</ul>
			</nav>
		</div>

<form action="upcomingevent.php" method="post">
 <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
 <input type="submit" name="search" value="Search"><br><br>
</form>
<table border = "4">
<caption>Upcoming Events List</caption>
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
		$dob=$result['DATE'];
		$r=explode('-',$dob);
		$date=$r[2];
		$month=$r[1];
		$year=$r[0];
		$new=$date.'-'.$month.'-'.$year;
		
		echo "
		<tr>
		<td>".$result['E_NO']."</td>
		<td>".$result['NAME_OF_EVENT']."</td>
		<td>".$new."</td>
		<td>".$result['TIME']."</td>
		<td>".$result['VENUE']."</td>
		<td>".$result['BRANCH']."</td> ";
		 if($pu == 'Not avaliable')
		{
			echo "<td>".$result['REGISTRATION']."</td> ";
		}
		elseif($pu == 'free')
		{
			echo " <td><a href ='regis.html?en=$result[E_NO]&nm=$result[NAME_OF_EVENT]'>Register for Free</td> ";
		}
		else
		{
			echo " <td><a href ='regis.html?en=$result[E_NO]&nm=$result[NAME_OF_EVENT]'>Paid Registration</td> ";
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
		$dob=$result['DATE'];
		$r=explode('-',$dob);
		$date=$r[2];
		$month=$r[1];
		$year=$r[0];
		$new=$date.'-'.$month.'-'.$year;
		
		echo "
		<tr>
		<td>".$result['E_NO']."</td>
		<td>".$result['NAME_OF_EVENT']."</td>
		<td>".$new."</td>
		<td>".$result['TIME']."</td>
		<td>".$result['VENUE']."</td>
		<td>".$result['BRANCH']."</td> ";
		 if($pu == 'Not avaliable')
		{
			echo "<td>".$result['REGISTRATION']."</td> ";
		}
		elseif($pu == 'free')
		{
			echo " <td><a href ='regis.html?en=$result[E_NO]&nm=$result[NAME_OF_EVENT]'>Register for Free</td> ";
		}
		else
		{
			echo " <td><a href ='regis.html?en=$result[E_NO]&nm=$result[NAME_OF_EVENT]'>Paid Registration</td> ";
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
</div>
</body>
</html>