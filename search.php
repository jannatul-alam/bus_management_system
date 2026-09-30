<?php

include "db.php";

$buses=[];


if(isset($_POST['search'])){


$from=$_POST['from'];

$to=$_POST['to'];


$result=mysqli_query($conn,

"SELECT * FROM buses 
WHERE from_district='$from'
AND to_district='$to'");


while($row=mysqli_fetch_assoc($result)){

$buses[]=$row;

}

}

?>


<!DOCTYPE html>

<html>

<head>

<title>Search Bus</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>



<div class="search-page">



<nav class="navbar">

<h2>
🚌 Bus Booking
</h2>

<a href="dashboard.php">
Dashboard
</a>


</nav>





<div class="search-box fade-up">


<h1>
🔍 Search Your Journey
</h1>


<p>
Find your comfortable bus and enjoy your travel
</p>



<form method="POST">


<input 
list="districts"
name="from"
placeholder="📍 From District"
required>



<input 
list="districts"
name="to"
placeholder="📍 To District"
required>



<datalist id="districts">

<option value="Dhaka">

<option value="Chittagong">

<option value="Cox's Bazar">

<option value="Sylhet">

<option value="Rangamati">

<option value="Rajshahi">

<option value="Khulna">

<option value="Barisal">

<option value="Comilla">

<option value="Mymensingh">

<option value="Gazipur">

<option value="Narayanganj">

<option value="Jessore">

<option value="Bogra">

<option value="Tangail">

<option value="Noakhali">

</datalist>



<button name="search">

Search Bus

</button>


</form>


</div>







<div class="bus-results">


<?php foreach($buses as $bus){ ?>


<div class="bus-card fade-up">


<h2>

🚌 <?=$bus['bus_name']?>

</h2>



<h3>

<?=$bus['from_district']?> 
→
<?=$bus['to_district']?>

</h3>



<p>
🕒 Departure:
<?=$bus['departure']?>
</p>


<h2 class="price">

৳ <?=$bus['price']?>

</h2>


<a class="book-btn"

href="seat_booking.php?id=<?=$bus['id']?>">

Book Now

</a>



</div>



<?php } ?>


</div>



</div>





<script>


const items=document.querySelectorAll(".fade-up");


const observer=new IntersectionObserver((entries)=>{


entries.forEach(entry=>{


if(entry.isIntersecting){

entry.target.classList.add("show");

}


});


},{
threshold:.2
});



items.forEach(item=>{

observer.observe(item);

});


</script>



</body>

</html>