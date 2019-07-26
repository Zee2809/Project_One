<?php
include 'Login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EmployeeManagementSystem</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>

.Card-Form{
    background-color: rgba(128, 128, 128, 0.527);
    text-align: center;
    width: 30%;
    margin:auto;
    margin-top:15%;
    border-color: white; 
    padding-bottom:2%;
    border-radius: 10px;
}
.Spacing{
    padding-left: 10%;
    padding-right:10%;
}

body{
    background-image: url("http://hdblackwallpaper.com/wallpaper/2015/12/windows-10-desktop-is-black-2-high-resolution-wallpaper.jpg");
    background-size: 100%;
    color:Black;
}




</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Digital Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>


      <!--Form-->
      <div class="Card Card-Form">
      <form action="Login.php" method="POST" >
      <h1>Log Into Your Account</h1>
      <input type="text" name="User" id="User" placeholder="Username" required><br><br>
      <input type="text" name="Email" id="Email" placeholder="Email" required><br><br>
      <input type="password"  name="Pass" id="Pass" placeholder="Password" required><br><br>
      <input type="submit" style="background-color:grey;  border-radius: 8px;" name = "Login" value="Login"><br><br>



      <a href="ForgotPassword.html" class="Spacing">Forgot Password</a>
      <a href="Create.php" class=create>Create New Account<a>
    
     </form>
      </div>
   



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
