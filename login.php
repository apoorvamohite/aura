<?php
	require "./init.php";
	$username = $_POST['user'];
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM login WHERE username='$username' and password='$pass'";
	$res = mysqli_query($con, $sql);
	$no = mysqli_num_rows($res);
	$row = mysqli_fetch_assoc($res);
	$id = $row['eventid'];
	if($no == 0)
	{
		header("location: clogin.php?msg=Wrong%20password");
	}
	else
	{
		$_SESSION['$id']=$id;
		header("location: dashboard.php");
	}

