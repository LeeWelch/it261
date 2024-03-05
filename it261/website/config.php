<?php

ob_start(); // prevents header errors before reading the whole page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
define('DEBUG', 'TRUE');

include('credentials.php');

$errors = array();

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

// our  navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'movies.php' => 'Movies',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a style="color:#71F79F;" class="current" href="'.$key.'">
            '.$value.' </a></li>';
        } else {
          $my_return .= '<li><a style ="color:white;" href=" '.$key.' "> '.$value.' </a></li>';
        }
    
    } // end foreach
    return $my_return;
    
    } // end function

switch(THIS_PAGE) {
        case 'index.php' :
            $title = 'Home page of our Website Project';
            $body = 'home';
            break;

            case 'about.php' :
            $title = 'About page of our Website Project';
             $body = 'about inner';
            break;

            case 'daily.php' :
            $title = 'Daily page of our Website Project';
            $body = 'daily inner';
            break;

            case 'movies.php' :
             $title = 'Movies page of our Website Project';
            $body = 'movies inner';
            break;

            case 'contact.php' :
            $title = 'Contact page of our Website Project';
            $body = 'contact inner';
            break;

            case 'gallery.php' :
             $title = 'Gallery page of our Website Project';
            $body = 'gallery inner';
            break;

            case 'thx.php' :
                $title = 'Thank you page of our Website Project';
               $body = 'thx inner';
               break;

        default:
        $title = 'Our Website Project';
            $body = 'project inner';
            $headline = 'Welcome to our IT 261 Website!';
}    

// beginning of the switch HW3 - Daily page
date_default_timezone_set('America/Los_Angeles');
if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}

switch($today) {

    case 'Saturday';
    $actDay = 'red';
    $day = 'Saturday is Chicken Noodle Soup Day';
    $details ='Chicken soup has been around since time immemorial and cultures across the world have their own version of this classic comfort food. When it comes to classic American chicken soup, though, you can typically count on a steaming bowl full of homemade chicken stock, flavored with celery, carrots, noodles and chicken.';
    $picture = 'chickennoodlesoup.jpg';
    $altTag ='Chicken noodle soup';
    $background2 ='chickennoodlebackground.jpg';
    break;

    case 'Sunday';
    $actDay = 'orange';
    $day = 'Sunday is Italian Wedding Soup Day';
    $details ='Fun fact: Italian wedding soup has nothing to do with matrimony and it isn\'t actually served at Italian weddings—it\'s actually just a poor translation of minestra maritata. To be fair, maritata does mean married but in this instance, it\'s referring to a different type of union—namely the marriage of flavors. That said, the combination of savory pork meatballs and bitter greens in this hearty dish does indeed taste like true love.';
    $picture = 'italianwedding.jpg';
    $altTag ='Italian wedding soup';
    $background2 ='italianweddingbackground.jpg';
    break;


    case 'Monday';
    $actDay = 'yellow';
    $day = 'Monday is Minestrone Soup Day';
    $details ='Minestrone has been around for hundreds of years, but the recipe for this Italian soup isn\'t set in stone. In fact, by definition minestrone soup is simply a vegetable medley, made using whatever produce one has on hand. Celery, tomatoes, garlic, onions and carrots often comprise the base of the soup, while additional ingredients (like beans and greens) can be added depending on whatever is fresh and abundant.';
    $picture = 'minestrone.jpg';
    $altTag ='Minestrone soup';
    $background2 ='minestronebackground.jpg';
    break;

    case 'Tuesday';
    $actDay = 'green';
    $day = 'Tuesday is Tomato Soup Day';
    $details ='Another classic comfort food, tomato soup became an American household staple when a chemist working at Campbell\'s came up with the idea to condense the stuff back in 1897. And while we have no problem reaching for a can every now and then, you can\'t beat snuggling up with a homemade bowl of sweet and silky tomato soup (preferably served with a side of grilled cheese).';
    $picture = 'tomatosoup.jpg';
    $altTag ='Tomato Soup';
    $background2 ='tomatosoupbackground.jpg';
    break;

    case 'Wednesday';
    $actDay = 'blue';
    $day = 'Wednesday is New England Clam Chowder Day';
    $details ='New England clam chowder was first introduced to the region in the 18th century, and its popularity in American cuisine has not diminished since. Rich, thick and creamy, this chowder comes together with copious amounts of milk or cream, plus salt pork (i.e., bacon), celery, potatoes, onion and, of course, tender clams. This indulgent meal is traditionally served with oyster crackers which can be used for dipping or as a garnish.';
    $picture = 'clamchowder.jpg';
    $altTag ='Clam Chowder';
    $background2 ='clamchowderbackground.jpg';
    break;

    case 'Thursday';
    $actDay = 'indigo';
    $day = 'Thursday is Butternut Squash Soup Day';
    $details ='A seasonal staple in the fall, this soup is made by roasting butternut squash puree with chicken or vegetable stock for a smooth consistency and savory flavor. Other seasonal ingredients (think: apples and root vegetables) are often roasted and whipped up along with the squash for a more robust, nuanced final product. ';
    $picture = 'butternut.jpg';
    $altTag ='Butternut Squash Soup';
    $background2 ='butternutbackground.jpg';
    break;

    case 'Friday';
    $actDay = 'violet';
    $day = 'Friday is French Onion Soup Day';
    $details ='The origins of onion soup has been debated over time. It started as a poor man\'s meal, but thanks to the restaurants of the famed Les Halles market in Paris, this peasant food got its luxe makeover in the form of a gratin. A gooey, bubbling layer of Gruyère cheese adorns the rich, amber broth of beef stock and caramelized onions—a combination that can only be described as délicieuse.';
    $picture = 'onion.jpg';
    $altTag ='French Onion Soup';
    $background2 ='onionbackground.jpg';
    break;

}

// my emailable form's PHP

$first_name = '';
$last_name = '';
$email = '';
$teas = '';
$gender = '';
$phone = '';
$regions = '';
$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$regions_err = '';
$comments_err = '';
$privacy_err = '';
$teas_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {

// if inputs are empty, we will declare a statement else we will assign the $_POSTS to a variable 
// $teas =  $_POST['tea']

if(empty($_POST['teas'])) {
// say something or do something 
$teas_err = 'Please select your favorite teas!';
} else {
    $teas = $_POST['teas'];
}

if(empty($_POST['first_name'])) {
    // say something or do something 
    $first_name_err = 'Please fill out your first name!';    
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    // say something or do something 
    $last_name_err = 'Please fill out your last name!';   
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
    // say something or do something 
    $email_err = 'Please fill out your email!';  
} else {
    $email = $_POST['email'];
}

if(empty($_POST['gender'])) {
    // say something or do something 
    $gender_err = 'Please select your gender!';
} else {
        $gender = $_POST['gender'];
}

if($_POST['regions'] == NULL) {
    // say something or do something 
    $regions_err = 'Please select your region!';  
} else {
        $regions= $_POST['regions'];
}

if(empty($_POST['phone'])) { // if empty, type in your number
    $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if format is not xxx-xxx-xxxx, display Invalid format
    $phone_err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if

if(empty($_POST['comments'])) {
    // say something or do something 
    $comments_err = 'We value your input!'; 
} else {
        $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
    // say something or do something 
    $privacy_err = 'You must agree to receive spam email!';
} else {
        $privacy = $_POST['privacy'];
}

function my_teas($teas) {
$my_return='';
if(!empty($_POST['teas'])) {
    $my_return = implode(',' , $_POST['teas']);
}
return $my_return;

} // end my_teas function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['teas'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'emily.welch@seattlecolleges.edu';
$subject = 'Test email on '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.'  '.PHP_EOL.'
Last Name: '.$last_name.'  '.PHP_EOL.'
Email: '.$email.'  '.PHP_EOL.'
Gender: '.$gender.'  '.PHP_EOL.'
Phone: '.$phone.'  '.PHP_EOL.'
Teas: '.my_teas($teas).'  '.PHP_EOL.'
Regions: '.$regions.'  '.PHP_EOL.'
Comments: '.$comments.'  '.PHP_EOL.'
';


$headers = array(
    'From' => 'noreply@seattlecolleges.edu'
);

// we will be adding an if statement - that this email form will work ONLY if all the fields are filled out!

if(!empty(
    $first_name &&
    $last_name &&
    $email &&
    $gender &&
    $teas &&
    $regions &&
    $phone &&
    $comments) &&
    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

mail($to, $subject, $body, $headers);
header('Location:thx.php');
}
//don't forget, you must upload your form onto the server to receive and email!

} // end isset

}  // closing server request method

// start of the random images php
$photos[0] = 'seattle1';
$photos[1] = 'seattle2';
$photos[2] = 'seattle3';
$photos[3] = 'seattle4';
$photos[4] = 'seattle5';

function random_photos($photos) {
    $my_return = '';
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpg';
    $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
    return $my_return;
    } // end function


// start gallery php
$plants['Philodendron Silver Sword'] = 'silver_A Philodendron with unique silver-green sword shaped leaves. ';
$plants['Philodendron Pink Princess'] = 'pinkpr_A Philodendron with colorful pink variegation. ';
$plants['Monstera Thai Constellation'] = 'thaico_A Monstera variety known for it\'s beautiful \'constellation\' pattern. ';
$plants['ZZ Raven'] = 'zzrave_A darker coloration of the classic ZZ Plant. ';
$plants['Tradescantia Nanouk'] = 'trades_Adaptable and easy to care for, with colorful purple and green vines.';
$plants['Calathea Triostar'] = 'calath_A white, pink and green variation of the Prayer Plant.';
$plants['Hoya Compacta'] = 'hoyaco_AKA the Rope Plant, a slow growing vine with tortellini shaped leaves. ';
 
//end gallery

// start movies random photo function

$movies[0] = 'movies1_Alien ';
$movies[1] = 'movies2_The Matrix ';
$movies[2] = 'movies3_Dune ';
$movies[3] = 'movies4_Mad Max ';
$movies[4] = 'movies5_2001 A Space Odyssey ';
$movies[5] = 'movies6_Blade Runner ';
$movies[6] = 'movies7_Close Encounters of the Third Kind ';
$movies[7] = 'movies8_Star Wars ';
$movies[8] = 'movies9_Star Wars: The Empire Strikes Back ';
$movies[9] = 'moviesa_Godzilla ';

function random_movies($movies) {
    $my_return = '';
    $i = rand(0, 9);
    $selected_image = ''.substr($movies[$i], 0, 7).'.jpg';
    $my_return = '<figure><img src="images/'.$selected_image.'" alt="'.substr($movies[$i], 8, -1).'"><figcaption>'.substr($movies[$i], 8, -1).'</figcaption></figure>';
    return $my_return;
    } // end movies random photos function  

?>