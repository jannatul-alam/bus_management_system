<?php

session_start();

include "db.php";


if(!isset($_SESSION['user_id'])){
    header("location:login.php");
    exit();
}


$user_id=$_SESSION['user_id'];



$result=mysqli_query($conn,

"SELECT 

bookings.*,

buses.bus_name,

buses.from_district,

buses.to_district,

buses.departure


FROM bookings


JOIN buses

ON bookings.bus_id=buses.id


WHERE bookings.user_id='$user_id'


ORDER BY bookings.id DESC"

);


?>


<!DOCTYPE html>

<html>

<head>

<title>My Tickets</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body class="ticket-page">



<nav class="navbar ticket-nav">


<h2>
🎟 My Tickets
</h2>


<a href="dashboard.php">
Dashboard
</a>


</nav>





<div class="ticket-container">



<h1 class="ticket-title">
Your Tickets 🎫
</h1>




<?php while($row=mysqli_fetch_assoc($result)){ ?>



<div class="my-ticket-card">



<div class="ticket-top">


<h2>
🚌 <?=$row['bus_name']?>
</h2>


<span>
CONFIRMED
</span>


</div>



<hr>




<div class="ticket-info">


<p>
<strong>Booking ID</strong>

#<?=$row['id']?>

</p>




<p>

<strong>Route</strong>

<?=$row['from_district']?> 

→

<?=$row['to_district']?>

</p>




<p>

<strong>Seat</strong>

<?=$row['seat_number']?>

</p>




<p>

<strong>Journey Date</strong>

<?=$row['journey_date']?>

</p>




<p>

<strong>Departure</strong>

<?=$row['departure']?>

</p>


</div>





<a class="ticket-btn"

href="ticket.php?id=<?=$row['id']?>">

View Ticket 🎟

</a>



</div>



<?php } ?>



</div>



</body>

</html>