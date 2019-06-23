<!DOCTYPE html>
<html>
	<title>Express Bus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../icon.ico" type='image/x-icon'>
	<link href="book.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = "../jqu.js" type = "text/javascript"></script>
	<script src = "book.js" type = "text/javascript"></script>
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
			$source=$_POST['from'];
			$dest=$_POST['to'];
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "SELECT * FROM bus WHERE source='".$source."' AND dest='".$dest."'" ;
			$result = mysqli_query($conn, $sql);
			$_SESSION['from']=$source;
			$_SESSION['to']=$dest;
			$i=0;
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$i=$i+1;
					echo "<div class='bookInfo'>";
					echo "<p class='nameCom'>".$row["bus_comp"]."</p>";
					echo "<p class='time'>".substr($row["dep_time"],0,5);
					$h=(int)substr($row["arr_time"],0,2)-(int)substr($row["dep_time"],0,2);
					$m=(int)substr($row["arr_time"],3,2)-(int)substr($row["dep_time"],3,2);
					if($m<0)
					{
						$m=60+$m;
						$h=$h-1;
					}
					echo "<span class='differ'>-".$h."h ".$m."m-</span>";
					echo substr($row["arr_time"],0,5)."</p>";
					echo "<div class='rightInfo'><p class='seat'>".$row["seats"]." Seats</p>";
					echo "<form action='select.php' method='post'>";
					echo "<input class='hidForm' name='index' type='number' value=$i>";
					echo "<input type='submit' value='&#8377; ".$row["price"]."'></form></div>";
					echo "</div>";
				}
			} else {
				echo "No buses available!";
			}
			mysqli_close($conn);
		?>
	</div>
	</body>
</html>