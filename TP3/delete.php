<?php
include 'dbconnexion.php';
$ID =$_GET['id'];
$cnx->exec("DELETE FROM students WHERE id='$ID'");
header('location:index.php?notif=delete');
?>