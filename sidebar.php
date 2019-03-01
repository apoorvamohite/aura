<?php
if(!isset($_SESSION['id']) && !isset($_SESSION['user'])){
    header("Location: clogin.php");
    return;
}
?>
<div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                Admin <br>
                <?php
                require './init.php';
                $eventid = $_SESSION['id'];
                $e = mysqli_fetch_array(mysqli_query($con, "SELECT eventname FROM eventdetails WHERE eventid=$eventid"));
                echo $e[0];
                ?>
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="home.php">
                    <i class="pe-7s-notebook"></i>
                    <p>Event Details</p>
                </a>
            </li>
            <li>
                <a href="edit.php">
                    <i class="pe-7s-note"></i>
                    <p>Edit Event</p>
                </a>
            </li>
            <li>
                <a href="table.php">
                    <i class="pe-7s-note2"></i>
                    <p>Participants List</p>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="pe-7s-power"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>