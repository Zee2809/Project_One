<?php
 include "connect.php";


 if(isset($_POST['Update'])){
      $id=$_POST['New_name'];
 } $sql= "INSERT INTO Registration (Registration_id,New_name) 
     VALUES ('$Registration_id','$New_name')";
 
 
// //Selecting values from the datadase
// if ($conn->query($sql) === TRUE) {
//   header("Location:Home.php");
//        exit(); 
//  } 
 
//  else {
//  echo "Error:" . $sql . "<br>" .$conn->error;
//  }}



?>
<!-- // include "connect.php";

// if(isset($_GET['Edit'])){
//      $id=$_POST['Registration_id'];
//      $First_Name=($_POST['First_Name']);
//      $Second_Name=($_POST['Second_Name']);
//      $Home_Address=($_POST['Home_Address']);
//      $Contact_Numbers=($_POST['Contact_Numbers']);
//      $Email_Address=($_POST['Email_Address']);
//      $Gender=($_POST['Gender']);
//      $Job_Position=($_POST['Job_Position']);
//      $Family_Member=($_POST['Family_Member']);
 

// $sql = "UPDATE Registration SET First_Name = '$First_Name' , Second_Name = '$Second_Name' , Home_Address = '$Home_Address' , Contact_Numbers = '$Contact_Numbers' ,Email_Address = '$Email_Address' , Gender = '$Gender' ,   Job_Position = '$Job_Position', Family_Member='$Family_Member' WHERE Registration_id='$id' ";

// $query = myqsli_query($conn,$sql);
//  header('location:Home.php');



// $id=$_GET['Registration_id'];
// $sql2="SELECT * FROM Registration WHERE Registration_id= $id";

// $result=mysqli_query($conn,$sql2);

// while($row= mysqli_fetch_array($result))
// {
//      $First_Name=$row['First_Name'];
//      $Second_Name=$row['Second_Name'];
//      $Home_Address=$row['Home_Address'];
//      $Contact_Numbers=$row['Contact_Numbers'];
//      $Email_Address=$row['Email_Address'];
//      $Gender=$row['Gender'];
//      $Job_Position=$row['Job_Position'];
//      $Family_Member=$row['Family_Member'];
// }

// }



include "connect.php";

// // declaring variables
//  if (isset($_POST['Update'])){
//      $Registration=($_POST['Registration_id']);
//      $First_Name=($_POST['First_Name']);
//      $Second_Name=($_POST['Second_Name']);
//      $Home_Address=($_POST['Home_Address']);
//      $Contact_Numbers=($_POST['Contact_Numbers']);
//      $Email_Address=($_POST['Email_Address']);
//      $Gender=($_POST['Gender']);
//      $Job_Position=($_POST['Job_Position']);
//      $Family_Member=($_POST['Family_Member']);


//  //Inserting values into database
//  $sql= "INSERT INTO Registration (Registration_id,First_Name,Second_Name,Home_Address,Contact_Numbers,Email_Address,Gender,Job_Position,Family_Member) 
//         VALUES ('$Registration_id','$First_Name','$Second_Name','$Home_Address','$Contact_Numbers','$Email_Address','$Gender','$Job_Position','$Family_Member')";
 
 
// //Selecting values from the datadase
// if ($conn->query($sql) === TRUE) {
//   header("Location:Home.php");
//        exit(); 
//  } 
 
//  else {
//  echo "Error:" . $sql . "<br>" .$conn->error;
//  }}
  -->









