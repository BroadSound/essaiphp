<?php
$auth = 0;
include '../lib/includes.php';

//Attribution des variables de session
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
//On inclue les 2 pages restantes
include("./includes/functions.php");
include("./includes/constants.php");
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link href="<?php echo WEBROOT; ?>css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?php echo WEBROOT; ?>css/artistesgroupes.css" rel="stylesheet">
  </head>


  <body>
    <div class="row">
      <div class="container-fluid">
        <div class="col-sm-12 col-md-2">
          <?php include('../partials/aside_gauche.php'); ?>
        </div>
        <div class="col-sm-12 col-md-10 contenu">
          <p>Le Saloon est en cours de restauration, il ne va certainement pas tarder à ouvrir</p>
        </div>
      </div>
    </div>





  <script src="<?php echo WEBROOT; ?>js/jquery.js"></script> 
  <script src="<?php echo WEBROOT; ?>js/bootstrap.js "></script>
  <script src="<?php echo WEBROOT; ?>js/essai.js "></script>
  

  </body>

</html>