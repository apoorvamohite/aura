<?php
session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['user'])){
    header("Location: clogin.php");
    return;
}
?>
<!doctype html>
<html lang="en">
<head>
	<?php require "head.html"; ?>
</head>
<body>
<div class="wrapper">
    <?php require "sidebar.php"; ?>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
							<p class="hidden-lg hidden-md">Dashboard</p>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        $row=Null;
        $id = $_SESSION['id'];
        require "./init.php";
        $sql = "SELECT * FROM eventdetails WHERE eventid=$id";
        $res = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($res);
        ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Event Details</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="container">
                                        <?php 
                                        echo "Event Name: ".$row['eventname']."<br>";
                                        echo "Event Description: ".$row['eventdesc']."<br>";
                                        echo "Event Rules: ".$row['eventrule']."<br>";
                                        echo "Coordinator 1: ".$row['coordinatorname1']."&nbsp;";
                                        echo $row['coordinatorno1']."<br>";
                                        echo "Coordinator 2: ".$row['coordinatorname2']."&nbsp;";
                                        echo $row['coordinatorno2']."<br>";
                                        echo "Coordinator 3: ".$row['coordinatorname3']."&nbsp;";
                                        echo $row['coordinatorno3']."<br>";
                                        echo "Coordinator 4: ".$row['coordinatorname4']."&nbsp;";
                                        echo $row['coordinatorno4']."<br>"; 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require "footer.html"; ?>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
</html>
