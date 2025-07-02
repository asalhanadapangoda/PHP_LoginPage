<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "uniconnect";

  $conn2= mysqli_connect($servername,$username,$password,$databasename);

  if($conn2 == TRUE){
       //echo "Connection OK";
    }

?>