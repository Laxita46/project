<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<title>Admin Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="adminpage.css">
</head>
<body>
  <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary" name="submit">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
</body>
</html>


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
		header("location:vanipage.html");
		}
		elseif($username == "apajiinstitute")
		{
		header("location:apaji.html");
		}
		elseif($username == "wisdom")
		{
		header("location:wisdom.html");
		}
		else
		{
		header("location:vigyan.html");
		}
		
	}
	else
	{
		echo"<font color='red'>Invalid username or password</font>";
	}
}
?>

