<?php
/**
 * 
 * @return 
 */

function magic_ball () {
    
    $array = ['Visiskai taip!', 'Taip', 'Galbut', 'Ne', 'Ne negalvok!'];
    $raktai = array_rand($array);
   
    return $array[$raktai];
}
?>

<html>
    <body>
        <?php print magic_ball() ?>

    </body>
</html>
