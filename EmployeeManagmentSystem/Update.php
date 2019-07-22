<?php
include "connect.php";

if(isset($_GET['update'])){
    $id=$_GET['Registration_id'];
}
$sql = "UPDATE Registration SET First_Name = 'Zanele' WHERE Registration_id='293' ";

if ($conn->query($sql) === TRUE) {
    echo "Record Updated successfully";

} else {
    echo "Error Updating record: " . $conn->error;
}
$conn->close();
?> 
