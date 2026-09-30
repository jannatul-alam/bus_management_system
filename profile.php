<?php

session_start();

include "db.php";


if(!isset($_SESSION['user_id'])){

header("location:login.php");

}



$user_id=$_SESSION['user_id'];



$result=mysqli_query($conn,

"SELECT * FROM users WHERE id='$user_id'"

);



$user=mysqli_fetch_assoc($result);



?>



<!DOCTYPE html>

<html>


<head>

<title>Profile</title>

<link rel="stylesheet" href="css/style.css">

</head>



<body>



<nav class="navbar">


<h2>
👤 My Profile
</h2>


<a href="dashboard.php">
Dashboard
</a>


</nav>





<div class="profile-card">



<div class="profile-icon">

👤

</div>



<h1>

<?=$user['name']?>

</h1>




<div class="profile-info">


<p>

<strong>Name:</strong>

<?=$user['name']?>

</p>



<p>

<strong>Email:</strong>

<?=$user['email']?>

</p>




<?php if(isset($user['phone'])){ ?>

<p>

<strong>Phone:</strong>

<?=$user['phone']?>

</p>

<?php } ?>



<p>

<strong>User ID:</strong>

<?=$user['id']?>

</p>



</div>





<a class="book-btn"

href="manage_account.php">

Edit Profile

</a>




</div>





</body>


</html>