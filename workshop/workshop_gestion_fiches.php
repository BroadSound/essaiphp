<?php
require '../lib/includes.php';


if (isset($_GET['delete'])){ 
  checkCsrf();
  $id = $bdd->quote($_GET['delete']);
  $bdd->query("DELETE FROM artistes WHERE id=$id");
  setFlash('La fiche a bien été supprimé');
  header('Location:workshop_gestion_fiches.php');
  die();
}

$select = $bdd->query("SELECT id, nom, style FROM artistes ORDER BY nom ");
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
      <h1>Gestion des fiches</h1>
      <p>
        <a href="workshop_edit_fiches.php" class="btn btn-info">Nouvelle Fiche</a>
      </p>

      <?php echo flash(); ?>


      <table class="table">
        <thead>
          <tr>
            <th>NOM</th>
            <th>STYLE</th> 
            <th><div class="pull-right">ACTIONS</div></th>
          </tr>
          <tbody>
          <?php foreach ($categories as $category): ?>
            <tr>
              <td><?php echo $category['nom']; ?></td>
              <td><?php echo $category['style']; ?></td>
              <td>
                <div class="pull-right">
                  <a href="workshop_edit_fiches.php?id=<?php echo $category['id']; ?>" class="btn btn-success">Editer</a>
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
</body>

</html>