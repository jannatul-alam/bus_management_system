<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("location:login.php");
    exit();
}

$name=$_SESSION['name'];

?>

<!DOCTYPE html>
<html>

<head>

<title>User Dashboard</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<nav class="navbar">

<h2>
🚌 Bus Management System
</h2>


<a href="logout.php">
Logout
</a>


</nav>



<div class="dashboard">



<!-- Welcome -->

<div class="welcome">

<h1>
Welcome, <?=$name?> 👋
</h1>

<p>
Manage your bus tickets easily
</p>

</div>




<!-- BUS ANIMATION -->

<div class="travel-animation">

<div class="road">

<img src="images/bus.png" class="bus-moving">

</div>

<p>
Your journey is ready 🚍
</p>

</div>





<!-- QUICK STATUS -->

<div class="status-section">


<div class="status-card">

<h2>🎫</h2>

<h3>
Total Bookings
</h3>

<p>
Check your booking history
</p>

</div>



<div class="status-card">

<h2>🚌</h2>

<h3>
Available Buses
</h3>

<p>
Find your next journey
</p>

</div>



<div class="status-card">

<h2>📍</h2>

<h3>
Popular Routes
</h3>

<p>
Dhaka - Cox's Bazar
</p>

</div>



<div class="status-card">

<h2>💳</h2>

<h3>
Easy Payment
</h3>

<p>
Secure ticket booking
</p>

</div>


</div>







<!-- DASHBOARD CARDS -->


<div class="dashboard-cards">



<a href="search.php">

<div class="dash-card">

<h2>🔍</h2>

<h3>
Search Bus
</h3>

<p>
Find your journey
</p>

</div>

</a>





<a href="my_booking.php">

<div class="dash-card">

<h2>🎫</h2>

<h3>
My Booking
</h3>

<p>
Booking history
</p>

</div>

</a>






<a href="my_ticket.php">

<div class="dash-card">

<h2>🎟️</h2>

<h3>
My Tickets
</h3>

<p>
View tickets
</p>

</div>

</a>







<a href="profile.php">

<div class="dash-card">

<h2>👤</h2>

<h3>
Profile
</h3>

<p>
View profile
</p>

</div>

</a>







<a href="manage_account.php">

<div class="dash-card">

<h2>⚙️</h2>

<h3>
Manage Account
</h3>

<p>
Update account
</p>

</div>

</a>




</div>






<!-- POPULAR ROUTE -->

<div class="route-box">


<h2>
🔥 Popular Routes Today
</h2>


<div class="routes">


<span>
Dhaka ➜ Cox's Bazar
</span>


<span>
Dhaka ➜ Sylhet
</span>


<span>
Chittagong ➜ Rangamati
</span>


</div>


</div>




</div>


</body>

</html>