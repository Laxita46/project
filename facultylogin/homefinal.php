<?php
include("connection.php");
?>
<form action="" method="POST">
Username<input type="text" name="username"><br><br>
Password <input type="password" name="password"><br><br>
<input type="submit" name="submit" value="login"><br><br>
</form>
<?php
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$pwd = $_POST['password'];
	$query = "SELECT * FROM LOGIN WHERE username = '$username' && password = '$pwd' ";
	$data= mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);
	if($total == 1)
	{
		echo "Successfully logged in";
		if($username == "vanimandir")
		{
		
		header("location:indexvani.php");
		}
		elseif($username == "apajiinstitute")
		{
		
		header("location:indexapaji.php");
		}
		elseif($username == "wisdom")
		{
		
		header("location:indexwisdom.php");
		}
		else($username == "vigyanmandir")
		{
		
		header("location:indexvigyan.php");
		}
		
	}
	else
	{
		echo"<font color='red'>Invalid username or password</font>";
	}
}
?>

