<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'EmployeeManagementSystem';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}echo " ";

// declaring variables
 if (isset($_POST['Save_Employee'])){
     $First_Name=$_POST['First_Name'];
     $Second_Name=$_POST['Second_Name'];
     $Home_Address=$_POST['Home_Address'];
     $Contact_Numbers=$_POST['Contact_Numbers'];
     $Email_Address=$_POST['Email_Address'];
     $Gender=$_POST['Gender'];
     $Job_Position=$_POST['Job_Position'];
     $Family_Member=$_POST['Family_Member'];
 

 //Inserting values int database
 $sql= "INSERT INTO Registration (First_Name,Second_Name,Home_Address,Contact_Numbers,Email_Address,Gender,Job_Position,Family_Member) 
        VALUES ('$First_Name','$Second_Name','$Home_Address','$Contact_Numbers','$Email_Address','$Gender','$Job_Position','$Family_Member')";
 


//Selecting values from the datadase
if ($conn->query($sql)=== TRUE) {
 echo " ";
 } 
 else {
 echo "Error:" . $sql . "<br>" .$conn->error;
 }}


//Declaring Get Variables
if(isset($_POST['Delete'])){
 $id=($_POST['Registration_id']);
}


//Deleting data from database
 $sql = "DELETE FROM Registration WHERE Registration_id =197 ";

if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully";
} else {
 echo "Error deleting record: " . $conn->error;
}
$conn->close();
    
?>


