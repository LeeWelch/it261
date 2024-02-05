<!-- If you are driving 300 miles
And you typically drive 60 miles per hour
And your car is efficient at 30 miles per gallon
And you found gas at $4.00 per gallon
And, you only would like to drive 2 hours per day

How many gallons of gas will you need for this trip?  300 divided by 30
How much will it cost you?  300 divided by 30 times 4
How many hours will you be driving? 300 divided by 60
How many days will you be driving?  300 divided by 60 divided by 2
--> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculating Form</title>
    <link href="css/calculator.css" type="text/css" rel="stylesheet">

</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>NAME</label>
<input type="text" name ="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])  ;?>">

<label>Total Miles Driving?</label>
<input type="number" name ="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles'])  ;?>">

<label>How fast do you typically drive?</label>
<input type="number" name ="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed'])  ;?>">

<label>How many hours per day do you plan on driving?</label>
<input type="number" name ="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours'])  ;?>">

<label>Price of gas</label>
<!--radio button that has an additional attribute of VALUE -->
<ul>
<li><input type="radio" name ="gas" value="3.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.00) echo 'checked="checked" ' ;?>> $3.00</li>
<li><input type="radio" name ="gas" value="3.50" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.50) echo 'checked="checked" ' ;?>> $3.50</li>
<li><input type="radio" name ="gas" value="4.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 4.00) echo 'checked="checked" ' ;?>> $4.00</li>
</ul>

<label>Fuel Efficiency</label>
<select name="mpg">
    <option value="" <?php if(isset($_POST['mpg']) &&  is_null($_POST['mpg'])) echo 'selected = "unselected" ';?>>Select one!</option>
    <option value="10" <?php if(isset($_POST['mpg'] ) && $_POST['mpg'] == '10') echo 'selected = "selected" ';?> >Very Bad @ 10mpg</option>
    <option value="20" <?php if(isset($_POST['mpg'] ) && $_POST['mpg'] == '20') echo 'selected = "selected" ';?> >Not Great @ 20mpg</option>
    <option value="30" <?php if(isset($_POST['mpg'] ) && $_POST['mpg'] == '30') echo 'selected = "selected" ';?>>Good @ 30mpg</option>
    <option value="40" <?php if(isset($_POST['mpg'] ) && $_POST['mpg'] == '40') echo 'selected = "selected" ';?>>Great @ 40mpg</option>
</select>

<input type="submit" value="Calculate">

<p><a href="">Reset it!</a></p>




</fieldset>
</form>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])){
    echo '<p class="error">Please fill out your name!</p>';
}
if(empty($_POST['miles'])){
    echo '<p class="error">Please fill out the miles!</p>';
}
if(empty($_POST['speed'])){
    echo '<p class="error">Please fill out your driving speed!</p>';
}
if(empty($_POST['hours'])){
    echo '<p class="error">Please fill out how many hours you plan on driving!</p>';
}
if(empty($_POST['gas'])){
    echo '<p class="error">Please select a gas price!</p>';
}
if($_POST['mpg'] == NULL){
    echo '<p class="error">Please select your fuel efficiency!</p>';
}

} if (isset($_POST['name'],
$_POST['miles'],
$_POST['speed'],
$_POST['hours'],
$_POST['gas'],
$_POST['mpg'])) {
    $name = $_POST['name'];
    $miles = floatval($_POST['miles']);
    $speed = floatval($_POST['speed']); 
    $hours = floatval($_POST['hours']);
    $gas = floatval($_POST['gas']);  
    $mpg = floatval($_POST['mpg']); 
if($speed == 0) {
    $speed = .5;
}
if($hours == 0) {
    $hours = .5;
}
if($mpg == 0) {
    $mpg = 1;
}
$total_hours = $miles / $speed;

$total_days = $total_hours / $hours;

$total_gallons = $miles / $mpg;

$price = ($miles / $mpg) * $gas;  

 if(!empty($name && $miles && $speed && $hours && $gas) && ($miles > 0) &&($speed >= 1) && ($hours >=1 ) && ($mpg != NULL) && ($mpg != 1)) {

echo '
<div class="box">
<h2>Hello '.$name.'!</h2>
<p>Here are your trip details: <br> Your travel time will be '.number_format($total_hours, 2).' hours total, and your trip will take '.number_format($total_days, 2).' days. <br>
Your trip will use '.number_format($total_gallons, 2).' gallons of gas, and cost $'.number_format($price, 2).' dollars. <br> Have a good trip!</p>
</div>
';  

 }
}

;?>
</body>
</html>
