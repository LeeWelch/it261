<?php
include('config.php');

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];

} else {
    header('Location: movies.php');
}

$sql = 'SELECT * FROM movies WHERE movies_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
$title = stripslashes($row['title']); 
$released = stripslashes($row['released']);
$director = stripslashes($row['director']);
$length = stripslashes($row['length']);
$starring = stripslashes($row['starring']);
$plot = stripslashes($row['plot']);
$feedback = '';
    } // close while loop 


} else {
    $feedback = 'Houston, we have a problem';
}

include('includes/header.php');

?>
<div id="wrapper">
<main>
<h1>Now Screening: <?php echo $title;?></h1>
<ul>
<?php 
echo '
<li><b>Released: </b>'.$released.'</li>
<li><b>Directed by: </b>'.$director.'</li>
<li><b>Length: </b>'.$length.'</li>
<li><b>Starring: </b>'.$starring.'</li>
<li><b>Plot Summary: </b>'.$plot.'</li>
';
?>
</ul>

<p><i>Return to our <a href="movies.php">movies page!</a></i></p>
</main>

<aside>
<figure>
<img src="images/movies<?php echo $id;?>.jpg" alt="<?php echo $title;?>">
<figcaption>
    <?php
echo $title;
    ?>
</figcaption> 

</figure>
</aside>

</div>
<!-- end wrapper -->

<?php
@mysqli_free_result($result);

@mysqli_close($iConn);

include('includes/footer.php')
?>