<?php
    function emptyInputsSignup($name,$email,$username,$pwd){
        $result;
        if(empty($name) || empty($email) || empty($username) ||empty($pwd)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }   
    function invalidUid($username){
        $result;
        if(preg_match("/^[a-zA-Z0-9]*$/",$username)){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }   
    function invalidEmail($email){
        $result;
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }   
    function uidExists($conn,$username,$email){
        $sql="SELECT * FROM users WHERE usersUid= ? usersEmail=? ";
        $stmt= mysqli_stmt_init($conn);
        if (!myqli_stmt_prepare($stmt,$sql)) {
           header("Location:../signup.php?error=stmtfailed");
           exit();
        }

        mysqli_stmt_bind_param($stmt,"ss",$username,$email);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqil_fetch_assoc($resultData)){
            return $row;
        }else{
            return false;
        }
        mysqli_stmt_close($stmt);

    }   

    function emtyInputLogin($username, $pwd){
        $result
        if(empty($name) || empty($pwd)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }

    function LoginUser($username, $pwd){
        $uidExists=uidExists($conn, $username, $username);
        if($uidExists == false){
            header("location:../signup.php?erroe=wornglogin");
            exit();
        }
        $pwdHashed = 
    }
