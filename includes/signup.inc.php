<?php
if (isset($_POST["Register"])) {
    $name= $_POST["name"];
    $email= $_POST["email"];
    $username= $_POST["uid"];
    $pwd= $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    $emptyInput = emptyInputsSignup($name,$email,$username,$pwd);
    $invalidUid= invalidUid($username);
    $invalidEmail= invalidEmail($email);
    $UidExists= uidExists($conn,$username,$email);

    if($emptyInput !== false){
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    if($invalidUid !== false){
        header("Location:../signup.php?error=invalidUid");
        exit();
    }
    if($invalidEmail !== false){
        header("Location:../signup.php?error=invalidEmail");
        exit();
    }
    if($UidExists !== false){
        header("Location:../signup.php?error=UidExists");
        exit();
    }



    createUser($conn, $name, $email, $username, $pwd);
     
}else{
    header('Location:../login.php');
}