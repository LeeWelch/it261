<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }  
} // end myError function

// start random images 
$photos[0] = 'people1_G.Verdi ';
$photos[1] = 'people2_M.Angelou ';
$photos[2] = 'people3_E.Stone ';
$photos[3] = 'people4_G.Flynn ';
$photos[4] = 'people5_K.Harris ';
$photos[5] = 'people6_R.King ';
$photos[6] = 'people7_L.Pavarotti ';

function random_photos($photos) {
    $my_return = '';
    $i = rand(0, 6);
    $selected_image = ''.substr($photos[$i], 0, 7).'.jpg';
    $my_return = '<figure><img src="images/'.$selected_image.'" alt="'.substr($photos[$i], 8, -1).'"><figcaption>'.substr($photos[$i], 8, -1).'</figcaption></figure>';
    return $my_return;
    } // end random photos function  