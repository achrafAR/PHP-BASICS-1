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

    echo "Area is ".calculateArea(5,3); echo "<br>";   echo "<br>";   echo "<br>";  



    echo "<h1>Step 7</h1>";

    $birth_year = 1989;
    $current_year = 2023;

    if($current_year-$birth_year > 18){
        echo "You can drive";
    }
    else{
        echo "You still a kid, go and play GTA";
    }echo "<br>";   echo "<br>";   echo "<br>";  



    echo "<h1>Step 8</h1>";

    $grocery = array("Eggs","Milk","Cheese","Water Pack","Tissues","Watermelon");
    echo "Hello sir, do you have $grocery[0], $grocery[1] and $grocery[2]? Also if you sell fruits can I find a $grocery[5]";
    echo "<br>";

    
    $grocery_list = array(
    'eggs' => array('balade', 'mazere3'),
    'milk' => array('Fresh', 'Taanayel'),
    'water-pack' => array('Tanoureen', 'Reem')
);

echo "Hey Sir, Please I need 1 pack of {$grocery_list['eggs'][0]} eggs and 3 {$grocery_list['water-pack'][1]} Water Pack.";


echo "<h1>Step 9</h1>";

$name = "ACHRAF";
var_dump($name);
echo "<br>";
var_dump("rachini");








?>
</body>
</html>






