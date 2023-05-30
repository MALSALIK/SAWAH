<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <h3>Hey, <?php echo $_SESSION['username']; ?>!</h3>
        <h3>Welcome to the Sawah website.</h3><br>
        <p><a class="test" href="booking-payment\booking.html">Book a car</a></p>
        <p><a class="test" href="logout.php">Logout</a></p>
    </div>
</body>
</html>