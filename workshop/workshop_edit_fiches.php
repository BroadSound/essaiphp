<?php
include '../lib/includes.php';

if (isset($_POST['nom']) && isset($_POST['style']) && isset($_POST['membres']) && isset($_POST['image_fiche']) && isset($_POST['soundcloud']) && isset($_POST['description']) && isset($_POST['image_fiche'])){
  checkCsrf();
  $nom = $bdd->quote($_POST['nom']);
  $style = $bdd->quote($_POST['style']);
  $membres = $bdd->quote($_POST['membres']);
  $image_fiche = $bdd->quote($_POST['image_fiche']);
  $soundcloud = $bdd->quote($_POST['soundcloud']);
  $description = $bdd->quote($_POST['description']);
  $image_fiche = $bdd->quote($_POST['image_fiche']);
  if (isset($_GET['id'])) {
    $id = $bdd->quote($_GET['id']);
    $bdd->query("UPDATE artistes SET nom=$nom, style=$style, membres=$membres, image_fiche=$image_fiche, soundcloud=$soundcloud, description=$description, image_fiche=$image_fiche WHERE id=$id ");
  }else {
    $bdd->query("INSERT INTO artistes SET nom=$nom, style=$style, membres=$membres, soundcloud=$soundcloud, description=$description, image_fiche=$image_fiche ");
  }
   
  setFlash('La fiche a bien été ajouté');
  header('Location: workshop_gestion_fiches.php');
  die();
}

if (isset($_GET['id'])) {
  $id = $bdd->quote($_GET['id']);
  $select = $bdd->query("SELECT * FROM artistes WHERE id=$id");
  if ($select->rowCount() == 0) {
    setFlash('Aucun artiste avec cet ID', 'danger');
    header('Location: workshop_gestion_fiches.php');
    die();
  }
  $_POST= $select->fetch();
}

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
      <div class="col-sm-offset-1 col-sm-10">
        <a href="<?php echo WEBROOT; ?>workshop/workshop_gestion_fiches.php"><i class="glyphicon glyphicon-chevron-left" id="glyph"></i>Retour</a>
        <h1>Editer une fiche</h1>

        <form action="#" method="post">
        <div class="form-group">
          <label for="nom">Nom de l'artiste</label>
          <?php echo input('nom'); ?>
        </div>
        <div class="form-group">
          <label for="style">Style</label>
          <?php echo input('style'); ?>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="oldies"> Remember me</label>
        </div>
        <div class="form-group">
          <label for="membres">Membres</label>
          <?php echo textarea('membres'); ?>
        </div>
        <div class="form-group">
          <label for="description">Biographie</label>
          <?php echo textarea('description'); ?>
        </div>
        <div class="form-group">
          <label for="image_fiche">Image Fiche</label>
          <?php echo input('image_fiche'); ?>
        </div>
        <div class="form-group">
          <label for="soundcloud">Lien Soundcloud</label>
          <?php echo input('soundcloud'); ?>
        </div>
        <?php echo csrfInput(); ?>
        <button type="submit" class="btn btn-success">Enregistrer</button>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo WEBROOT; ?>js/jquery.js"></script>
<script src="<?php echo WEBROOT; ?>js/tynimce/tinymce.min.js"></script>
<script>
tinyMCE.init({
        // General options
        mode : "textareas"
});
</script>
  </body>

</html>