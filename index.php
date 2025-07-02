<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"  href="index.css">
</head>
<body>
    
</body>
</html>
<?php
    include 'header.php';
    include 'includes/dbh2.inc.php'; 
?>

<?php
$query = "SELECT * FROM `subject` WHERE userName='Asal';";
$result = mysqli_query($conn2, $query);

//if (mysqli_num_rows($result) > 0) {
//    while ($row = mysqli_fetch_assoc($result)) {
//        echo "User Name: " . $row["userName"] . " - Subject: " . $row["subject"] . " - Marks: " . $row["marks"] . "<br>";
//    }
//} else {
//    echo "0 results";
//}

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Subject_Name</th><th>Marks</th></tr>"; // 
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["subject"] . "</td>";
        echo "<td>" . $row["marks"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

}else {
    echo "No records found.";
}

mysqli_close($conn2);
?>

<?php
    include 'footer.php';
?>
