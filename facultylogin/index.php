<!DOCTYPE html>
<html lang="en">
  
<head>
    <title> Store Data</title>
</head>
  
<body>
    <center>
        <h1>INSERT VALUES IN EVENT TABLE</h1>
  
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
                <label for="time">time:</label>
                <input type="time" name="time" id="time">
            </p>
			<p>
                <label for="branch">branch:</label>
                <input type="text" name="branch" id="branch">
            </p>
			<p>
                <label for="registration">registration:</label><br>
                <input type="radio" id="NA" name="registration" value="NA">
				<label for="NA">NA</label><br>
				<input type="radio" id="free" name="registration" value="free">
				<label for="free">Free</label><br>
				<input type="radio" id="paid" name="registration" value="paid">
				<label for="paid">paid</label>
            </p>
  
  
  
              
              
            
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>