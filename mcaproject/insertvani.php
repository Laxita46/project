<!DOCTYPE html>
<html lang="en">
  
<head>
    <title> Insert Data</title>
	<link rel="stylesheet" href="insert1.css">
</head>
  
<body>
<div class="container">
<div class="navbar">
			<img src="Banasthali_Vidyapeeth_Logo.png" class="logo">
			<nav>
				<ul>
					<li><a href="vanipage.html">HOME</a></li>
					<li><a href="vanimandir.php">EDIT/UPDATE</a></li>
					<li><a href="vanirecords.php">REGISTRATION DATA</a></li>
				</ul>
			</nav>
		</div>



    <center>
        <h1>INSERT VALUES IN EVENT TABLE</h1>
  
        <form action="insert.php" method="post">
              
            <p>
                <label for="Name"> Name:</label>
                <input type="text" name="name" id="Name">
            </p>
  
  
              
            <p>
                <label for="Venue">Venue:</label>
                <input type="text" name="venue" id="venue">
            </p>
  
  
              
            <p>
                <label for="date">Date:</label>
                <input type="date" name="date" id="date">
            </p>
			 <p>
                <label for="time">Time:</label>
                <!<input type="time" name="time" id="time">>
				<input type="time" name="time" id="time" placeholder="hrs:mins" pattern="^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$" class="inputs time" required>
            </p>
			<p>
                <label for="branch">Branch:</label>
                <select id="branch" name="branch">
  <option value="arts">arts</option>
  <option value="extra curricular">extra curricular</option>
  <option value="Business and managment">Business and managment</option>
  <option value="jounralism and mass communication">jounralism and mass communication</option>
  <option value="science and technology">science and technology</option>
  <option value="mathematics">mathematics</option>
</select>
            </p>
			<p>
                <label for="registration">Registration:</label><br>
                <input type="radio" id="Not avaliable" name="registration" value="Not avaliable">
				<label for="Not avaliable">Not avaliable</label><br>
				<input type="radio" id="free" name="registration" value="free">
				<label for="free">Free</label><br>
				<input type="radio" id="paid" name="registration" value="paid">
				<label for="paid">Paid</label>
            </p>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>