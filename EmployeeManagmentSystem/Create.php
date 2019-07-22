<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Create.php</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  .card_create {
    margin: auto;
    margin: 5%;
    padding-left: 2%;
    padding-right: 2%;
    padding-bottom: 2%;
  }

  body {
    background-color: lightgrey;
  }
</style>




<body>
<?php require_once 'uu.php'?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Digital Academy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

  <div class="card card_create">
    <h2>Create Account</h2>
    <form method="POST" action=" "> 
      <div class="form-group">
        <label>Enter first name</label>
        <input type="text" class="form-control" id="Username" name="Username" placeholder="First Name" >
      </div>
      <div class="form-group">
        <label>Enter second name</label>
        <input type="text" class="form-control" id="Surname"  name="Surname" placeholder="Second Name">
      </div>
      <div class="form-group">
        <label>Enter yout email address</label>
        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email">
      </div>
      <div class="form-group">
        <label>Enter your cellphone numbers</label>
        <input type="text" class="form-control" id="Contact" name="Contact" placeholder="Contact numbers">
      </div>
      <div class="form-group">
        <label>Generate a new password</label>
        <input type="password" class="form-control" id="Pass"  name="Pass" placeholder="Password">
      </div>
      <div class="form-group">
        <label>Confirm password</label>
        <input type="password" class="form-control" id="Confirm_password" name="Confirm_password" placeholder="Re-enter Password">
      </div>
      <button type="submit" class="btn btn-primary" name="create" id="create">Create</button>
    </form>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>