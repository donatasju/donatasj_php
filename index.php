<?php
    $distance = rand (100, 800);
    $fuel_100km = 7.5;
    $fuel_price = 1.3;
    $fuel_used = $distance / 100 * $fuel_100km;
    $price_used = $fuel_used * $fuel_price;
?>


<html>
    <head>
        
    </head>
    <body>
        <h1>
            Nuvaziavus <?php print $distance ?> km, masina sunaudos <?php print $fuel_used ?> L. kuro. Kaina: <?php print $price_used ?>
        </h1>
    </body>
    
    
</html>