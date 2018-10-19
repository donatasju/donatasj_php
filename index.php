<?php
$fridge = ['Jogurtas, ', 'Kebabas, ', 'alus, ', 'sugede vaisiai, ', 'supuves avokadas. '];

$text = ' ';
foreach ($fridge as $produktas) {
    $text .= $produktas;
}
?>
<html>
    <body>
        <h1><?php print $text; ?></h1>
        <h1><?php print $fridge [rand(0, count($fridge) - 1)]; ?></h1>
    </body>
</html>