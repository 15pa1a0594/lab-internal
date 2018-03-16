<?php
  $servername="localhost";
  $username="root";
  $password="vitadmin123";
  $db="project";
  $conn = mysqli_connect($servername,$username,$password)  or die("connection failed : ".mysql_connect());
  mysqli_select_db($conn,$db);
?>

