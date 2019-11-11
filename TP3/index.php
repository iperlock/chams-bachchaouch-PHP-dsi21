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
<table border="1" class="table table-striped table-dark">
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>EMAIL</th>
            <th>PHONE NUMBER</th>
            <th>OPERATIONS</th>
            <form method="POST" action="create.php">
            <div class="jumbotron">
            <button type="submit"class="btn btn-primary" name="create" value="create" id="create">NEW STUDENT</button>
            </div>
            </form>
            <?php
            include 'dbconnexion.php';
            while($data = $rep->fetch()){
                echo '<tr>';
                echo '<td>' .$data['id'].'</td>';
                echo '<td>' .$data['firstname'].'</td>';
                echo '<td>' .$data['lastname'].'</td>';
                echo '<td>' .$data['email'].'</td>';
                echo '<td>' .$data['phone'].'</td>';
                echo '<td><a href="edit.php?id='.$data['id'].'">EDIT</a><br><a href="delete.php?id='.$data['id'].'">DELETE</a></td>';
                echo '</tr>';
            }
            ?>
    </table>
</body>
</html>



