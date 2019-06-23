<!DOCTYPE html>
<html>
	<title>Express Bus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../../icon.ico" type='image/x-icon'>
	<link href="details.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = "../../jqu.js" type = "text/javascript"></script>
	<script src = "details.js" type = "text/javascript"></script>
	<body>
	<div id="container">
		<div id="nav">
			<ul>
				<li><a href="../../index.php">Bus Ticket</a></li>
				<li><a href="../../About/about.html">About</a></li>
				<li><a href="../../Destination/des.html">Destination</a></li>
				<li><a href="../../Offers/offer.html">Offers</a></li>
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
					echo "<a href='SignUp/signup.html'>New User?</a>";
				}
				else{
					$u=$_SESSION['name'];
					echo "<div id='wel'><strong>Welcome<br></strong>";
					echo $u;
					echo "</div><hr>";
					echo "<div id='history'><a href='../../History/history.php'>Your Bookings</a></div><hr>";
					echo "<div id='logout'><a href='../../logout.php'>Logout</a></div>";
				}
			?>
		</div>
		<div class="spaceG"><br></div>
		<div id="busName">
			<h1><?php echo $_SESSION['bus_comp']; ?></h1>
		</div>
		<?php
			if(isset($_POST['seat_list']))
			{
				$_SESSION['noSeat']=count($_POST['seat_list']);
				if(!empty($_POST['seat_list']))
				{
					foreach($_POST['seat_list'] as $selected){
						echo "<div class='seat_info'>";
						echo "<form action='db_entry.php' method='post'>";
						echo "<h5><strong>Seat:</strong> $selected</h5>";
						echo "<input type='hidden' value=".$selected." name='seat_no'>";
						echo "<i class='fa fa-user'></i>";
						echo "<input type='text' name='name' placeholder='Name'><br>";
						echo "<i class='fa fa-birthday-cake'></i>";
						echo "<input type='number' name='age' placeholder='Age' min='3'><br>";
						echo "<i class='fa fa-phone'></i>";
						echo "<input type='text' maxlength='10' name='ph_no' placeholder='Phone No.'><br>";
						echo "<label><input type='radio' name='gender' value='M'>Male</label>";
						echo "<label><input type='radio' name='gender' value='F'>Female</label><br>";
						echo "</form></div>";
					}
				}
			}
		?>
		<div class='clearfix'></div>
		<button class='sub'>BOOK</div>
	</div>
	</body>
</html>