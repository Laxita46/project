<!DOCTYPE html>
<html lang="en">
  
<head>
    <title> Store Data</title>
</head>
  
<body>
    <center>
        <h1>Storing Form data in Database</h1>
  
        <form action="insert.php" method="post">
              
            <p>
                <label for="Name"> Name:</label>
                <input type="text" name="name" id="Name">
            </p>
  
  
              
            <p>
                <label for="Venue">venue:</label>
                <input type="text" name="venue" id="venue">
            </p>
  
  
              
            <p>
                <label for="date">date:</label>
                <input type="date" name="date" id="date">
            </p>
			<p>
                <label for="branch">branch:</label>
                <input type="text" name="branch" id="branch">
            </p>
  
  
              
              
            
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>