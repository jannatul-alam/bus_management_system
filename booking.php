<?php
session_start();
include "db.php";

if(!isset($_SESSION['user_id'])){
header("location:login.php");
}

$bus_id=$_GET['id'];

$bus=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM buses WHERE id='$bus_id'"));

if(isset($_POST['book'])){

$seat=$_POST['seat'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$date=$_POST['date'];

mysqli_query($conn,"INSERT INTO bookings
(user_id,bus_id,seat_number,passenger_name,phone,journey_date)
VALUES
('".$_SESSION['user_id']."','$bus_id','$seat','$name','$phone','$date')");

$booking_id=mysqli_insert_id($conn);

header("location:ticket.php?id=".$booking_id);

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Seat Booking</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1><?php echo $bus['bus_name']; ?></h1>

<p>
Route:
<?php echo $bus['from_district']." → ".$bus['to_district']; ?>
</p>

<form method="POST">

<h3>Select Seat</h3>

<select name="seat">
<?php
for($i=1;$i<=40;$i++){
echo "<option value='$i'>Seat $i</option>";
}
?>
</select>

<br>

<input name="name" placeholder="Passenger Name" required>

<br>

<input name="phone" placeholder="Phone Number" required>

<br>

<input type="date" name="date" required>

<br>

<button name="book">Confirm Booking</button>

</form>

</body>
</html>
