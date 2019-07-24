<?php
include "connect.php";

if(isset($_GET['update'])){
     $id=$_POST['Registration_id'];
     $First_Name=($_POST['First_Name']);
     $Second_Name=($_POST['Second_Name']);
     $Home_Address=($_POST['Home_Address']);
     $Contact_Numbers=($_POST['Contact_Numbers']);
     $Email_Address=($_POST['Email_Address']);
     $Gender=($_POST['Gender']);
     $Job_Position=($_POST['Job_Position']);
     $Family_Member=($_POST['Family_Member']);
 
}
$sql = "UPDATE Registration SET First_Name = ' $First_Name' , Second_Name='$Second_Name' , Home_Address='$Home_Address' , Contact_Numbers='$Contact_Numbers' ,Email_Address='$Email_Address' , Gender ='$Gender' ,   Job_Position = '$Job_Position', Family_Member='$Family_Member' WHERE Registration_id='$id' ";

// if ($conn->query($sql) === TRUE) {
//     echo "Record Updated successfully";

// } else {
//     echo "Error Updating record: " . $conn->error;




}
$conn->close();
?> 
