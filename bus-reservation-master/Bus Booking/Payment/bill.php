<!DOCTYPE html>
<html>
	<title>Express Bus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../icon.ico" type='image/x-icon'>
	<link href="bill.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = "../jqu.js" type = "text/javascript"></script>
	<script src = "bill.js" type = "text/javascript"></script>
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
		<div id="billAmt">
			<p><strong>Price of Seat:</strong> <i class="fa fa-inr"></i> <?php echo $_SESSION['price']; ?></p>
			<p><strong>Seats:</strong> <?php echo $_SESSION['noSeat']; ?></p>
			<p><strong>Total Price:</strong> <i class="fa fa-inr"></i> <?php $tot=$_SESSION['noSeat']*$_SESSION['price']; echo $tot; ?></p>
			<p><strong>Tax:</strong> <i class="fa fa-inr"></i> <?php $tax=$_SESSION['noSeat']*$_SESSION['price']*$_SESSION['tax']; echo $tax; ?></p>
			<p><strong>Coupon Applied:</strong> <span class='cop'></span></p>
			<p><strong>Discount:</strong> <i class="fa fa-inr"></i> <span class="discount"></span></p>
			<p><strong>Amount Payable:</strong> <i class="fa fa-inr"></i> <span class="amt"></span></p>
			
		</div>
		<div id="coupon">
			<p style="font-size:2em;font-weight:bold;">Applicable Coupons</p>
			<div class="card" id="card1">
				<h1>FIRST10</h1>
				<p>10% off Ticket Price</p>
			</div>
			<div class="card" id="card2">
				<h1>WEEK5</h1>
				<p>5% off on Ticket Price</p>
			</div>
			<div class="card" id="card3">
				<h1>ROUND10</h1>
				<p>10% off on Ticket Price</p>
			</div>
		</div>
		<div id="bookBtn">BOOK</div>
	</body>
	<script>
		$(document).ready(function(){
			$('#card1').click(function(){
				$('.cop').empty();
				$('.cop').append('FIRST10');
				$('.discount').empty();
				$('.discount').append(0.10*<?php echo $tot;?>);
				$('.amt').empty();
				$('.amt').append(<?php echo $tot+$tax-$tot*0.10;?>);
			});
			$('#card2').click(function(){
				$('.cop').empty();
				$('.cop').append('WEEK5');
				$('.discount').empty();
				$('.discount').append(0.05*<?php echo $tot;?>);
				$('.amt').empty();
				$('.amt').append(<?php echo $tot+$tax-$tot*0.05;?>);
			});
			$('#card3').click(function(){
				$('.cop').empty();
				$('.cop').append('ROUND10');
				$('.discount').empty();
				$('.discount').append(0.10*<?php echo $tot;?>);
				$('.amt').empty();
				$('.amt').append(<?php $_SESSION['amt']=$tot+$tax-$tot*0.10; echo $_SESSION['amt']?>);
			});
		});
	</script>
</html>