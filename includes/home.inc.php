<?php
 $query = "SELECT * FROM `subject`;";

 $result = mysqli_query($conn2, $query);

 if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_assoc($result)) {
          echo "Roll No: " . $row["Roll_No"]
          . " - Name: " . $row["Name"]. "<br>";
      }else {
      echo "0 results";
     }
    }

  $conn->close();

?>