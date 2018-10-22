<?php
$fridge = ['Jogurtas, ', 'Kebabas', 'alus, ', 'sugede vaisiai, ', 'supuves avokadas. '];
$noriu = ['Kebabas', 'alus, ', 'Pica'];
$text = ' ';


foreach ($fridge as $key => $produktas) {
    if (in_array ($produktas, $noriu)) {
        $text .= "$produktas: Isemiau <br>";
        unset ($fridge['Kebabas']);
    } else {
        $text .= "$produktas: Palikau <br>";
    }
}
?>

<html>
    <body>
        <h1>
            <?php print $text; ?>
        </h1>
    </body>
</html>