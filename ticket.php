<?php

include "db.php";


$id=$_GET['id'];


$data=mysqli_fetch_assoc(mysqli_query($conn,

"SELECT bookings.*, 
buses.bus_name,
buses.from_district,
buses.to_district

FROM bookings

JOIN buses 

ON bookings.bus_id=buses.id

WHERE bookings.id='$id'"

));


?>


<!DOCTYPE html>

<html>

<head>

<title>Bus Ticket</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<div class="ticket-card">


<h1>
🚌 BUS TICKET
</h1>



<div class="ticket-line">

Booking ID

<b>
#<?=$data['id']?>
</b>

</div>




<div class="ticket-line">

Passenger

<b>
<?=$data['passenger_name']?>
</b>

</div>




<div class="ticket-line">

Phone

<b>
<?=$data['phone']?>
</b>

</div>




<div class="ticket-line">

Bus

<b>
<?=$data['bus_name']?>
</b>

</div>



<div class="ticket-line">

Route

<b>
<?=$data['from_district']?> 
→
<?=$data['to_district']?>

</b>

</div>




<div class="ticket-line">

Seat

<b>
<?=$data['seat_number']?>
</b>

</div>




<div class="ticket-line">

Journey Date

<b>
<?=$data['journey_date']?>
</b>

</div>



<button onclick="window.print()">

Print Ticket

</button>


</div>



</body>

</html>
