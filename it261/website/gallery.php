<?php
$plants['Philodendron Silver Sword'] = 'silver_A Philodendron with unique silvery green sword shaped leaves. ';
$plants['Philodendron Pink Princess'] = 'pinkpr_A Philodendron with colorful pink variegation. ';
$plants['Monstera Thai Constellation'] = 'thaico_A Monstera variety known for it\'s beautiful \'constellation\' pattern. ';
$plants['ZZ Raven'] = 'zzrave_A darker coloration of the classic ZZ Plant. ';
$plants['Tradescantia Nanouk'] = 'trades_Adaptable and easy to care for, with colorful purple and green vines.';
$plants['Calathea Triostar'] = 'calath_Finicky but gorgeous when cared for correctly. ';
$plants['Hoya Compacta'] = 'hoyaco_AKA the Rope Plant, a slow growing vine with tortellini shaped leaves. ';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rare Houseplants</title>
    <style>
        *{
            background: #effff6;
        }

        table{
            border: 4px green;
            border-collapse: collapse;
        }

        td {
            border: 2px solid green;
            margin: 10px;
            text-align: center;
        }

        img {
            max-width: 300px;
        }

        footer{
        height:60px;
        line-height: 60px;
        clear:both;
        }

        footer ul{
            display: flex;
            justify-content: center;
            list-style-type: none;
        }
        
        footer li{
            justify-content: center;
            margin: 0 15px;
        }
    </style>
</head>
<body>
    <h1>Rare Houseplants</h1>
<table>
<?php foreach($plants as $name => $image)  :?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 6);?>.jpg"  alt="<?php echo str_replace('_', ' ', $name) ;?>"> </td>
<td><?php echo str_replace('_', ' ', $name) ;?></td>
<td><?php echo substr($image, 7, -1);?></td>
</tr>
<?php endforeach ;?>



</table>
<?php
   include('includes/footer.php'); 
?>
