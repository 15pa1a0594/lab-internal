<?php
   session_start();
   include "connect.php";
if(isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];      
      $qry = 
      "SELECT email from reg WHERE email='$email' and password='$password'";
      
      $result = mysqli_query($conn, $qry) or die ("Error inserting: ".$qry);
      
      if(mysqli_num_rows($result)>0) {
        $_SESSION['email'] = $email;
        
		   
      	header('location:addphoto.php');
      } else {
         echo "<p>INVALID CREDENTIALS</p>";
      }
     mysqli_close($conn);
 }
?>
<!DOCTYPE html>
<html >
    <head>
    <link rel="stylesheet" href="a.css">
    </head>
    <body>
	 <div class="header">
            <?php include "header.php"?>   
        </div>
            <h1>logIn</h1>
        <form classs="form" method="post" action="" >
            <div class="a">
          Email:<input class="defaultTextBox" type="email"  name="email" placeholder="Enter Email"><p></p>
            Password:<input class="defaultTextBox" type="password" name="password"  placeholder="Enter Password"><p></p>  
            <input id="123" class="button" type="submit" name="submit" value="SignIn">
        </form>
		</div>
    </body>
</html>
