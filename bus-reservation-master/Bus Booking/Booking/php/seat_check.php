<?php
	$servername = "localhost";
	$username = "root";
	$password = "localhost";
	$dbname = "bus_booking";
	$j=$_POST['ind'];
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	session_start();
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$cmp=strtolower(str_replace(' ', '', $_SESSION['bus_comp']));
	if (isset($_POST['ind'])) 
    {
        $sql = "SELECT gender FROM ".$cmp." WHERE seat_no='".$j."'" ;
		$result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo $row['gender'];
			}
		}
		else
			echo "N";
	}
	else
		echo "f";
	mysqli_close($conn);
?>