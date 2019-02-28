<?php
	require "./init.php"
	$eventname = $_POST['eventname'];
	$eventrule = $_POST['eventrules'];
	$eventdesc = $_POST['eventdesc'];
	$co_name = $_POST['cname'];
	$co_no = $_POST['cnumber'];

	$sql = "INSERT INTO eventdetails(eventid, eventname, eventdesc, eventrule, coordinatorname, coordinatorno) VALUES ('$eventname', '$eventrule', '$eventdesc', '$co_name', '$co_no')";
	$res = mysqli_query($con, $sql);
?>