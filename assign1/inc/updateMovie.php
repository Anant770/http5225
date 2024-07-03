<?php
require('../reusable/connection.php');
if (isset($_POST['updateMovie'])) {
    //echo print_r($_POST);
    $rank = $_POST['rank'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];
    $Metascore = $_POST['Metascore'];

    $query = "UPDATE movies SET 
    `name` = '" . mysqli_real_escape_string($connect, $name) . "',
    `description` = '" . mysqli_real_escape_string($connect, $description) . "',
    `rating` = '" . mysqli_real_escape_string($connect, $rating) . "',
    `Metascore` = '" . mysqli_real_escape_string($connect, $Metascore) . "' 
    WHERE `rank` = " . mysqli_real_escape_string($connect, $rank);


    //echo $query;
    $movie = mysqli_query($connect, $query);
    if ($movie) {
        set_message('movie was updated successfully!', 'success');
        header("Location: ../index.php");
    } else {
        set_message('movie was not updates', 'danger');
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "you should not be here";
}
