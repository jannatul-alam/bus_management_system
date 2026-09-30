<?php

session_start();

include "../db.php";


$message="";


if(isset($_POST['add'])){


$name=$_POST['bus_name'];
$number=$_POST['bus_number'];
$from=$_POST['from'];
$to=$_POST['to'];
$time=$_POST['time'];
$price=$_POST['price'];
$seat=$_POST['seat'];



$sql="INSERT INTO buses
(bus_name,bus_number,from_district,to_district,departure,price,total_seat)

VALUES

('$name','$number','$from','$to','$time','$price','$seat')";



if(mysqli_query($conn,$sql)){

$message="Bus Added Successfully 🚍";

}

}



?>


<!DOCTYPE html>

<html>

<head>

<title>Add Bus</title>

<link rel="stylesheet" href="../css/style.css">


</head>


<body>



<nav class="navbar">


<h2>
🚌 Add New Bus
</h2>


<a href="dashboard.php">
Dashboard
</a>


</nav>




<div class="add-container">



<div class="add-card">


<h1>
Add Bus Information
</h1>



<?php if($message!=""){ ?>

<div class="success">

<?=$message?>

</div>


<?php } ?>




<form method="POST">



<div class="input-group">

<label>Bus Name</label>

<input 
type="text"
name="bus_name"
placeholder="Example: Green Line"
required>

</div>



<div class="input-group">

<label>Bus Number</label>

<input 
type="text"
name="bus_number"
placeholder="Example: DHA-101">

</div>




<div class="row">


<div class="input-group">

<label>From District</label>

<input 
name="from"
placeholder="Dhaka">

</div>




<div class="input-group">

<label>To District</label>

<input 
name="to"
placeholder="Chittagong">

</div>


</div>





<div class="row">


<div class="input-group">

<label>Departure Time</label>

<input 
name="time"
placeholder="08:00 AM">

</div>




<div class="input-group">

<label>Ticket Price</label>

<input 
type="number"
name="price"
placeholder="800">

</div>


</div>




<div class="input-group">

<label>Total Seat</label>

<input 
type="number"
name="seat"
placeholder="40">

</div>





<button name="add">

➕ Add Bus

</button>



</form>


</div>


</div>



</body>


</html>