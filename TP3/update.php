<?php
include 'dbconnexion.php';
$ID =$_POST['id'];
$FirstName =$_POST['firstname'];
$LastName =$_POST['lastname'];
$Email =$_POST['email'];
$Phone =$_POST['phone'];
$cnx->exec("UPDATE students SET id='$ID',firstname='$FirstName',lastname='$LastName',email='$Email',phone='$Phone' WHERE id='$ID'");
echo"Student modified";
?>