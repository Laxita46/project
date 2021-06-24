<?php
include("connection.php");
error_reporting(0);
$en=$_GET['en'];
$nm=$_GET['nm'];
$dt=$_GET['dt'];
$vn=$_GET['vn'];
$br=$_GET['br'];
?>
<html>
	<head>
		<title></title>
<style>
table
{
color:white;
border-radius:20px;
}
#button
{
background-color:green;
color:white;
height:32px;
width:125px;
border-radius:25px;
font-size:16px;
}


  
body
{
background:linear-gradient(red,blue);
}
</style>
</head>
<body>
<br><br><br><br><br><br><br>
        <form action="" method="GET">
		<table border="0" bgcolor="black" align="center" cellspacing="20">
		
		<tr>
		<td>e_no</td>
        <td><input type="number" value="<?php echo "$en" ?>" name="eno" required></td>
        </tr>
  
		<tr>
		<td>name</td>
        <td><input type="text" value="<?php echo "$nm" ?>" name="name" required></td>
        </tr>
  
  
              
        <tr>
		<td>venue</td>
        <td><input type="text" value="<?php echo "$vn" ?>" name="venue" required></td>
        </tr>
  
  
              
        <tr>
		<td>date</td>
        <td><input type="date" value="<?php echo "$dt" ?>" name="date" required></td>
        </tr>   
		
		<tr>
		<td>branch</td>
        <td><input type="text" value="<?php echo "$br" ?>" name="branch"  required></td>
		</tr>
            
  
  
              
              
            
              
        <td colspan="2" align="center"><input type="submit" id="button" name = "submit"
        value="update deatails"></a></td>
		</form>
    </table>
</body>
  
</html>
<?php
if($_GET['submit'])
{
		$eno = $_GET['eno'];
		$name = $_GET['name'];
		$venue = $_GET['venue'];
		$date = $_GET['date'];
		$branch = $_GET['branch'];
		$query = "UPDATE EVENT SET E_NO='$eno' ,NAME_OF_EVENT='$name ' ,VENUE='$venue',DATE='$date ' ,BRANCH='$branch' WHERE E_NO = $eno";
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
	

