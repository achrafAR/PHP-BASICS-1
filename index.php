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

    echo "<h1>basic1/Step 1-2-3</h1>";
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


    echo "<h1>basic1/Step 4</h1>";
    $name = "achraf";
    $position = "web developer";
    $github = "https://github.com/achrafAR";
    echo "Hello, I'm ".$name.", I'm a ".$position." please check my github link ".$github_url."";
    echo "<br>";
    echo "Hello, I'm $name, I'm a $position please check my github link $github_url";
    echo "<br>";
    echo 'Hello, I\'m '.$name.', I\'m a '.$position.' please check my github link '.$github_url.'';    echo "<br>";    echo "<br>";     echo "<br>";



    

    echo "<h1>basic1/Step 5</h1>";
    $course_name = "MERN Stack";
    $enrolled_students = 20;
    $price = 12.33;
    $on_discount = "Yes / No";

    echo "Course title: "  .$course_name.  "<br>";
    echo "Enrolled Students: " .$enrolled_students. "<br>";
    echo "Course price: " . $price . " $ USD<br>";
    echo "Course on discount: " . $on_discount . "<br>";     echo "<br>";     echo "<br>";


    echo "<h1>basic1/Step 6</h1>";

    function calculateArea($height,$width){
        return $height*$width;

    }

    echo "Area is ".calculateArea(5,3); echo "<br>";   echo "<br>";   echo "<br>";  



    echo "<h1>basic1/Step 7</h1>";

    $birth_year = 1989;
    $current_year = 2023;

    if($current_year-$birth_year > 18){
        echo "You can drive";
    }
    else{
        echo "You still a kid, go and play GTA";
    }echo "<br>";   echo "<br>";   echo "<br>";  



    echo "<h1>basic1/Step 8</h1>";

    $grocery = array("Eggs","Milk","Cheese","Water Pack","Tissues","Watermelon");
    echo "Hello sir, do you have $grocery[0], $grocery[1] and $grocery[2]? Also if you sell fruits can I find a $grocery[5]";
    echo "<br>";

    
    $grocery_list = array(
    'eggs' => array('balade', 'mazere3'),
    'milk' => array('Fresh', 'Taanayel'),
    'water-pack' => array('Tanoureen', 'Reem')
);

echo "Hey Sir, Please I need 1 pack of {$grocery_list['eggs'][0]} eggs and 3 {$grocery_list['water-pack'][1]} Water Pack.";


echo "<h1>basic1/Step 9</h1>";

$name = "ACHRAF";
var_dump($name);
echo "<br>";
var_dump("rachini");


echo "<h1>basic2/step1</h1>";

echo "Tomorrow I 'll learn PHP global variables.
This is a bad command: sudo rm -rf /";echo"<br>";echo"<br>";echo"<br>";



echo "<h1>basic2/step2</h1>";
function greaterFn($num){
    if($num>30){
        echo "$num is greater than 30";
    }else if ($num>20){
        echo "$num is greater than 20";
    }else if ($num>10){
        echo "$num is greater than 10";
    }else{
        echo "$num is less than 10";
    }
}
greaterFn(8);echo"<br>";echo"<br>";echo"<br>";

echo "<h1>basic2/step3</h1>";
$var1 = 32;
$var2 = 45;
$var3 = $var1;
$var1 = $var2;
$var2 = $var3;
echo $var1;echo"<br>";
echo $var2;echo"<br>";echo"<br>";echo"<br>";


echo "<h1>basic2/step4</h1>";
function convert($number){
    switch ($number){
case "one" : echo "1";
break;
case "two" : echo "2";
break;
case "three": echo "3";
break;
default : echo "your number is wrong";
    
    break;
    }
};
convert ("two");echo"<br>";echo"<br>";echo"<br>";

echo "<h1>basic2/step5</h1>";

function sumDigit($number){
    $sum = 0;
    while ($number != 0){
        $sum = $number%10 + $sum;
        $number = $number/10;
    }
    return $sum;


}echo sumDigit(54321);echo"<br>";echo"<br>";echo"<br>";



echo "<h1>basic2/step7</h1>";
    $input = "I love Python and PHP";
    $input = str_replace("Python","wait",$input) ;
    $input = str_replace("PHP","Python",$input);
    $output = str_replace("wait","PHP",$input);
    echo $output;echo"<br>";echo"<br>";echo"<br>";


echo "<h1>basic2/step8</h1>";
    function isPower($n){
        if($n==0){
            return false;
        }
        while ($n != 1){
            $n = $n/2;

            if($n%2 != 0 && $n !=1){
                return false;
                
            }
            return true;

        }
    }

    $n=16;

    if (isPower($n)) {
        echo $n . " is a power of 2";
    } else {
        echo $n . " is not a power of 2";
    }echo"<br>";echo"<br>";echo"<br>";




echo "<h1>basic2/step9</h1>";
    function square($num){
        $square = sqrt($num);
        return $square;
    }

    echo square(16);echo"<br>";echo"<br>";echo"<br>";


echo "<h1>basic2/step10</h1>";
    function palindrome($string){
        if($string==strrev($string)){
            return true;
        }else{
            return false;
        }
    }

    $string = "madam";
    if(palindrome($string)){
        echo "its palindrome";
    }else{
        echo "its not palindrome";
    }echo"<br>";echo"<br>";echo"<br>";


echo "<h1>basic2/step11</h1>";
    function isPrime($number){

        if($number == 1){
            return true;
        }

        for($i=2;$i<=$number/2;$i++){
            if($number%$i == 0){
                return false;
            }

        }
        return true;


    }

    $number = 11;
    if (isPrime($number)){
        echo "$number is prime";
    }else {
        echo "$number is not prime";
    }


echo"<br>";echo"<br>";echo"<br>";


echo "<h1>basic3/step1</h1>";

$i=1;
$x=7;

while($i<=$x){

for($j=1;$j<=$i;$j++){
    echo '*';
}
echo "<br>";
$i++;

}echo"<br>";echo"<br>";
echo "<h1>basic3/step2</h1>";

    $x=6;
    $i=2;
    $fact=1;
    while($i<=$x){
        $fact=$i*$fact;
        $i++;
    }

    echo $fact;


echo"<br>";echo"<br>";echo"<br>";

echo "<h1>basic3/step3</h1>";
    $text = "i want to go to the beach";
    $array = explode(" ",$text);
    $c=count($array);
    $i=0;
    $j=0;
    while($i<$c){
        if ($array[$i]=="to"){
            $j++;
        }
        $i++;
    }
    echo "$j";
    echo"<br>";echo"<br>";echo"<br>";


    echo "<h1>basic3/step4</h1>";

        $num=12345;
        $sum=0;
        $z=strlen($num);
        for ($i=0;$i<$z;$i++){
            $sum = $sum + $num%10;
            $num=$num/10;
        }
        echo $sum;


    echo"<br>";echo"<br>";echo"<br>";


    echo "<h1>basic3/forloop/ex3</h1>";
    $x=5;
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    for($i=1;$i<=5;$i++){
        for($j=5;$j>=$i;$j--){
            echo "*";
        }
        echo "<br>";
    }

    echo"<br>";echo"<br>";echo"<br>";












?>
</body>
</html>






