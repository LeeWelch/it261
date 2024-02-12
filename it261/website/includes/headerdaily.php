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
echo make_links($nav);
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