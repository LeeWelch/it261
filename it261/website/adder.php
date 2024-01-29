<?php     //adder-wrong.php

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$mytotal = $num1 + $num2;
echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
echo '<p> and the answer is <br>
<style="color:red;">'.$mytotal.'! </p>';
echo '<p><a href="">Reset page</a></p>';
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> <form action="" method="post">
<label>Enter the first number:</label><input type="number" name="num1"><br>
<label>Enter the second number:</label><input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> </form>

 


</body>
</html>

    <!-- Line 6: $num2 and Total in $myTotal are capitalized, changed to lowercase -->
    <!-- Line 6: - before the = , removed -->
    <!-- Line 7: Mix of double quotes and single quotes, changed all to single quotes-->
    <!-- Line 7: Missing single quote before .$num2. , added-->
    <!-- Line 7: Extra double quote after '.$num2.' , removed -->
    <!-- Line 7: No closing </h2> tag, added -->
    <!-- Line 9: Double quotes need to be changed to single, fixed except for the quotes inside the style tag-->
    <!-- Line 9: $myTotal needs to have the correct '..' surrounding it, and to be lowercase, added . and made sure quotes are all single, fixed capitalization-->
    <!-- Line 9: Closing </p> tag is after the closing single quote, moved the closing quote -->
    <!-- Line 10: Missing closing </p> tag and semicolon, added both-->
    <!-- Line 11: Missing closing ?> php tag, added -->
    <!-- Line 12: Missing DOCTYPE declaration and language, added both -->
    <!-- Line 14: Missing meta tags, added -->
    <!-- Line 23: Unnecessary \ in the opening form tag, removed -->
    <!-- Line 23: Missing method in form tag, added and set to post-->
    <!-- Line 24: Missing opening <label> tag, added -->
    <!-- Line 24: num1 capitalized, changed to lowercase -->
    <!-- Line 24, 25: Input type is set to text on both lines, changed to number-->
    <!-- Line 25: Closing </label> tag is where the opening should be and there is no closing, fixed-->
    <!-- Line 26: Missing quote after "Add Em!! , added -->
    <!-- Line 32: Unnecessary characters after </html> , removed -->
