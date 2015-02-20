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
    <div class="row">
      <div class="container">
        <?php echo flash(); ?>
        <ul>
          <li><a href="workshop_gestion_fiches.php"><h1>Gérer les fiches</h1></a></li>
          <li><a href="workshop_gestion_blog.php"><h1>Gérer le Blog</h1></a></li>
        </ul>
    </div>
  </div>


  </body>

</html>