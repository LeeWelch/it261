<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link rel="icon" type="image/x-icon" href="images/favicon-32x32.png">
    <link href="css/styles.css" type="text/css" rel="stylesheet">

</head>
<body>
    <h1><a href="index.php">Lee's Portal Page</a></h1>
    <div id="wrapper">
    <nav>
        <ul>
            <li><a href="website/daily.php">Switch</a></li>
            <li><a href="website/adder.php">Troubleshoot</a></li>
            <li><a href="website/calculator.php">Calculator</a></li>
            <li><a href="website/contact.php">Email</a></li>
            <li><a href="">Database</a></li>
            <li><a href="website/gallery.php">Gallery</a></li>
        </ul>
</nav>

<main>
<h2>About Me</h2> 
<img class="right" src="images/lee.jpg" alt="Lee">
<p>
Hi! I’m Lee and this is my second quarter as a web development student at Seattle Central. I’m a semi-recent transplant to Seattle, I lived in Portland previously but am originally from the East Coast. I’ve worked in pet care and grooming for the last 15 years and while I love my job, I’m excited for a career change.  My goal through this program is to finish my associate’s and get into the tech industry, with the potential to go on to either the Application Development or Computer Science programs at North Seattle College.
<br>
<br>When I’m not working or doing schoolwork, I enjoy hiking with my dog, baking, and traveling as much as possible.

</p>
<h3>MAMP - HW1</h3>
<br>
<img class="mamp" src="images/mampscreenshot.png" alt="MAMP screenshot">
<img class="mamp" src="images/errorscreenshot.png" alt="Error screenshot">
</main>

<aside>
<h2>Weekly Class Exercises</h2>
<h3>Week 2</h3>
<ul>
<li><a href="weeks/week2/var.php">var.php</a></li>
<li><a href="weeks/week2/vars2.php">vars2.php</a></li>
<li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
<li><a href="weeks/week2/currency.php">currency.php</a></li>
<li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
</ul>
<h3>Week 3</h3>
<ul>
<li><a href="weeks/week3/if.php">if.php</a></li>
<li><a href="weeks/week3/date.php">date.php</a></li>
<li><a href="weeks/week3/for-each.php">for-each.php</a></li>
<li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
<li><a href="weeks/week3/index.php">index.php</a></li>
<li><a href="weeks/week3/switch.php">switch.php</a></li>
</ul>
<h3>Week 4</h3>
<ul>
<li><a href="weeks/week4/form-get.php">form-get.php</a></li>
<li><a href="weeks/week4/form1.php">form1.php</a></li>
<li><a href="weeks/week4/form2.php">form2.php</a></li>
<li><a href="weeks/week4/form3.php">form3.php</a></li>
<li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
<li><a href="weeks/week4/celsius.php">celsius.php</a></li>
</ul>
<h3>Week 5</h3>
<ul>
<li><a href="weeks/week5/currency1.php">currency1.php</a></li>
<li><a href="weeks/week5/currency2.php">currency2.php</a></li>
<li><a href="weeks/week5/currency3.php">currency3.php</a></li>
<li><a href="weeks/week5/currency4.php">currency4.php</a></li>
<li><a href="weeks/week5/null.php">null.php</a></li>
</ul>
<h3>Week 6</h3>
<ul>
<li><a href="weeks/week6/form.php">form.php</a></li>
<li><a href="weeks/week6/form2.php">form2.php</a></li>
<li><a href="weeks/week6/functions.php">functions.php</a></li>
</ul>
<h3>Week 7</h3>
<ul>
<li><a href="weeks/week7/form3.php">form3.php</a></li>
<li><a href="weeks/week7/strings.php">strings.php</a></li>
<li><a href="weeks/week7/pictures.php">pictures.php</a></li>
<li><a href="weeks/week7/rand.php">rand.php</a></li>
</ul>
<h3>Week 8</h3>
<ul>
<li><a href="weeks/week8/people.php">people.php</a></li>
<li><a href="weeks/week8/people-view.php">people-view.php</a></li>
</ul>
</aside>


</div>
<!--close wrapper-->



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