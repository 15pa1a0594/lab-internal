<h1>Feed back</h1>
<div class="nav">
        <a href="home.html" style="text-decoration: none; font-size: 20px;">Home</a>&emsp;
        <?php if(!isset($_SESSION['email'])) {    ?>
        <a href="r.php" style="text-decoration: none; font-size: 20px;">Registration</a>&emsp;
        <a href="login.php" style="text-decoration: none; font-size: 20px;">Login</a>&emsp;
        <?php  } ?>
        <?php if(isset($_SESSION['email'])) {    ?>
        <a href="home.html" style="text-decoration: none; font-size: 20px;">Logout</a>
        <?php  } ?>
</div>
