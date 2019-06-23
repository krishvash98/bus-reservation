<!DOCTYPE html>
<html>
	<title>Express Bus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../icon.ico" type='image/x-icon'>
	<link href="history.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = "../jqu.js" type = "text/javascript"></script>
	<script src = "history.js" type = "text/javascript"></script>
	<body>
	<div id="container">
		<div id="nav">
			<ul>
				<li><a href="../index.php">Bus Ticket</a></li>
				<li><a href="../About/about.html">About</a></li>
				<li><a href="#">Destination</a></li>
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
					echo "<div id='history'><a href='#'>Your Bookings</a></div><hr>";
					echo "<div id='logout'><a href='../logout.php'>Logout</a></div>";
				}
			?>
		</div>
		<div class="spaceG"><br></div>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "localhost";
			$dbname = "bus_booking";
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$u=$_SESSION['username'];
			$sql = "SELECT * FROM hebrontravels WHERE username='$u'" ;
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					if($row['gender']=='M')
						echo "<div class='hisBook' style='background-color:#7986CB'>";
					else
						echo "<div class='hisBook' style='background-color:#F06292'>";
					echo "<p>".$row['name']."</p>";
					echo "<p>".$row['age']."</p>";
					echo "<p>".$row['ph_no']."</p>";
					echo "<p>".$row['seat_no']."</p>";
					echo "</div>";
				}
			}
			mysqli_close($conn);
		?>
	</div>
	</body>
</html>