<?php
    $cnx = new PDO('mysql:host=localhost;dbname=dsi21_g1_2019','root','');
    $rep = $cnx->query('SELECT * FROM students');
    ?>