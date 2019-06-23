<!DOCTYPE html>
<html>
	<title>Express Bus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../icon.ico" type='image/x-icon'>
	<link href="select.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = "../jqu.js" type = "text/javascript"></script>
	<script src = "select.js" type = "text/javascript"></script>
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
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "localhost";
			$dbname = "bus_booking";
			$j=$_POST['index'];
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "SELECT * FROM bus WHERE source='".$_SESSION['from']."' AND dest='".$_SESSION['to']."'" ;
			$result = mysqli_query($conn, $sql);
			$i=0;
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$i=$i+1;
					if($i==$j)
					{
						$_SESSION['bus_comp']=$row["bus_comp"];
						$_SESSION['dep_time']=$row["dep_time"];
						$_SESSION['arr_time']=$row["arr_time"];
						$_SESSION['seats']=$row["seats"];
						$_SESSION['price']=$row["price"];
						$_SESSION['tax']=0.12;
					}
				}
			}
			mysqli_close($conn);
		?>
		<div id="busName">
			<h1><?php echo $_SESSION['bus_comp']; ?></h1>
			<p><strong>Selected: </strong></p>
		</div>
		<form action="php/details.php" method="post">
		<div id="bus">
			<div class="leftBus">
				<ol>
					<ol class="row r1">
						<li><input type="checkbox" name="seat_list[]" value="1A"></li>
						<li><input type="checkbox" name="seat_list[]" value="1B"></li>
						<li><input type="checkbox" name="seat_list[]" value="1C"></li>
					</ol>
					<ol class="row r2">
						<li><input type="checkbox" name="seat_list[]" value="2A"></li>
						<li><input type="checkbox" name="seat_list[]" value="2B"></li>
						<li><input type="checkbox" name="seat_list[]" value="2C"></li>
					</ol>
					<ol class="row r3">
						<li><input type="checkbox" name="seat_list[]" value="3A"></li>
						<li><input type="checkbox" name="seat_list[]" value="3B"></li>
						<li><input type="checkbox" name="seat_list[]" value="3C"></li>
					</ol>
					<ol class="row r4">
						<li><input type="checkbox" name="seat_list[]" value="4A"></li>
						<li><input type="checkbox" name="seat_list[]" value="4B"></li>
						<li><input type="checkbox" name="seat_list[]" value="4C"></li>
					</ol>
					<ol class="row r5">
						<li><input type="checkbox" name="seat_list[]" value="5A"></li>
						<li><input type="checkbox" name="seat_list[]" value="5B"></li>
						<li><input type="checkbox" name="seat_list[]" value="5C"></li>
					</ol>
					<ol class="row r6">
						<li><input type="checkbox" name="seat_list[]" value="6A"></li>
						<li><input type="checkbox" name="seat_list[]" value="6B"></li>
						<li><input type="checkbox" name="seat_list[]" value="6C"></li>
					</ol>
					<ol class="row r7">
						<li><input type="checkbox" name="seat_list[]" value="7A"></li>
						<li><input type="checkbox" name="seat_list[]" value="7B"></li>
						<li><input type="checkbox" name="seat_list[]" value="7C"></li>
					</ol>
					<ol class="row r8">
						<li><input type="checkbox" name="seat_list[]" value="8A"></li>
						<li><input type="checkbox" name="seat_list[]" value="8B"></li>
						<li><input type="checkbox" name="seat_list[]" value="8C"></li>
					</ol>
				</ol>
			</div>
			<div class="rightBus">
				<ol>
					<ol class="row r1">
						<li><input type="checkbox" name="seat_list[]" value="1D"></li>
						<li><input type="checkbox" name="seat_list[]" value="1E"></li>
					</ol>
					<ol class="row r2">
						<li><input type="checkbox" name="seat_list[]" value="2D"></li>
						<li><input type="checkbox" name="seat_list[]" value="2E"></li>
					</ol>
					<ol class="row r3">
						<li><input type="checkbox" name="seat_list[]" value="3D"></li>
						<li><input type="checkbox" name="seat_list[]" value="3E"></li>
					</ol>
					<ol class="row r4">
						<li><input type="checkbox" name="seat_list[]" value="4D"></li>
						<li><input type="checkbox" name="seat_list[]" value="4E"></li>
					</ol>
					<ol class="row r5">
						<li><input type="checkbox" name="seat_list[]" value="5D"></li>
						<li><input type="checkbox" name="seat_list[]" value="5E"></li>
					</ol>
					<ol class="row r6">
						<li><input type="checkbox" name="seat_list[]" value="6D"></li>
						<li><input type="checkbox" name="seat_list[]" value="6E"></li>
					</ol>
					<ol class="row r7">
						<li><input type="checkbox" name="seat_list[]" value="7D"></li>
						<li><input type="checkbox" name="seat_list[]" value="7E"></li>
					</ol>
					<ol class="row r8">
						<li><input type="checkbox" name="seat_list[]" value="8D"></li>
						<li><input type="checkbox" name="seat_list[]" value="8E"></li>
					</ol>
				</ol>
			</div>
		</div>
		<div id="sub"><input type="submit" value="BOOK"></div>
		</form>
		<div id="legend">
			<div class="lrow1">
				<div class="box">&nbsp;</div><p>&nbsp;For Men</p>
			</div>
			<div class="lrow2">
				<div class="box">&nbsp;</div><p>&nbsp;For Women</p>
			</div>
			<div class="lrow3">
				<div class="box">&nbsp;</div><p>&nbsp;Selected</p>
			</div>
		</div>
		<div id="hovered">
			<p>Seat Number:</p>
		</div>
	</div>
	</body>
</html>