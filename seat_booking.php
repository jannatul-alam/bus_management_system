<?php
session_start();
include "db.php";

if(!isset($_SESSION['user_id'])){
    header("location:login.php");
}


$bus_id=$_GET['id'];


$bus=mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT * FROM buses WHERE id='$bus_id'")
);


$booked=[];

$result=mysqli_query($conn,
"SELECT seat_number FROM bookings WHERE bus_id='$bus_id'");


while($row=mysqli_fetch_assoc($result)){
    $booked[]=$row['seat_number'];
}



$seats=[
"A1","A2","A3","A4",
"B1","B2","B3","B4",
"C1","C2","C3","C4",
"D1","D2","D3","D4",
"E1","E2","E3","E4",
"F1","F2","F3","F4",
"G1","G2","G3","G4",
"H1","H2","H3","H4",
"I1","I2","I3","I4",
"J1","J2","J3","J4"
];



if(isset($_POST['confirm'])){


$seat=$_POST['seat'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$date=$_POST['date'];



mysqli_query($conn,

"INSERT INTO bookings
(user_id,bus_id,seat_number,passenger_name,phone,journey_date)

VALUES

('".$_SESSION['user_id']."',
'$bus_id',
'$seat',
'$name',
'$phone',
'$date')"

);



$id=mysqli_insert_id($conn);


header("location:ticket.php?id=$id");


}


?>



<!DOCTYPE html>

<html>

<head>

<title>Select Seat</title>

<link rel="stylesheet" href="css/style.css">

<script src="js/seat.js"></script>

</head>



<body>


<h1>
<?=$bus['bus_name']?>
</h1>


<h3>
<?=$bus['from_district']?> → <?=$bus['to_district']?>
</h3>



<div class="driver">

🚍 DRIVER

</div>



<div class="bus-layout">


<?php


foreach($seats as $seat){


$class="seat available";


if(in_array($seat,$booked)){

$class="seat booked";

}



echo "

<button 
type='button'
class='$class'
onclick=\"selectSeat('$seat')\">

$seat

</button>";

}


?>


</div>




<div class="legend">

<span class="green"></span> Available

<span class="blue"></span> Selected

<span class="red"></span> Booked


</div>





<form method="POST">


<input 
id="seat"
name="seat"
placeholder="Select Seat"
readonly
required>



<input 
name="name"
placeholder="Passenger Name"
required>



<input 
name="phone"
placeholder="Phone Number"
required>



<input 
type="date"
name="date"
required>



<button name="confirm">

Confirm Booking

</button>


</form>



</body>

</html>