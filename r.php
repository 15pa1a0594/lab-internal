<?php
include "includes/connect.php";
session_start();
if(isset($_POST["signupsubmit"])){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phone=$_POST["phone"];
    $qry="INSERT INTO reg(username,email,password,phone) VALUES ('$username','$email','$password','$phone')";
    mysqli_query($conn,$qry) or die("connection failed: ".mysqli_error($conn));
    header("location:login.php");
}
if(isset($_POST["loginsubmit"])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="a.css">
	<script type="text/javascript">
	function validateForm() {
	
    var x = document.forms["photoshare"]["username"].value;
	var y = document.forms["photoshare"]["email"].value; 
	var z = document.forms["photoshare"]["password"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	if (y == "") {
        alert("Email must be filled out");
        return false;
    }
	if (z == "") {
        alert("Password must be filled out");
        return false;
    }
}
	     
	</script>
</head>

<body>
	 <div class="header">
            <?php include "header.php"?>   
        </div><br><br>
   <form method="post" action="" name="photoshare" onsubmit="return validateForm()">
   <div class="satya">
      User name:<input class="defaultTextBox" name="username" type="text" placeholder="     username"/><br><p></p>
      Email:<input class="defaultTextBox" name="email" type="email" placeholder="    Your Email"/><br><p></p>
      Password:<input class="defaultTextBox" name="password" type="password" placeholder="     PASSWORD"/><br><p></p>
	Phone number:<input class="defaultTextBox" name="phone" type="text" placeholder="     PHONE"/><br><p></p>
      <input class="button" type="submit" name="signupsubmit" value="SignUp"/>
      <br/>
	  </div>
  </form>
        
        
        <form>
		<div class="satya">
        
            <h2>Already have an account?</h2>
            <a class="chinna" href="login.php">LogIn</a>
        </div>
        </form>
        
    
</body>

</html>
