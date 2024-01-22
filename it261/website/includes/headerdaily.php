<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

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

            case 'project.php' :
             $title = 'Project page of our Website Project';
            $body = 'project inner';
            break;

            case 'contact.php' :
            $title = 'Contact page of our Website Project';
            $body = 'contact inner';
            break;

            case 'gallery.php' :
             $title = 'Gallery page of our Website Project';
            $body = 'gallery inner';
            break;
}

// our  navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

// beginning of the switch for homework 3!!!
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


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/x-icon" href="images/souplogo.png">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Sail&display=swap');
*{
    font-family: montserrat;
}
       body {
            background-image: url("images/<?php echo $background2 ?>");
        } 
        #logo {
            max-width: 100px;
            margin-left: 20px;
        }
        .colorh2 {
            color: <?php echo $actDay ?>;
        }
        h1, h2{
            margin: 10px;
            font-family: montserrat;
            font-weight: 300;
        }
        h1{
            font-family: sail;
            font-size: 3em;
        }
        .soup {
            max-width: 300px;
            float: left;
            padding: 20px;
            
        }
        p {
            padding: 10px;
        }
        header{
            background: #123C69;
        }
        main{
            background: #EDC7B7;
        }
        aside{
            background: #EEE2DC;
        }
        footer{
            background: #BAB2B5;
        }
        aside ul, a{
            list-style-type: none;
            padding: 10px;
            text-decoration: none;
        }
        aside h2{
            font-family: sail;
            font-size: 2.25em;
        }
    </style>
</head>
<body class="<?php echo $body    ;?>">
    <header>
        <div class="inner-header">
        <a href="index.php">

            <img id="logo" src="images/souplogo.png" alt="logo">
        </a>

        <nav>
            <ul>
            <?php
foreach($nav as $key => $value) {
    if (THIS_PAGE == $key){
        echo '<li><a style="color:#AC3B61;" href=" '.$key.' "> '.$value.' </a></li>';
    } else {
        echo '<li><a style ="color:white;" href=" '.$key.' "> '.$value.' </a></li>';
    }

} // end foreach
            ?>
            </ul>
        </nav>
      <!--  <nav>
            <ul>
                <li><a href="">Home</a></li> 
                <li><a href="">About</a></li>   
                <li><a href="">Daily</a></li>   
                <li><a href="">Project</a></li>   
                <li><a href="">Contact</a></li>   
                <li><a href="">Gallery</a></li>     
            </ul>
        </nav>-->
        </div>
        <!--end inner-header-->
    </header>