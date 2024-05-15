<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo 'hello'; ?>
    <?php echo '<h1> welcome to http 5225 </h1>' ?>
    <?php echo  '<p> we will\'S learn PHP in this class. </p>' ?>
    <p>
        things we will learn in this class:
    </p>    
    <?php
    echo'<ul>
        <li>PHP</li>
        <li>mysql</li>
        <li>laravel</li>
    </ul>'; ?>
    <?php 
        echo '<img src="http://placehold.co/600x400" alt="Placeholder image">';
    ?>
    <?php
    $fname = 'Anant';
    $lname = 'Chauhan';
    $name = array('Anant', 'Chauhan');
    ?>
    <?php 
        echo '<br>';
        echo 'Hello ' . $fname . ' ' . $lname;
    ?>
</body>
</html>