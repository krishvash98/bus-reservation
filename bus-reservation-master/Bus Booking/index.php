<!DOCTYPE html>
<html>
	<title>Express Bus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.ico" type='image/x-icon'>
	<link href="index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src = "jqu.js" type = "text/javascript"></script>
	<script src = "index.js" type = "text/javascript"></script>
	<body>
		<div id="nav">
			<div id="log">
			<div id="overlay"></div>
				<ul>
					<li><a class="active" href="#">Bus Ticket</a></li>
					<li><a href="About/about.php">About</a></li>
					<li><a href="Destination/des.html">Destination</a></li>
					<li><a href="Offers/offer.html">Offers</a></li>
				</ul>
				<i class="material-icons">&#xE853;</i>
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
							echo "<div id='history'><a href='History/history.php'>Your Bookings</a></div><hr>";
							echo "<div id='logout'><a href='logout.php'>Logout</a></div>";
						}
					?>
				</div>
			</div>
			<br><br><br><br><br><br>
			<span>Express Bus</span>
			<p>Moving You in the Right Direction!</p>
			<div id="tab">
				<div id="one" class="activeTab">One Way</div>
				<div id="round">Round Trip</div>
			</div>
			<div class="clearfix"></div>
			<div id="book">
				<form action="Booking/book.php" method="post" onsubmit="return formValid()">
					<label>Journey Date</label>
					<input type="date" name="journey" value="<?php print(date("Y-m-d")); ?>"/>
					<label id="ret1">Return Date</label>
					<input id="ret2" type="date" name="return" value="<?php print(date("Y-m-d")); ?>"/>
					<br>
					<label>From</label>
					<select name="from" id="fromData">
						<?php
							error_reporting(0);
							$servername = "localhost";
							$username = "root";
							$password = "localhost";
							$dbname = "bus_booking";
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
							}
							$sql = "SELECT loc_name FROM location";
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
									echo "<option>". $row["loc_name"]. "</option>";
								}
							} else {
								echo "0 results";
							}
							mysqli_close($conn);
						?> 
					</select>
					<label>To</label>
					<select name="to" id="toData">
						<?php
							error_reporting(0);
							$servername = "localhost";
							$username = "root";
							$password = "localhost";
							$dbname = "bus_booking";
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
							}
							$sql = "SELECT loc_name FROM location";
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
										echo "<option>". $row["loc_name"]. "</option>";
								}
							} else {
								echo "0 results";
							}
							mysqli_close($conn);
						?> 
					</select>
					<input type="submit" value="Search">
				</form>
			</div>
		</div>
		<div id="coupon">
			<div class="offer">
				<h1>FIRST10</h1>
				<p>10% off Ticket Price</p>
				<p>Only applicable on First Booking</p>
			</div>
			<div class="offer">
				<h1>WEEK5</h1>
				<p>5% off on Ticket Price</p>
				<p>Only applicable on bookings on Weekdays</p>
			</div>
			<div class="offer">
				<h1>ROUND10</h1>
				<p>10% off on Ticket Price</p>
				<p>Only applicable on round trip bookings</p>
			</div>
		</div>
		<div id="footer"></div>
	</body>
	<script>
		function formValid(){
			if(document.getElementById('fromData').value==document.getElementById('toData').value)
			{
				alert('Source and Destination cannot be same');
				return false;
			}
		}
	</script>
</html>