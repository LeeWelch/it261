<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1><a href="index.php">Lee's Portal Page</a></h1>
    <h2>The navigation below represets our BIG Assignments. </h2>
    <div id="wrapper">
    <nav>
        <ul>
            <li><a href="">Switch</a></li>
            <li><a href="">Troubleshoot</a></li>
            <li><a href="">Calculator</a></li>
            <li><a href="">Email</a></li>
            <li><a href="">Database</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
</nav>

<main>
<h2>About Lee</h2> 
<img class="right" src="images/lee.jpg" alt="Lee">
<p>A paragraph about yourself - goals, background, hobbies, etc! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus, ex sit amet commodo aliquet, tortor justo tincidunt ante, sed porta lorem ipsum varius ex. Fusce malesuada nibh nec egestas mattis. Proin rutrum, arcu eu pharetra iaculis, neque ante fermentum tortor, ut lacinia sapien ipsum gravida ligula. Suspendisse euismod gravida malesuada. Curabitur varius eros id ex finibus feugiat. Morbi ut ligula vitae ipsum fermentum hendrerit. Etiam et tempor nisi, quis aliquam orci. Aenean nec arcu et tortor interdum laoreet eget et augue. Donec facilisis nunc et nibh mattis porta. Mauris rhoncus venenatis fermentum. Nullam in convallis odio. Vestibulum et metus et turpis vehicula accumsan. Duis ac semper nisi, sit amet venenatis odio.</p>

</main>

<aside>
<h2>Weekly Class Exercises</h2>
<h3>Week 2</h3>
<ul>
<li><a href="var.php">var.php</a></li>
<li><a href="">var2.php</a></li><li><a href="">exercise 3</a></li><li><a href="">exercise 4</a></li>
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