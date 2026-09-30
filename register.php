<?php

include "db.php";


$message="";


if(isset($_POST['register'])){


$name=$_POST['name'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$password=password_hash($_POST['password'], PASSWORD_DEFAULT);



$check=mysqli_query($conn,

"SELECT * FROM users WHERE email='$email'"

);



if(mysqli_num_rows($check)>0){


$message="Email already exists";


}

else{


$sql="INSERT INTO users(name,email,phone,password,role)

VALUES

('$name','$email','$phone','$password','user')";



if(mysqli_query($conn,$sql)){


header("location:login.php");

exit();


}

else{


$message="Registration Error";


}



}


}


?>



<!DOCTYPE html>

<html>

<head>

<title>Create Account</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<div class="login-card">


<h1>
🚌 Bus Management System
</h1>


<h2>
Create Account
</h2>



<?php if($message!=""){ ?>

<p class="error">
<?=$message?>
</p>

<?php } ?>



<form method="POST">


<input 
type="text"
name="name"
placeholder="Full Name"
required>


<br>


<input 
type="email"
name="email"
placeholder="Email"
required>


<br>


<input 
type="text"
name="phone"
placeholder="Phone Number">


<br>


<input 
type="password"
name="password"
placeholder="Password"
required>


<br>


<button name="register">

Register

</button>


</form>



<p>

Already have account?

<a href="login.php">

Login

</a>

</p>



</div>


</body>

</html>