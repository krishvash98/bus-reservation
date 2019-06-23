<?php
	$servername = "localhost";
	$username = "root";
	$password = "localhost";
	$dbname = "bus_booking";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$ph_no=$_POST['ph_no'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "INSERT INTO users (username,fname,lname,email,password,age,ph_no) VALUES('$username','$fname','$lname','$email','$password',$age,'$ph_no')";
	if (mysqli_query($conn, $sql)) 
		header('Location:redirect.html');
	mysqli_close($conn);
?>