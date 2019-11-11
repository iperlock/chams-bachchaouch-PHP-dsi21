<?php
include 'dbconnexion.php';
$ID =$_GET['id'];
$cnx->exec("DELETE FROM students WHERE id='$ID'");
echo"STUDENT DELETED";
?>