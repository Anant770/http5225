<?php
//print_r($_POST);
//Array ( [schoolName] => test [schoolLevel] => test [phone] => 437-988-6947 [email] => anantchauhan003@gmail.com )
if (isset($_POST['addSchool'])) {
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    //connection String
    include('../reusable/connection.php');

    $query = "INSERT INTO schools (`School Name`,`School Level`,`Phone`,`Email`) 
    VALUES('" . mysqli_real_escape_string($connect, $schoolName) . "',
    '" . mysqli_real_escape_string($connect, $schoolLevel) . "',
    '" . mysqli_real_escape_string($connect, $phone) . "',
    '" . mysqli_real_escape_string($connect, $email) . "')";

    $school = mysqli_query($connect, $query);

    if ($school) {
        header("location: ../index.php");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "you should not be here";
}
?>
