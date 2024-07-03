<?php
require('../reusable/connection.php');
if (isset($_POST['updateSchool'])) {
    $id = $_POST['id'];
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    $query = "UPDATE 'schools' SET 'School Name' = '$schoolName' , 'School Level'= '$schoolLevel', 'Phone' = '$phone','Email' = '$email' WHERE 'id'='$id'";

    $school = mysqli_query($connect, $query);

    if ($school) {
        set_message('School was updated successfully!', 'success');
        header("location: ../index.php");
    } else {
        set_message('School was not updates', 'danger');
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "you should not be here";
}