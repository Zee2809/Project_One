<?php


 if(isset($_GET['Registration_id'])){
  include 'connect.php';   
    
    $id= $_GET['Registration_id'];
    //deleting the row from table
    $sql = "delete from Registration where Registration_id = '$id' ";
 
    if (mysqli_query($conn,$sql)){
        echo "Record deleted successfully";
         header("Location:Home.php");
        // exit();
 }
}
 
?> 
