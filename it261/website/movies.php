<?php

include('config.php');
include('includes/header.php');

?>
<div id="wrapper">
<main>
    <h1>Top Sci-Fi Movies</h1>

<?php $sql = 'SELECT * FROM movies';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

// start while loop 

while($row = mysqli_fetch_assoc($result))  {

    echo '
    <h2>Movie Facts: '.$row['title'].'</h2>
    <ul>
    <li><b>Released: </b>'.$row['released'].' </li>
    <li><b>Directed by:</b> '.$row['director'].' </li>
    <li><b>Length: </b>'.$row['length'].' </li>
    </ul>

    <p>For more information about '.$row['title'].', click <a href="movies-view.php?id='.$row['movies_id'].'" >here</a></p>
    ';

} // end while loop

} else {
    echo 'Nobody home!';
}

//release the server

@mysqli_free_result($result);

@mysqli_close($iConn);
?>

</main>

<aside>
<?php echo random_movies($movies);?>
</aside>

</div>
<!-- end wrapper -->

<?php

include('includes/footer.php');