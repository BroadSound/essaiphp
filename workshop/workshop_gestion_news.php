<?php
include '../lib/includes.php';


if (isset($_GET['delete'])){ 
  checkCsrf();
  $id = $bdd->quote($_GET['delete']);
  $bdd->query("DELETE FROM news WHERE id=$id");
  setFlash('L\'article a bien été supprimé');
  header('Location:workshop_gestion_news.php');
  die();
}

$select = $bdd->query("SELECT id, title, auth FROM news");
$categories = $select->fetchAll();
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
        <h1>Gestion des actualités</h1>

        <p>
          <a href="workshop_edit_news.php" class="btn btn-info">Ajouter un article</a>
        </p>

        <?php echo flash(); ?>


        <table class="table">
          <thead>
            <tr>
              <th>TITRE</th>
              <th>AUTEUR</th>
              <th><div class="pull-right">ACTIONS</div></th>
            </tr>
            <tbody>
              <?php foreach ($categories as $category): ?>
              <tr>
                <td><?php echo $category['title']; ?></td>
                <td><?php echo $category['auth']; ?></td>
                <td>
                  <div class="pull-right">
                    <a href="workshop_edit_news.php?id=<?php echo $category['id']; ?>" class="btn btn-success">Editer</a>
                    <a href="?delete=<?php echo $category['id']; ?>&<?php echo csrf(); ?>" class="btn btn-danger" onclick="return confirm('Supprimer ?');">Supprimer</a>
                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </thead>
        </table>
      </div>
    </div>
  </div>


  </body>

</html>