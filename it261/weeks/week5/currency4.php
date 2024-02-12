<!--
1 ruble = 0.017 dollars
1 pound sterling = 1.15 dollars
1 canadian dollar = .76 dollars
1 euro = 1.00 dollars
1 yen = .0074 dollars
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 4 Extra Credit</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <style>

    </style>
</head>
<body class="currency4">
<form class="form4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>NAME</label>
<input type="text" name ="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])  ;?>">

<label>EMAIL</label>
<input type="email" name ="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>" >

<label>How much money do you have?</label>
<input type="number" name ="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount'])  ;?>">

<label>Choose your currency</label>
<!-- time for our radio button that has an additional attribute of VALUE -->
<ul>
<li><input type="radio" name ="currency" value="0.017" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.017) echo 'checked="checked" ' ;?>> Rubles</li>
<li><input type="radio" name ="currency" value="0.76" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.76) echo 'checked="checked" ' ;?>> Canadian Dollars</li>
<li><input type="radio" name ="currency" value="1.15" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.15) echo 'checked="checked" ' ;?>> Pounds</li>
<li><input type="radio" name ="currency" value="1.00" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.00) echo 'checked="checked" ' ;?>> Euros</li>
<li><input type="radio" name ="currency" value="0.0074" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.0074) echo 'checked="checked" ' ;?>> Yen</li>
</ul>

<label>Choose your banking institution</label>
<select name="bank">
    <option value="" <?php if(isset($_POST['bank']) &&  is_null($_POST['bank'])) echo 'selected = "unselected" ';?>>Select one!</option>
    <option value="boa" <?php if(isset($_POST['bank'] ) && $_POST['bank'] == 'boa') echo 'selected = "selected" ';?> >Bank of America</option>
    <option value="chase" <?php if(isset($_POST['bank'] ) && $_POST['bank'] == 'chase') echo 'selected = "selected" ';?> >Chase Bank</option>
    <option value="banner" <?php if(isset($_POST['bank'] ) && $_POST['bank'] == 'banner') echo 'selected = "selected" ';?>>Banner Bank</option>
    <option value="wells" <?php if(isset($_POST['bank'] ) && $_POST['bank'] == 'wells') echo 'selected = "selected" ';?>>Wells Fargo</option>
    <option value="becu" <?php if(isset($_POST['bank'] ) && $_POST['bank'] == 'becu') echo 'selected = "selected" ';?>>Boeing Credit Union</option>

</select>
<input type="submit" value="Convert it">

<p><a href="">Reset it!</a></p>

</fieldset>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])){
    echo '<p class="error">Please fill out your name!</p>';
}
if(empty($_POST['email'])){
    echo '<p class="error">Please fill out your email!</p>';
}
if(empty($_POST['amount'])){
    echo '<p class="error">Please fill out your amount!</p>';
}
if(empty($_POST['currency'])){
    echo '<p class="error">Please select your currency!</p>';
}
if($_POST['bank'] == NULL){
    echo '<p class="error">Please choose your banking institution!</p>';
}

} if (isset($_POST['name'],
$_POST['email'],
$_POST['amount'],
$_POST['currency'],
$_POST['bank'])) {
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $amount = floatval($_POST['amount']);
    $currency = floatval($_POST['currency']);
    $bank = $_POST['bank'];
    $dollars = $amount * $currency;

    if(!empty($name && $email && $amount && $currency) && ($bank != NULL) && ($dollars >= 1000)) {

echo '
<div class="box" style="background: lightgreen;">
<h2>Hello '.$name.',</h2>
<p>You now have <b>$'.number_format($dollars, 2).' American dollars</b> and we will be emailing you at <b>'.$email.'</b> with your information, as well as depositing your funds at <b>'.$bank.' bank!</b> </p>
<br>
<h3>Congrats, you should be very happy: you have $'.number_format($dollars, 2).' dollars! </h3>
<iframe class="video" src="https://player.vimeo.com/video/145170770?h=1fcaa79b5e"  frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
</div>


';  

} elseif(!empty($name && $email && $amount && $currency) && ($bank != NULL) && ($dollars < 1000)){
echo '
<div class="box" style="background: pink;">
<h2>Hello '.$name.',</h2>
<p>You now have <b>$'.number_format($dollars, 2).' American dollars</b> and we will be emailing you at <b>'.$email.'</b> with your information, as well as depositing your funds at <b>'.$bank.' bank!</b> </p>
<br>
<h3>Sorry, it\'s a sad day: you only have $'.number_format($dollars, 2).' dollars. </h3>
<iframe class="video"  src="https://www.youtube.com/embed/q0phXT9Pa2Y?si=f3CKn15RH3L6wkrN" title="YouTube video player" width="640"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
</div>
';
}
}
?>

<footer>
    <ul>
        <li>Copyright &copy;
            2022</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by Lee Welch</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
        
        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>

   </footer>
</body>
</html>