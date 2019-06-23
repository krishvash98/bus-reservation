<!DOCTYPE html>
<html>
	<title>Express Bus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../icon.ico" type='image/x-icon'>
	<link href="pay.css" rel="stylesheet">
	<script src = "../jqu.js" type = "text/javascript"></script>
	<script src = "pay.js" type = "text/javascript"></script>
	<body>
		<div id="container">
			<div id="credit">
				<div class="head">Credit</div>
				<div class="payment">
					<form>
						<input type="number" placeholder="Account Number" name="accno" min=12><br>
						<input type="number" placeholder="CVV" name="cvv" min=3 max=3 style="width:15%">
						<label style="margin-left:10%">Expiry Date</label>
						<input type="number" placeholder="Month" name="mon" min=2 max=2 style="width:15%">
						<input type="number" placeholder="Year" name="year" min=2 max=2 style="width:15%"><br>
					</form>
				</div>
			</div>
			<div id="debit">
				<div class="head">Debit</div>
				<div class="payment">
					<form>
						<input type="number" placeholder="Account Number" name="accno" min=12><br>
						<input type="number" placeholder="CVV" name="cvv" min=3 max=3 style="width:15%">
						<label style="margin-left:10%">Expiry Date</label>
						<input type="number" placeholder="Month" name="mon" min=2 max=2 style="width:15%">
						<input type="number" placeholder="Year" name="year" min=2 max=2 style="width:15%"><br>
					</form>
				</div>
			</div>
			<div id="wallet">
				<div class="head">e-Wallet</div>
				<div class="payment">
					<div class="paytm"><label><input type="radio" name="walletPay"><img src="pay.jpg" style="width:100%;cursor:pointer;"></label></div>
					<div class="mobi"><label><input type="radio" name="walletPay"><img src="mobi.png" style="width:100%;cursor:pointer;"></label></div>
				</div>
			</div>
			<a href="../Booking/success.html"><div id="payBtn">PAY</div></a>
		</div>
	</body>
</html>