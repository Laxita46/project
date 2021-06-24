<?php      
 

 
// Include config file

include "config.php";

if(isset($_POST['button1'])) {
	//Login button was pressed
	$username = $_POST['text'];
	$password = $_POST['password'];

	$result = $account->login($username, $password);

	if($result == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}

}
if(!isset($_SESSION['username'])){
    header('Location: blah.php');
}
   
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
</head>
<body>
	<div class="container">
	<img src="image/login.png"/>
		<form>
			<div class="form-input">
				<input type="text" name="text" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input  type="submit" value="LOGIN" class="btn-login name" = "button1"/>
		</form>
	</div>
</body>