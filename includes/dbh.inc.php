<?php
    $serverName="localhost";
    $dbUserName="root";
    $dbPassword="";
    $dbname="uniconnect";

    $conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbname);


    if($conn == TRUE){
       //echo "Connection OK";
    }

    ?>