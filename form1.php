<!DOCTYPE html>
<html>
<head>
<title> </title>
</head>
<body>
<form action = "" method = "POST">
name<input type = "text" name = "name"><br>
venue<input type = "text" name = "venue"><br>
date&time<input type = "date&time" name = "date&time"><br>
branch<input type = "text" name = "branch"><br>
<input type = "submit" name = "submit">
</form>
<?php
if(isset($POST['submit']))
{
	$name = $POST['name'];
	$venue = $POST['venue'];
	$date&time = $POST['date&time'];
	$branch = $POST['branch'];
	
?>
</body>
</html>
