<?php
include "connect.php";

// declaring variables
 if (isset($_POST['Save_Employee'])){
     $Registration=($_POST['Registration_id']);
     $First_Name=($_POST['First_Name']);
     $Second_Name=($_POST['Second_Name']);
     $Home_Address=($_POST['Home_Address']);
     $Contact_Numbers=($_POST['Contact_Numbers']);
     $Email_Address=($_POST['Email_Address']);
     $Gender=($_POST['Gender']);
     $Job_Position=($_POST['Job_Position']);
     $Family_Member=($_POST['Family_Member']);
 

 //Inserting values into database
 $sql= "INSERT INTO Registration (Registration_id,First_Name,Second_Name,Home_Address,Contact_Numbers,Email_Address,Gender,Job_Position,Family_Member) 
        VALUES ('$Registration_id','$First_Name','$Second_Name','$Home_Address','$Contact_Numbers','$Email_Address','$Gender','$Job_Position','$Family_Member')";
 
 
//Selecting values from the datadase
if ($conn->query($sql)=== TRUE) {
  header("Location:Home.php");
       exit(); 
 } 
 
 else {
 echo "Error:" . $sql . "<br>" .$conn->error;
 }}
 

//CREATE PAGE
if (isset($_POST['create'])){
    $Username=($_POST['Username']);
    $Surname=($_POST['Surname']);
    $Email=($_POST['Email']);
    $Contact=($_POST['Contact']);
    $Passsword=($_POST['Passsword']);
    $Confirm_password=($_POST['Confirm_password']);
 
 //Inserting values into database
 $sql= "INSERT INTO CreateAccount(Username,Surname,Email,Contact,Passsword,Confirm_password) 
        VALUES ('$Username','$Surname','$Email','$Contact','$Passsword','$Confirm_password')";
 
//Selecting values from the datadase
if ($conn->query($sql)=== TRUE) {
 header("Location:Home.php");
 exit();
 } 
 else {
 echo "Error:" . $sql . "<br>" .$conn->error;
 }
}
?>





