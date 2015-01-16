<?php
include '../lib/includes.php';

if (isset($_POST['title']) && isset($_POST['auth']) && isset($_POST['content']) && isset($_POST['badge'])){
  checkCsrf();
  $title = $bdd->quote($_POST['title']);
  $auth = $bdd->quote($_POST['auth']);
  $badge = $bdd->quote($_POST['badge']);
  $content = $bdd->quote($_POST['content']);
  if (isset($_GET['id'])) {
    $id = $bdd->quote($_GET['id']);
    $bdd->query("UPDATE news SET title=$title, auth=$auth, badge=$badge, content=$content WHERE id=$id ");
  }else {
    $bdd->query("INSERT INTO news SET title=$title, auth=$auth, badge=$badge, content=$content ");
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
  $_POST= $select->fetchAll();
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
    <label for="badge">Badge</label>
    <?php echo input('badge'); ?>
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


  </body>

</html>