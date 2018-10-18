<?php
$distance = rand(400, 1500);
$fuel_100km = 7.5;
$fuel_price = 1.3;
$fuel_used = $distance / 100 * $fuel_100km;
$price_used = $fuel_used * $fuel_price;
$my_money = 100;
$bako_talpa = 40;
$tolimiausia_kelione = $my_money / $fuel_price * 100 / 7.5;
$kartas = $my_money / $fuel_price;
$fill_rep = ($fuel_100km / 100 * $distance) / $bako_talpa;
$galiu = 'Galiu sau tai leist: ' . round($fill_rep, 0, PHP_ROUND_HALF_DOWN) . ' kartu(s)';

    if ($price_used <= $my_money) {
        print 'Galiu sau tai leisti';
    } else {
        print 'Negaliu sau tai leisti';
    }
    if ($fuel_used <= $bako_talpa) {
        print ' Pakartotinai nereikes pilti';
    } else {
        print ' Pakartotinai reikes pilti';
    }
    print '    ' . $tolimiausia_kelione;
    if ($fill_rep) {
       print ' ' . $fill_rep;
    }
    ?>


<html>
    <head>
        
    </head>
    <body>
        <h1>
         Distance <?php print $distance ?> fuel used: <?php print $fuel_used ?> price used: <?php print $price_used ?>;
        </h1>
        <h1>
            <?php print $galiu ?>
        </h1>
    </body>
    
    
</html>