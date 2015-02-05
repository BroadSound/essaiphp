<?php
include '../lib/includes.php';

if (isset($_POST['title']) && isset($_POST['auth']) && isset($_POST['content'])){
  checkCsrf();
  $title = $bdd->quote($_POST['title']);
  $auth = $bdd->quote($_POST['auth']);
  $content = $bdd->quote($_POST['content']);
  if (isset($_GET['id'])) {
    $id = $bdd->quote($_GET['id']);
    $bdd->query("UPDATE news SET title=$title, auth=$auth, content=$content WHERE id=$id ");
  }else {
    $bdd->query("INSERT INTO news SET title=$title, auth=$auth, content=$content, date=NOW() ");
  }
   
  setFlash('L\'article a bien été ajouté');
  header('Location: workshop_gestion_news.php');
  die();
}

if (isset($_GET['id'])) {
  $id = $bdd->quote($_GET['id']);
  $select = $bdd->query("SELECT * FROM news WHERE id=$id");
  if ($select->rowCount() == 0) {
    setFlash('Aucun article avec cet ID', 'danger');
    header('Location: workshop_gestion_news.php');
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
        <a href="<?php echo WEBROOT; ?>workshop/workshop_gestion_news.php"><i class="glyphicon glyphicon-chevron-left" id="glyph"></i>Retour</a>
        <h1>Editer une article</h1>

        <form action="#" method="post">
        <div class="form-group">
          <label for="title">Titre de l'article</label>
          <?php echo input('title'); ?>
        </div>
        <div class="form-group">
          <label for="auth">Auteur</label>
          <?php echo input('auth'); ?>
        </div>
        <div class="form-group">
          <label for="content">Texte</label>
          <?php echo textarea('content'); ?>
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