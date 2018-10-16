
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP lydes ir <?php date_default_timezone_set('Europe/Vilnius') .  print date('Y.m.d', strtotime('+1 day')) ?></title>
  </head>
  <body>
      <h1>
          <i>Donatas</i> - HTML <?php print date('H', strtotime('-1 hour')) . ' valanda!'?>
      </h1>
      <p>
          <?php print date('Y', strtotime('+1 year'))?> ne uz kalnu!
      </p>
  </body>
</html>

<?php // date_default_timezone_set('Europe/Vilnius'); print 'Data:' . date("Y.m.d H.i.s")?>