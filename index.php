<?php
$gryzai_velai = rand(0, 1);
$gryzai_isgeres = rand(0, 1);

if ($gryzai_velai && $gryzai_isgeres) {
    print 'Miegosi ant sofos, nes gryzai velai ir isgeres';
} 
elseif (!$gryzai_velai && $gryzai_isgeres) {
    print 'Nemiegosi ant sofos nes negryzai velai';
} 
elseif ($gryzai_velai && !$gryzai_isgeres) {
    print 'Nemiegosi ant sofos nes negryzai isgeres';
} 
else {
    print 'Nemiegosi ant sofos, nes nieko nepadarei';
}
?>


<html>
    <head>

    </head>
    <body>
        <h1>
           
        </h1>
    </body>
</html>