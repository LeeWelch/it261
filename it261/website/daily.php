<?php 
include('config.php');
include('includes/headerdaily.php');
?>
    <div id="wrapper">
    <div id="hero">
    </div>
    <!-- end hero -->
    <main>
        <h1>Soup of the Day</h1>
        <h2 class="colorh2"> <?php
        echo $day;
        ?> </h2>
        <img class="soup" src="images/<?php echo $picture; ?>" alt="<?php echo $altTag; ?>">
        <p><?php echo $details; ?></p>
       
<img src="images/<?php   ;?>" alt ="">
    </main>
    <aside>
    <h2>Daily Menu</h2>
    <ul>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
    </ul>
    </aside>
    </div>
   <!-- end wrapper -->
   <?php
   include('includes/footer.php'); 