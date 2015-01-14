<?php
include '../lib/includes.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link href="<?php echo WEBROOT; ?>css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?php echo WEBROOT; ?>css/style.css" rel="stylesheet">
    <title>Administration</title>
  </head>

  <body>
  <?php echo flash(); ?>
  <ul>
    <li><a href="workshop_gestion_fiches.php">Gérer les fiches</a></li>
    <li><a href="workshop_gestion_news.php">Gérer les actualités</a></li>
  </ul>
    
  


  </body>

</html>