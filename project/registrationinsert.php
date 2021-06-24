<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "projectnew");
          
        
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        
        $eventname =  $_REQUEST['name'];
		$studentname =  $_REQUEST['studentname'];
		$studentid =  $_REQUEST['sid'];
        $rollno = $_REQUEST['rno'];
        $class =  $_REQUEST['class'];
		
        
        $sql = "INSERT INTO registration  VALUES (null,'$eventname', 
            '$studentname','$studentid','$rollno','$class')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>REGISTRATION SUCCESSFULL</h3>"; 
  
            echo nl2br("\n$eventname\n $studentname\n 
			 $studentid \n $rollno \n $class \n  ");
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