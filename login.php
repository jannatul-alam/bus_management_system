<?php

session_start();

include "db.php";


$message="";


if(isset($_POST['login'])){


$email=$_POST['email'];

$password=$_POST['password'];



$query=mysqli_query($conn,

"SELECT * FROM users WHERE email='$email'"

);



$user=mysqli_fetch_assoc($query);



if($user && password_verify($password,$user['password'])){


$_SESSION['user_id']=$user['id'];

$_SESSION['name']=$user['name'];

$_SESSION['role']=$user['role'];



if($user['role']=="admin"){


header("location:admin/dashboard.php");


}
else{


header("location:dashboard.php");


}


exit();


}

else{


$message="Invalid Email or Password";


}


}


?>



<!DOCTYPE html>

<html>

<head>

<title>
Bus Management System
</title>


<link rel="stylesheet" href="css/style.css">


</head>


<body>



<!-- HERO LOGIN SECTION -->

<section class="login-section">



<div class="login-overlay">



<div class="hero-text">


<h1>
🚌 Travel Across Bangladesh
</h1>


<h2>
Your Next Journey Starts Here
</h2>


<p>
Book your bus ticket easily and explore beautiful destinations.
</p>


</div>




<div class="login-card">



<h1>
🚌 Bus Management System
</h1>


<p class="welcome-text">
Welcome Back
</p>



<?php if($message!=""){ ?>

<p class="error">
<?=$message?>
</p>

<?php } ?>



<form method="POST">


<input

type="email"

name="email"

placeholder="📧 Email Address"

required>



<input

type="password"

name="password"

placeholder="🔒 Password"

required>




<button name="login">

Login

</button>


</form>




<p>

Don't have an account?

<a href="register.php">

Create Account

</a>


</p>



</div>


</div>


</section>







<!-- DESTINATION GALLERY -->


<section class="gallery-section">



<h1>

🇧🇩 Bangladesh Best Places Right Now

</h1>


<p>
Explore popular destinations across Bangladesh
</p>



<div class="gallery-wrapper">


<div class="gallery-slider">



<div class="place-card">

<img src="images/cox.jpg">

<h3>
Cox's Bazar
</h3>

<p>
Cox's Bazar District
</p>

</div>




<div class="place-card">

<img src="images/dhaka.jpg">

<h3>
Dhaka
</h3>

<p>
Dhaka District
</p>

</div>




<div class="place-card">

<img src="images/chittagong.jpg">

<h3>
Chittagong
</h3>

<p>
Chittagong District
</p>

</div>




<div class="place-card">

<img src="images/sylhet.jpg">

<h3>
Sylhet
</h3>

<p>
Sylhet District
</p>

</div>




<div class="place-card">

<img src="images/rangamati.jpg">

<h3>
Rangamati
</h3>

<p>
Rangamati District
</p>

</div>



</div>


</div>


</section>







<!-- APP DOWNLOAD SECTION -->


<section class="app-section">


<div class="app-container">


<div class="app-text">


<h1>
Download Our App.
</h1>


<p>
Book tickets anytime, anywhere.
</p>



<div class="app-buttons">


<img src="images/google-play.png">


<img src="images/app-store.png">


</div>


</div>





<div class="app-image">


<img src="images/app.png">


</div>



</div>



</section>







<!-- FOOTER SECTION -->


<footer class="main-footer">


<div class="footer-container">


<div class="footer-about">

<h2>
🚌 Bus Management
</h2>

<p>
Book bus tickets online in Bangladesh.
Choose your destination, select seats and enjoy safe & comfortable travel.
</p>

</div>





<div class="footer-column">

<h3>
Services
</h3>

<p>Bus Tickets</p>
<p>Popular Routes</p>
<p>Seat Booking</p>
<p>Online Payment</p>

</div>





<div class="footer-column">

<h3>
Legal
</h3>

<p>Terms & Conditions</p>
<p>Privacy Policy</p>
<p>Cancellation Policy</p>

</div>





<div class="footer-column">

<h3>
Follow Us
</h3>


<div class="social-icons">

<span>f</span>
<span>◎</span>
<span>▶</span>
<span>♪</span>

</div>


</div>



</div>





<div class="payment-section">


<h3>
We Accept
</h3>


<div class="payment-box">


<div>VISA</div>

<div>MasterCard</div>

<div>bKash</div>

<div>Nagad</div>

<div>Rocket</div>

<div>Upay</div>

<div>Bank</div>


</div>


</div>



</footer>


<!-- SCROLL FADE SCRIPT -->

<script>

const elements = document.querySelectorAll(
".gallery-section, .place-card, .app-section, .app-container, .main-footer, .footer-column, .payment-section"
);


const fadeObserver = new IntersectionObserver((items)=>{

items.forEach(item=>{

if(item.isIntersecting){

item.target.classList.add("active");

}

});

},
{
threshold:0.2
});



elements.forEach(element=>{

element.classList.add("fade-item");

fadeObserver.observe(element);

});


</script>


</body>

</html>