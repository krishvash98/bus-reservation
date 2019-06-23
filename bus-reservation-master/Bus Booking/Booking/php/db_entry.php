<?php
	$servername = "localhost";
	$username = "root";
	$password = "localhost";
	$dbname = "bus_booking";
	$name=$_POST['name'];
	$age=$_POST['age'];
	$ph_no=$_POST['ph_no'];
	$gender=$_POST['gender'];
	$seat_no=$_POST['seat_no'];
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	session_start();
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$cmp=strtolower(str_replace(' ', '', $_SESSION['bus_comp']));
    $sql = "INSERT INTO ".$cmp." (name,age,ph_no,seat_no,gender,username) VALUES('".$name."',".$age.",'".$ph_no."','".$seat_no."','".$gender."','".$_SESSION['username']."')" ;
	if (mysqli_query($conn, $sql)) 
		echo "T";
	else
		echo 'F';
	mysqli_close($conn);
?>