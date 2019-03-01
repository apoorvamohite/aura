<?php
	session_start();
	require "./init.php";
	$username = $_POST['user'];
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM login WHERE username='$username' AND password='$pass'";
	$res = mysqli_query($con, $sql);
	$no = mysqli_num_rows($res);
	
	if($no === 0)
	{
		header("location: clogin.php?msg=Wrong%20password");
	}
	else
	{
		$row = mysqli_fetch_assoc($res);
		$id = $row['eventid'];
		$_SESSION['id'] = $id;
		$_SESSION['user'] = $username;
		header("Location: home.php");
	}

?>