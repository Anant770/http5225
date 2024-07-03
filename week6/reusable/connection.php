<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'public_school');
    
    if (!$connect) {
        die("Connection Failed: " . mysqli_connect_error());
    }
?>