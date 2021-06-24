<!DOCTYPE html>
<html lang="en">
  
<head>
    <title> Store Data</title>
</head>
  
<body>
    <center>
        <h1>INSERT VALUES IN REGISTRATION  TABLE</h1>
  
        <form action="registrationinsert.php" method="post">
              
            <p>
                <label for="Name"> Name of Event:</label>
                <td><input type="text"  name="name" required></td>
            </p>
  
  
              
            <p>
                <label for="studentname">Name of student:</label>
                <input type="text" name="studentname" id="studentname">
            </p>
  
  
              
            <p>
                <label for="sid">Student ID:</label>
                <input type="text" name="sid" id="sid">
            </p>
			 <p>
                <label for="rno">Roll no.:</label>
                <input type="number" name="rno" id="rno">
            </p>
			<p>
                <label for="class">class:</label>
                <input type="text" name="class" id="class">
            </p>
			  
            
			
  
  
  
              
              
            
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>