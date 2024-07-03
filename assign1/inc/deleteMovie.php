<?php
include('functions.php');
    require('../reusable/connection.php');
    if(isset($_GET['deleteMovie'])){
        $rank = $_GET['rank'];
        $query = "DELETE FROM movies WHERE `rank` = '$rank'";
        $movie = mysqli_query($connect, $query);

        if($movie){
            set_message('Movie was deleted sucessfully','danger');
            header('Location: ../index.php');
        }else{
            echo "failed: " . mysqli_error($connect);
        }

    }else{
        echo "not authorized";
    }