<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "uniconnect";

  $conn1= mysqli_connect($servername,$username,$password,$databasename);

  if($conn1 == TRUE){
       //echo "Connection OK";
    }

?>