<!DOCTYPE html>
<html>
	<title>Express Bus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../icon.ico" type='image/x-icon'>
	<link href="receipt.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = "../jqu.js" type = "text/javascript"></script>
	<script src = "receipt.js" type = "text/javascript"></script>
	<body>
		<div id="nav">
			<ul>
				<li><a href="../index.php">Bus Ticket</a></li>
				<li><a href="../About/about.php">About</a></li>
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
		<div id="rec">
			<h3>RECEIPT</h3>
			<table>
				<tr>
					<td><strong>Company</strong></td>
					<td><?php echo $_SESSION['bus_comp'];?></td>
				</tr>
				<tr>
					<td><strong>Source</strong></td>
					<td><?php echo $_SESSION['from'];?></td>
				</tr>
				<tr>
					<td><strong>Destination</strong></td>
					<td><?php echo $_SESSION['to'];?></td>
				</tr>
				<tr>
					<td><strong>Departure Time</strong></td>
					<td><?php echo $_SESSION['dep_time'];?></td>
				</tr>
				<tr>
					<td><strong>Arrival Time</strong></td>
					<td><?php echo $_SESSION['arr_time'];?></td>
				</tr>
				<tr>
					<td><strong>Seats</strong></td>
					<td><?php echo $_SESSION['noSeat'];?></td>
				</tr>
				<tr>
					<td style="border:none;"><strong>Amount Paid</strong></td>
					<td style="border:none;"><i class="fa fa-inr" style="font-size:0.8em;"></i> <?php echo $_SESSION['amt'];?></td>
				</tr>
			</table>
		</div>
	</body>
</html>