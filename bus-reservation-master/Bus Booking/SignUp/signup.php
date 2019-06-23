<!DOCTYPE html>
<html>
	<title>Express Bus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../icon.ico" type='image/x-icon'>
	<link href="signup.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = "../jqu.js" type = "text/javascript"></script>
	<script src = "signup.js" type = "text/javascript"></script>
	<body>
	<div id="container">
		<div id="nav">
			<ul>
				<li><a href="../index.php">Bus Ticket</a></li>
				<li><a href="../About/about.html">About</a></li>
				<li><a href="../Destination/des.html">Destination</a></li>
				<li><a href="../Offers/offer.html">Offers</a></li>
			</ul>
			<i class="material-icons">&#xE853;</i>
			<div id="head">Express Bus</div>
		</div>
		<div id="overlay"></div>
		<div id='open'>
			<?php
				session_start();
				if(!isset($_SESSION['access'])){
					echo "<form action='login.php' method='post'>";
					echo "<input type='text' placeholder='Username' name='username' required>";
					echo "<input type='password' placeholder='Password' name='password' required>";
					echo "<input type='submit' value='LogIn'></form>";
					echo "<a href='#'>Forgot Password?</a><br>";
					echo "<a href='SignUp/signup.php'>New User?</a>";
				}
				else{
					$u=$_SESSION['name'];
					echo "<div id='wel'><strong>Welcome<br></strong>";
					echo $u;
					echo "</div><hr>";
					echo "<div id='history'><a href='../History/history.php'>Your Bookings</a></div><hr>";
					echo "<div id='logout'><a href='../logout.php'>Logout</a></div>";
				}
			?>
		</div>
		<div class="spaceG"><br></div>
		<div id="signup">
			<form action="user_entry.php" method="post">
				<div class="group">      
					<input type="text" name="fname" required>
					<span class="bar"></span>
					<label>First Name</label>
				</div>
				<div class="group">      
					<input type="text" name="lname" required>
					<span class="bar"></span>
					<label>Last Name</label>
				</div>
				<div class="group">      
					<input type="text" name="ph_no" maxlength='10' required>
					<span class="bar"></span>
					<label>Phone Number</label>
				</div>
				<div class="group">      
					<input type="number" name="age" min=18 required>
					<span class="bar"></span>
					<label>Age</label>
				</div>
				<div class="group">      
					<input type="email" name="email" required>
					<span class="bar"></span>
					<label>Email ID</label>
				</div>
				<div class="group">      
					<input type="text" name="username" required>
					<span class="bar"></span>
					<label>Userame</label>
				</div>
				<div class="group">      
					<input type="password" name="password" required>
					<span class="bar"></span>
					<label>Password</label>
				</div>
				<div class="group">      
					<input type="password" name="rpass" required>
					<span class="bar"></span>
					<label>Confirm Password</label>
				</div>
				<div class="group">
					<input type="submit" value="SUBMIT">
				</div>
			</form>
		</div>
		<div id="wrongPass">Passwords do not match</div>
		<div id="wrongUser">Username not available</div>
		<div id="rightUser">Username available</div>
	</div>
	</body>
</html>