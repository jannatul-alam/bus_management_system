<?php

session_start();

include "db.php";


if(!isset($_SESSION['user_id'])){

header("location:login.php");

}



$user_id=$_SESSION['user_id'];



$user=mysqli_fetch_assoc(

mysqli_query($conn,

"SELECT * FROM users WHERE id='$user_id'"

)

);



$message="";



if(isset($_POST['update'])){


$name=$_POST['name'];

$phone=$_POST['phone'];



mysqli_query($conn,

"UPDATE users SET 

name='$name',

phone='$phone'

WHERE id='$user_id'"

);



$_SESSION['name']=$name;


$message="Profile Updated Successfully";


}





if(isset($_POST['password'])){


$new_password=$_POST['new_password'];



$password=md5($new_password);



mysqli_query($conn,

"UPDATE users SET 

password='$password'

WHERE id='$user_id'"

);



$message="Password Changed Successfully";


}



?>



<!DOCTYPE html>

<html>


<head>

<title>Manage Account</title>

<link rel="stylesheet" href="css/style.css">

</head>



<body>



<nav class="navbar">


<h2>
⚙ Manage Account
</h2>


<a href="dashboard.php">

Dashboard

</a>


</nav>





<div class="account-card">



<h1>
Account Settings
</h1>



<?php if($message!=""){ ?>

<p class="success">

<?=$message?>

</p>

<?php } ?>





<form method="POST">


<h3>
Update Information
</h3>



<input 

type="text"

name="name"

value="<?=$user['name']?>"

required>



<input

type="text"

name="phone"

value="<?=$user['phone']?>"

placeholder="Phone Number"

>



<button name="update">

Save Changes

</button>


</form>







<form method="POST">


<h3>

Change Password

</h3>



<input

type="password"

name="new_password"

placeholder="New Password"

required>



<button name="password">

Change Password

</button>



</form>





</div>




</body>


</html>