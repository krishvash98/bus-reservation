<?php
	$servername = "localhost";
	$username = "root";
	$password = "localhost";
	$dbname = "bus_booking";
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$access=0;
	$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'" ;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)==1) {
		$row = mysqli_fetch_assoc($result);
		$access=1;
		session_start();
		$_SESSION['username']=$user;
		$_SESSION['access']=$access;
		$_SESSION['name']=$row['fname']." ".$row['lname'];
	}
	mysqli_close($conn);
	if($access==1)
		header('Location:LoginPHP/loginsuccess.html');
	else
		header('Location:LoginPHP/loginerror.html');
?>