<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>
    <?php
        $hours = rand(1,24);
        echo $hours , "<br>";
        if ($hours >= 6 && $hours < 12){
            echo "Good morning";
        }
        elseif ($hours >= 12 && $hours < 18){
            echo "good afternoon";
        }
        elseif ($hours >= 18 && $hours < 21){
            echo "good evening";
        }
        elseif (($hours >= 21 && $hours <= 24) || ($hours >0 && $hours < 6)) {
            echo "good night";
        }

        echo "<br>";
        $num = rand(1,100);
        echo $num, "<br>";
        if ($num % 3 == 0){
            echo "fizz";
        }
        elseif ($num % 5 == 0){
            echo "buzz";
        }
        elseif (($num % 5 == 0) && ($num % 3 == 0)){
            echo "fizzbuzz";
        }
        elseif(($num % 3 != 0) || ($num % 5 !=0)) {
            echo "magic number";
        }
    ?>
</body>
</html>