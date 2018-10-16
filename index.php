
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP lydes ir <?php date_default_timezone_set('Europe/Vilnius') . print date('Y', rand(strtotime('+1 year'), strtotime('+10 year'))) ?></title>
  </head>
  <body style="background-color: rgb(<?php print rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255)?>);">
      <h1 style="font-size: <?php print rand(3, 30) . 'px'?>">
          <i>Donatas</i> - Galbut turesiu <?php print rand(1,5) . ' vaiku(us)'?>
      </h1>
      <p style="color: rgb(<?php print rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255)?>)">D. Trump'as nebebus presidentu <?php print date('Y.m.d', strtotime('+' . rand(3, 10)  . ' years'))?>
      </p>
  </body>
</html>


<?php // sets default timezone ?>
<?php // date_default_timezone_set('Europe/Vilnius'); print 'Data:' . date("Y.m.d H.i.s")?>

   <!--<title>PHP lydes ir <?php date_default_timezone_set('Europe/Vilnius') .  print date('Y.m.d', strtotime('+1 day')) ?></title>-->