<?php
    require('../reusable/connection.php');
    if(isset($_GET['deleteSchool'])){
        $id = $_GET['id'];
        $query = "DELETE FROM schools WHERE `id` = '$id'";
        $school = mysqli_query($connect, $query);

        if($school){
            header('Location: ../index.php');
        }else{
            echo "failed: " . mysqli_error($connect);
        }

    }else{
        echo "not authorized";
    }