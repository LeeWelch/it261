<?php
// my variables

// don't forget that a variable is merely a container for data 


$name = "Lee"; // Lee is a string
$name = 'Stacy'; //last variable value that's declared is the one that will display
echo $name;

$body_temp = 98; // 98 is an integer
$body_temp_new = 98.6; // 98.6 is a float
echo '<br>';
echo "<br>";    // ctrl / moves line into a comment tag 
echo $body_temp;
echo "<br>";
echo $body_temp_new;
echo "<br>";
echo "My name is $name!";
echo "<br>";
echo 'My name is $name!'; 
echo "<br>";
echo 'My name is '.$name.'!'; //single quotes needs '. .' around variable
echo "<br>";
echo 'The normal body temperature for a human being is '.$body_temp_new.'';
echo "<br>";
$name = 'Sig';
echo $name;
echo "<br>";
$x = 20;
$y = 5;
$z = $x + $y; // Using the term "assigned" vs equals 
echo $z;
echo "<br>";
$z = $x * $y;
echo $z;
echo "<br>";
$z = $x / $y;
echo $z;

echo "<br>";
$first_name = 'Lee';
$last_name = 'W';
echo $first_name." ".$last_name;
echo $first_name.' '.$last_name;

echo "<br>";
echo "My full name is $first_name $last_name";
echo "<br>";
echo 'My full name is '.$first_name.' '.$last_name.' ';



