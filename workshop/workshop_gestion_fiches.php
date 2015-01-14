<?php
include '../lib/includes.php';


if (isset($_GET['delete'])){ 
  checkCsrf();
  $id = $bdd->quote($_GET['delete']);
  $bdd->query("DELETE FROM artistes WHERE id=$id");
  setFlash('La fiche a bien été supprimé');
  header('Location:workshop_gestion_fiches.php');
  die();
}

$select = $bdd->query("SELECT id, nom, style FROM artistes");
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
  <h1>Gestion des fiches</h1>

  <p>
    <a href="workshop_edit_fiches.php" class="btn btn-info">Ajouter une fiche</a>
  </p>

  <?php echo flash(); ?>


  <table class="table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Style</th> 
        <th>Actions</th>
      </tr>
      <tbody>
        <?php foreach ($categories as $category): ?>
        <tr>
          <td><?php echo $category['nom']; ?></td>
          <td><?php echo $category['style']; ?></td>
          <td>
            <a href="workshop_edit_fiches.php?id=<?php echo $category['id']; ?>" class="btn btn-success">Editer</a>
            <a href="?delete=<?php echo $category['id']; ?>&<?php echo csrf(); ?>" class="btn btn-danger" onclick="return confirm('Supprimer ?');">Supprimer</a>
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