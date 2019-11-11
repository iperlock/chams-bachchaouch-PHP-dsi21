<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <?php include 'dbconnexion.php';
 $data = $rep->fetch(); ?>
<div class="container">
<div class="row">
<div class="col-md-8">
<form name="contact-form"  method="POST" action="update.php" id="contact-form">
<div class="form-group">
<label for="Name">ID</label>
<input type="number" class="form-control" name="id" placeholder="<?php  echo $data['id'] ?>" required>
</div>
<div class="form-group">
<label for="Name">First name</label>
<input type="text" class="form-control" name="firstname" placeholder="<?php  echo $data['firstname']?>" required>
</div>
<div class="form-group">
<label for="Name">Last name</label>
<input type="text" class="form-control" name="lastname" placeholder="<?php  echo $data['lastname']?>" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" class="form-control" name="email" placeholder="<?php  echo $data['email']?>" required>
</div>
<div class="form-group">
<label for="Phone">Phone</label>
<input type="text" class="form-control" name="phone" placeholder="<?php  echo $data['phone']?>" required>
</div>
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
</form>
</div>
</body>
</html>