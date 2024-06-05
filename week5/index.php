<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php sql</title>
</head>
<body>
    <?php
        $connect = mysqli_connect(
        'localhost',
        'root',
        'root',
        'http5225');

        if(!$connect){
            echo 'Error code: ' . mysqli_connect_errno();
            echo 'Error code: ' . mysqli_connect_error();
            exit;
        }
        $query = 'SELECT `Name` , `Hex` FROM colors';
        $result = mysqli_query($connect, $query);

        if(!$result){
            echo 'error message ' . mysqli_error($connect);
            exit;
        }
        else{
            echo 'the querry found ' . mysqli_num_rows($result);
        }
        echo "<table>";
        foreach($result as $results){
            $name = $results['Name'];
            $hex = $results['Hex'];
            echo "<tr align='center'>";
            echo "<th>$name</th>";
            echo "<th>$hex</th>";
        }
        echo "</table>";

    ?>

</body>
</html>