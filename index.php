<?php 
$fridge = ['Jogurtas, ', 'Kebabas, ', 'alus, ', 'sugede vaisiai, ', 'supuves avokadas. '];

$text = ' ';
for ($i = 0; $i < count($fridge); $i++) {
    $text .= $fridge[$i] ;
}
?>
<html>
    <body>
        <h1><?php print $text; ?></h1>
    </body>
</html>