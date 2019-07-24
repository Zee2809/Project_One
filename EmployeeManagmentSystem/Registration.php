<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
label{
    width:240px;
    display: inline-block;
    text-align: left;
    padding-left: 3%;
}

.btn-success{
float: right;
margin-right: 3%;
}

.Card-Registration{
    width:89%;
    background-color:rgb(219, 216, 216);
    margin:auto;
    padding-bottom: 5%;
    text-align: left;
}

.image{
    float: right;
    width: 10%;
    height: 10%;
}

body{
    background-color:lightslategray;
}
.H4{
    padding-left:3%;
    padding-bottom:5%;
}
</style>

<!-- javascript file  -->
<script type="text/javascript" src="javascript.js"></script>


</head>


<body>
<?php require_once 'uu.php'?>

    <!--Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Digital Academy</a>
        <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="What are you looking for?" aria-label="Search">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>


<div class="Card Card-Registration" >
        <img class="image" src="https://cdn4.iconfinder.com/data/icons/big-data/512/user_info-512.png" alt="person,profile,user icon" >

    <form class="Form-Align" method="POST" action=" " >

    <h4 class="H4">New Employee's Personal Details</h4>
    <label>First Name:</label>
    <input text="text" id="First_Name" name="First_Name" placeholder="Employee's name" required><br><br>

    <label>Second Name:</label>
    <input text="text" id="Second_Name" name="Second_Name" placeholder="Employees Surname"  required><br><br>

    <label> Home Address:</label>
    <input text="text" id="Home_Address" name="Home_Address" placeholder="Employees Address" required><br><br>

    <label>Contact Numbers:</label>
    <input text="text" id="Contact_Numbers" name="Contact_Numbers" placeholder="Employees contact" required><br><br>

    <label>Email Address:</label>
    <input text="text" id="Email_Address" name="Email_Address" placeholder="Employees Email" required><br><br>

    <label>Gender:</label>
    <input text="text" id="Gender" name="Gender" placeholder="Gender" required><br><br>

    <label>Job Position:</label>
    <input text="text" id="Job_Position" name="Job_Position" placeholder="Job Position" required><br><br>

    <label>Next Of Keen:</label>
    <input text="text" id="Family_Member" name="Family_Member" placeholder="Next Of Keen" required><br><br>
   
    <button type="submit" id="Save_Employee" name="Save_Employee" onclick= "Save_Employee_Click()" class="btn btn-success">Add Employee</button>
</form>
</div>     


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>