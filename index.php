<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    echo "<h1>Step 1</h1>";
    $name = "Achraf";
    $email = "achraf.alrachini@gmail.com";
    echo "My name is $name and my email is $email";
    $height = 180;
    $width = 50;
    $area = $width*$height;
    echo "<br>";
    echo $area;
    echo "<br>";    echo "<br>";
    echo "<br>";


    echo "<h1>Step 2</h1>";
    $name = "achraf";
    $position = "web developer";
    $github = "https://github.com/achrafAR";
    echo "Hello, I'm ".$name.", I'm a ".$position." please check my github link ".$github_url."";
    echo "<br>";
    echo "Hello, I'm $name, I'm a $position please check my github link $github_url";
    echo "<br>";
    echo 'Hello, I\'m '.$name.', I\'m a '.$position.' please check my github link '.$github_url.'';    echo "<br>";    echo "<br>";     echo "<br>";



    

    echo "<h1>Step 5</h1>";
    $course_name = "MERN Stack";
    $enrolled_students = 20;
    $price = 12.33;
    $on_discount = "Yes / No";

    echo "Course title: "  .$course_name.  "<br>";
    echo "Enrolled Students: " .$enrolled_students. "<br>";
    echo "Course price: " . $price . " $ USD<br>";
    echo "Course on discount: " . $on_discount . "<br>";     echo "<br>";     echo "<br>";


    echo "<h1>Step 6</h1>";

    function calculateArea($height,$width){
        return $height*$width;

    }

    echo "Area is ".calculateArea(5,3);








?>
</body>
</html>






