<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "projectnew";  
      
    $conn = mysqli_connect("localhost", "root", "", "projectnew");  
    if($conn)
	{
			echo "connection ok";
	}
	else
	{
		"connection failed";
    }  
?>