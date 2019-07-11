<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home.html</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border-color:grey;
}

td, th {
  border: 1px solid rgb(149, 147, 147);
  text-align: left;
  padding: 8px;
}

tr:nth-child {
  background-color:black;
}  

body{
    background-color:lightgrey;
}

.btn-sm-first{
    float: right;
}
    
    </style>

</head>
<body>
<!-- javascript file -->
<script type="text/javascript" src="javascript.js"></script>



<?php
    $mysqli = new mysqli('localhost','root','','EmployeeManagementSystem') or die (mysqli_error($mysqli));

    $result = $mysqli->query("SELECT * FROM  Registration") or die($mysqli->error);
    ?>





    <!--Nav Bar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
               <a class="navbar-brand" style="color:white;">Digital Academy</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>


<!--The Table With Employees Personal Information-->
<td> <button style="margin-top:1%;margin-right:1%"; type="button"  class="btn btn-sm-first btn-outline-info">Add Employee</button>
<h2 style="margin-top: 5%";>The Digital Academy Employees</h2>
<table class="table table-hover">


<thead>
  <tr>
    <th>Registration_id</th>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Home Address</th>
    <th>Contact Numbers</th>
    <th>Email Address</th>
    <th>Gender</th>
    <th>Position</th>
    <th>Next Of Keen</th>
  </tr>
</thead>


<?php while ($row=$result->fetch_assoc()):?>
<tr   class="delete_mem<?php echo $id ?>">
<td><?php echo $row['Registration_id'];?>
<td><?php echo $row['First_Name'];?></td>
<td><?php echo $row['Second_Name'];?></td>
<td><?php echo $row['Home_Address'];?></td>
<td><?php echo $row['Contact_Numbers'];?></td>
<td><?php echo $row['Email_Address'];?></td>
<td><?php echo $row['Gender'];?></td>
<td><?php echo $row['Job_Position'];?></td>
<td><?php echo $row['Family_Member'];?></td>


<td>

<a href="uu.php?Delete=<?php echo $row['Registration_id'];?>"
 class="btn btn-sm-delete btn-outline-danger" name="Delete" >Delete</a>
<td> <button type="button" class="btn btn-sm btn-outline-success">Edit</button></td>
</td>
</tr>
<?php endwhile?>
</table>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
