<?php
	session_start();
	require "./init.php";
	$id = $_SESSION['id'];
	$eventname = $_POST['eventname'];
	$eventrule = $_POST['eventrule'];
	$eventdesc = $_POST['eventdesc'];
	$co_name1 = $_POST['cname1'];
	$co_no1 = $_POST['cnumber1'];
	$co_name2 = $_POST['cname2'];
	$co_no2 = $_POST['cnumber2'];
	$co_name3 = $_POST['cname3'];
	$co_no3 = $_POST['cnumber3'];
	$co_name4 = $_POST['cname4'];
	$co_no4 = $_POST['cnumber4'];

	$check = "SELECT * FROM eventdetails WHERE eventid=$id";
	$checkres = mysqli_query($con, $check);
	if(mysqli_num_rows($checkres)==0){
		$sql = "INSERT INTO eventdetails(eventid, eventname, eventdesc, eventrule, coordinatorname1, coordinatorno1, coordinatorname2, coordinatorno2, coordinatorname3, coordinatorno3, coordinatorname4, coordinatorno4) VALUES ('$id', '$eventname', '$eventrule', '$eventdesc', '$co_name1', '$co_no1', '$co_name2', '$co_no2', '$co_name3', '$co_no3', '$co_name4', '$co_no4')";
		$res = mysqli_query($con, $sql);
		if($res == True){
			header("location:edit.php?success=1");
		}
		else
		{
			header("location:edit.php?success=0");
		}
	}else{
		$sql1 = "UPDATE eventdetails SET eventname='$eventname', eventdesc='$eventdesc', eventrule='$eventrule', coordinatorname1='$co_name1', coordinatorno1='$co_no1', coordinatorname2='$co_name2', coordinatorno2='$co_no2', coordinatorname3='$co_name3', coordinatorno3='$co_no3', coordinatorname4='$co_name4', coordinatorno4='$co_no4' WHERE eventid=$id";
		$res1 = mysqli_query($con, $sql1);
		if($res1 == True){
			header("location:edit.php?success=1");
		}
		else
		{
			header("location:edit.php?success=0");
		}
	}

?>