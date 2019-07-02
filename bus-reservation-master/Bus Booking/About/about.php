<!DOCTYPE html>
<html>
	<title>Express Bus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../icon.ico" type='image/x-icon'>
	<link href="about.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = "../jqu.js" type = "text/javascript"></script>
	<script src = "about.js" type = "text/javascript"></script>
	<body>
		<div id="nav">
			<ul>
				<li><a href="../index.php">Bus Ticket</a></li>
				<li><a class="active" href="#">About</a></li>
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
		<div id="info">
			<p>Bus Reservation Management System is the template which contains relevant information regarding a Bus Ticket booking. This template provides details about travel information such as Bus Name, Date of Journey, Boarding details, Bus Type and Passenger Details in which one can add one or more passengers or remove the passenger.</p>
			<p>It will help the user who wants to book bus tickets from one place to another. The page has simple user interface that is easily accessible by the users.</p>
		</div>
		<div id="team">
			<div class="profile">
				<img src="img/ayush.jpeg" style="width:70%;border-radius:50%;">
				<p>Ayush Semwal</p>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-twitter"></a>
			</div>
			<div class="profile">
				<img src="img/nihal.jpg" style="width:70%;border-radius:50%;">
				<p>Nihal Prakash</p>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-twitter"></a>
			</div>
			<div class="profile">
				<img src="pro.jpg" style="width:70%;border-radius:50%;">
				<p>Krish Vashishth</p>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-twitter"></a>
			</div>
			<div class="profile">
				<img src="pro.jpg" style="width:70%;border-radius:50%;">
				<p>Meetali Nanda</p>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-twitter"></a>
			</div>
			<div class="profile">
				<img src="pro.jpg" style="width:70%;border-radius:50%;">
				<p>Shubhi Shubhangi</p>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-twitter"></a>
			</div>
		</div>
	</body>
</html>
