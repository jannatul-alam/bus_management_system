<?php

session_start();

include "../db.php";


$result=mysqli_query($conn,

"SELECT bookings.*, 
buses.bus_name,
buses.from_district,
buses.to_district

FROM bookings

JOIN buses 
ON bookings.bus_id=buses.id

ORDER BY bookings.id DESC"

);


?>


<!DOCTYPE html>

<html>

<head>

<title>All Bookings</title>

<link rel="stylesheet" href="../css/style.css">

</head>


<body>



<nav class="navbar">

<h2>
🎫 All Bookings
</h2>


<a href="dashboard.php">
Dashboard
</a>


</nav>




<div class="dashboard">


<h1>
Booking Management
</h1>




<?php while($b=mysqli_fetch_assoc($result)){ ?>



<div class="booking-card">


<h3>
🎫 Booking ID: <?=$b['id']?>
</h3>


<p>

🚌 Bus:

<?=$b['bus_name']?>

</p>



<p>

📍 Route:

<?=$b['from_district']?> 

→

<?=$b['to_district']?>

</p>




<p>

👤 Passenger:

<?=$b['passenger_name']?>

</p>



<p>

📞 Phone:

<?=$b['phone']?>

</p>




<p>

💺 Seat:

<?=$b['seat_number']?>

</p>




<p>

📅 Journey Date:

<?=$b['journey_date']?>

</p>




<p>

⏰ Booking Time:

<?=$b['booking_date']?>

</p>



</div>




<?php } ?>



</div>



</body>

</html>