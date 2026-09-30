<?php
include "db.php";
$result=mysqli_query($conn,"SELECT * FROM buses");
?>
<!DOCTYPE html>
<html>
<head>
<title>Available Buses</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Available Buses</h1>
<table border="1" cellpadding="10" align="center">
<tr>
<th>Bus</th><th>Route</th><th>Time</th><th>Price</th><th>Action</th>
</tr>
<?php while($bus=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?=$bus['bus_name']?></td>
<td><?=$bus['from_district']?> → <?=$bus['to_district']?></td>
<td><?=$bus['departure']?></td>
<td><?=$bus['price']?> TK</td>
<td><a href="seat_booking.php?id=<?=$bus['id']?>">Book Now</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>
