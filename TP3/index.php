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
    <div class="container-fluid">
        <div class="jumbotron mt-3">
            <h1>Students list DSI21 ISET Bizerte.</h1>
        </div>
        <?php
    if ((!empty($_GET['notif']))){ 
    ?>
<div class="container">
   <div class="alert alert-success alert-dismissible fade show" role="alert">
  <?php if($_GET['notif']=='new'){echo 'NEW STUDENT ADDED';}
  elseif(($_GET['notif']=='update')){echo "STUDENT EDITED";}
  elseif(($_GET['notif']=='delete')){echo "STUDENT DELETED";} ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
 <?php } ?>

<table border="1" class="table table-striped table-dark">
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>EMAIL</th>
            <th>PHONE NUMBER</th>
            <th>OPERATIONS</th>
        
            <?php
            include 'dbconnexion.php';
            while($data = $rep->fetch()){
                echo '<tr>';
                echo '<td>' .$data['id'].'</td>';
                echo '<td>' .$data['firstname'].'</td>';
                echo '<td>' .$data['lastname'].'</td>';
                echo '<td>' .$data['email'].'</td>';
                echo '<td>' .$data['phone'].'</td>';
                echo '<td><a class="btn btn-primary btn-lg btn-block" href="edit.php?id='.$data['id'].'">EDIT</a><a class="btn btn-primary btn-lg btn-block" href="delete.php?id='.$data['id'].'">DELETE</a></td>';
                echo '</tr>';
            }
            ?>
    </table>
    <form method="POST" action="create.php">
          
            <button type="submit"class="btn btn-primary btn-lg btn-block" name="create" value="create" id="create">NEW STUDENT</button>
            </form>
        </div>
        <br>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



