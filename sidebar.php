<?php
if(!isset($_SESSION['id']) && !isset($_SESSION['user'])){
    header("Location: clogin.php");
}
?>
<div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                Admin
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="dashboard.php">
                    <i class="pe-7s-notebook"></i>
                    <p>Event Details</p>
                </a>
            </li>
            <li>
                <a href="dashboard.php?edit">
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
                <a href="typography.html">
                    <i class="pe-7s-news-paper"></i>
                    <p>Typography</p>
                </a>
            </li>
            <li>
                <a href="icons.html">
                    <i class="pe-7s-science"></i>
                    <p>Icons</p>
                </a>
            </li>
            <li>
                <a href="notifications.html">
                    <i class="pe-7s-bell"></i>
                    <p>Notifications</p>
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