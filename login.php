<?php
    include 'header.php';
?>
<div class="form">
    <form action="includes/login.inc/.php" method="post">
        <input type="text" id="fname" name="uid" placeholder="Email / Username">
        <input type="password" id="lname" name="pwd" placeholder="Password">
        <input type="submit" value="Submit">
    </form>
    <p>New here? <a href ="signup.php">Register.</p>
</div>
<?php
    include 'footer.php';
?>