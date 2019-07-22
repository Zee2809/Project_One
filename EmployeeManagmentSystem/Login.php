<?php
session_start();

if(isset($_POST['Login'])){
include 'connect.php';


//creating variables from index.php
$Username_Email=$_POST['User'];
$Password=$_POST['Pass'];

//Enables the user to be able to input their information
$User =($_POST['User']);
$Pass = ($_POST['Pass']);

//checking if empty
if(empty ($User)|| empty($Pass)){
 header("Location:Index.php");
       exit();
}//Creating the select statement
else{
   $sql="select * from Login where Password = '$Pass'";
   $result=mysqli_query($conn,$sql);
   $resultcheck = mysqli_num_rows($result);
   if($resultcheck == 1 ){
     header("Location:Home.php");
       exit(); 
}else{
    header("locaton.href= Index.php");
   echo "<script>alert('Incorrect password');</script>";
   exit(); 
}
}
}
?>



