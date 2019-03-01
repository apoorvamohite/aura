<?php
	require "./init.php";
	//$id = $_SESSION['id'];
	$id=1;
	$eventname = $_POST['eventname'];
	$eventrule = $_POST['eventrule'];
	$eventdesc = $_POST['eventdesc'];
	$co_name = $_POST['cname'];
	$co_no = $_POST['cnumber'];

	if(isset($_GET['edit']))
	{
		$sql1 = "UPDATE eventdetails SET eventname='$eventname', eventdesc='$eventdesc', eventrule='$eventrule', coordinatorname='$co_name', coordinatorno='$co_no' WHERE eventid=$id";
		$res1 = mysqli_query($con, $sql1);
		if($res1 == True){
			header("location:dashboard.php?success=1");
		}
		else
		{
			header("location:dashboard.php?success=0");
		}
	}else{
		$sql = "INSERT INTO eventdetails(eventid, eventname, eventdesc, eventrule, coordinatorname, coordinatorno) VALUES ('$id', '$eventname', '$eventrule', '$eventdesc', '$co_name', '$co_no')";
		$res = mysqli_query($con, $sql);
		if($res == True){
			header("location:dashboard.php?success=1");
		}
		else
		{
			header("location:dashboard.php?success=0");
		}
	}

?>