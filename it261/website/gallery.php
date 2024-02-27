<?php 
include('config.php');
include('includes/header.php');
?>

    <h1 class="galleryheader">Rare Houseplants</h1>
<table>
<?php foreach($plants as $name => $image)  :?>
<tr>
<td><img class="plants" src="images/<?php echo substr($image, 0, 6);?>.jpg"  alt="<?php echo str_replace('_', ' ', $name) ;?>"> </td>
<td><?php echo str_replace('_', ' ', $name) ;?></td>
<td><?php echo substr($image, 7, -1);?></td>
</tr>
<?php endforeach ;?>
</table>

<?php
   include('includes/footer.php'); 
?>