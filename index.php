<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Problem Solving</title>
    <link rel="icon" href="images/php-logo.png">
</head>
<body>

<form action="index.php" method="post">

<input type="text" name="name">
<input type="tel" name="phoneNumber">
<input type="submit" value="Submit">


</form>

    <?php
        $name  = $_POST["name"];
        $number  = $_POST["phoneNumber"];

    echo $name;
    echo "<br>";
    echo $number;

    ?>


</body>
</html>