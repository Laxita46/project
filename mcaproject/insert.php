<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php 
		 error_reporting(0);
        $conn = mysqli_connect("localhost", "root", "", "projectnew");
          
        
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        
        $name =  $_REQUEST['name'];
		$date =  $_REQUEST['date'];
		$time =  $_REQUEST['time'];
        $venue = $_REQUEST['venue'];
        $branch =  $_REQUEST['branch'];
		$registration = $_REQUEST['registration'];
        
        $sql = "INSERT INTO event  VALUES (null,'$name', 
            '$date','$time','$venue','$branch','$registration')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n $date\n 
			 $time\n $venue\n
			$branch\n $registration\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>