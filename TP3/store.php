<?php
include 'dbconnexion.php';
$ID =$_POST['id'];
$FirstName =$_POST['firstname'];
$LastName =$_POST['lastname'];
$Email =$_POST['email'];
$Phone =$_POST['phone'];
$cnx->exec("INSERT INTO  students(id,firstname,lastname,email,phone) VALUES ('$ID','$FirstName','$LastName','$Email','$Phone')");
echo"STUDENT ADDED";
?>