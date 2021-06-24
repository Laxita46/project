<?php
include("connection.php");
error_reporting(0);
$en=$_GET['en'];
$nm=$_GET['nm'];
$dt=$_GET['dt'];
$tn=$_GET['tn'];
$vn=$_GET['vn'];
$br=$_GET['br'];
$rg=$_GET['rg'];
?>

<html>
	<head>
		<title>Update Data</title>
		<link rel="stylesheet" href="insert1.css">
	</head>
<body>

<div class="container">
<div class="navbar">
			<img src="Banasthali_Vidyapeeth_Logo.png" class="logo">
			
		</div>



	<center>
		<h1> UPDATE THE EVENTS </h1>
        <form action="" method="GET">
		
		<p>
		<label for="Name"> E_NO:</label>
        <input type="number" value="<?php echo "$en" ?>" name="eno" required>
		</p>
  
		<p>
		<label for="Name"> Name:</label>
        <input type="text" value="<?php echo "$nm" ?>" name="name" required>
		</p>
        
  
  
              
        <p>
		<label for="Name"> Venue:</label>
        <input type="text" value="<?php echo "$vn" ?>" name="venue" required>
        </p>
  
  
        <p>      
        <label for="Name"> Date:</label>
        <input type="date" value="<?php echo "$dt" ?>" name="date" required>
        </p>
		
		<p>
		<label for="Name"> Time:</label>
        <input type="time" value="<?php echo "$tn" ?>" name="time" required>
        </p>
		
		<p>
		<label for="Name"> Branch:</label>
        <input type="text" value="<?php echo "$br" ?>" name="branch"  required>
		</p>
		
		<p>
		<label for="Name"> Registration:</label>
        <input type="text" value="<?php echo "$rg" ?>" name="registration"  required>
		</p>
        
		
		<input type="submit" id="button" name = "submit" value="Update">
		</form>
	</center>
</body>
</html>

<?php
if($_GET['submit'])
{
		$eno = $_GET['eno'];
		$name = $_GET['name'];
		$venue = $_GET['venue'];
		$date = $_GET['date'];
		$time = $_GET['time'];
		$branch = $_GET['branch'];
		$registration = $_GET['registration'];
		$query = "UPDATE EVENT SET E_NO='$eno' ,NAME_OF_EVENT='$name ' ,VENUE='$venue',DATE='$date ' ,TIME='$time ' ,BRANCH='$branch' ,REGISTRATION='$registration' WHERE E_NO = $eno";
		$data = mysqli_query($conn,$query);
		if($data)
		{
			echo "<script>alert('record updated')</script>";
		}
		else
		{
			echo "failed to update record";
		}
}
?>
	

