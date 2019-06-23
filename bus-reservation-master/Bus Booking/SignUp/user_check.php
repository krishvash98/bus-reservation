<?php
	$servername = "localhost";
	$username = "root";
	$password = "localhost";
	$dbname = "bus_booking";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
    if (isset($_POST['username'])) 
    {
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        if (!empty($username)) 
		{
			$sql="SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $count=mysqli_num_rows( $result);
            if($count==0)
            {
              echo "T";
            }
            else
            {
              echo "F";
            }
		}
	}
	mysqli_close($conn);
?>