<?php
include('functions.php');
if (isset($_POST['addMovie'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];
    $Metascore = $_POST['Metascore'];

    //connection String
    include('../reusable/connection.php');

    $query = "INSERT INTO movies (`name`,`description`,`rating`,`Metascore`) 
    VALUES('" . mysqli_real_escape_string($connect, $name) . "',
    '" . mysqli_real_escape_string($connect, $description) . "',
    '" . mysqli_real_escape_string($connect, $rating) . "',
    '" . mysqli_real_escape_string($connect, $Metascore) . "')";

    $movie = mysqli_query($connect, $query);

    if ($movie) {
        set_message('movie was added successfully!', 'success');
        header("location: ../index.php");
    } else {
        set_message('movie was not added', 'danger');
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "you should not be here";
}
?>
