<?php
    include 'header.php';
?>
<div class="form">
    <form action="includes/signup.inc/.php" method="post">
        <input type="text" id="fname" name="name" placeholder="First name">
        <input type="text" id="email" name="email" placeholder="Email">
        <input type="text" id="username" name="uid" placeholder="User Name">
        <input type="password" id="password" name="pwd" placeholder="Password">
        <input type="Register" value="Submit">
    </form>
    <p>Already have account,<a href ="login.php"> Login</p>
</div>
<?php
    include 'footer.php';
?>