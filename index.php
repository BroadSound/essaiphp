<?php

$auth = 0;
require'lib/includes.php';


if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $bdd->quote($_POST['username']);
  $password = sha1($_POST['password']);
  $select = $bdd->query("SELECT * FROM users WHERE username=$username AND password='$password'");
  if($select->rowCount() > 0 ){
    $_SESSION['Auth'] = $select->fetch();
    setFlash('Vous êtes maintenant connecté');
    header('Location:' . WEBROOT . 'workshop/workshop_index.php');
    die();
  } else {
    setFlash('Vous ne pouvez pas accéder à cette partie', 'danger');
  }
}

$select=$bdd->query("SELECT artistes.*, colors.style_color FROM artistes INNER JOIN colors ON artistes.style = colors.category ORDER BY date_ajout DESC LIMIT 0,12");
$headtitles=$bdd->query("SELECT title, auth, content, DATE_FORMAT(date, '%d.%m.%Y') AS date FROM news ORDER BY date LIMIT 0,2");
$news=$bdd->query("SELECT title, auth, content, DATE_FORMAT(date, '%d.%m.%Y') AS date FROM news ORDER BY date DESC LIMIT 2,4");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link href="<?php echo WEBROOT; ?>css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?php echo WEBROOT; ?>css/style.css" rel="stylesheet">  
    <link rel="icon" href="<?php echo WEBROOT; ?>medias/favicon.ico" />

  </head>
  <body>
    
<header>
  <div class="row">
    <div class="banner container">
      <div class="col-xs-12 col-sm-6">
        <a href="#"><img src="medias/broadsoundbanner.png"/></a>
      </div>
    </div>
  </div>
</header>

<nav>
  <div class="row">
    <div class="container">
      <div class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
          <li> <a href="artistesgroupes.php">Artistes/Groupes</a> </li>
          <li> <a href="blogsound.php">BlogSound</a> </li>
          <li><a href="saloon/saloon.php">Le Saloon</a></li>
          <li><a href="request.php">Soumettre</a></li>
          <li><a href="autochosing.php">Épate-moi!</a></li> 
          <!-- C'est toi le pro du php ;) il faut faire le système de autochosing.php, qui n'existe pas encore -->
        </ul>
        <form class="navbar-form navbar-right inline-form">
          <div class="form-group">
            <input type="search" class="input-sm form-control" placeholder="Recherche">
            <button type="submit" class="btn btn-primary btn-sm">Chercher</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</nav>

<div class="contenu">


  <div class="row">
    <div class="container">
      <?php echo flash(); ?>
      <h1>Gros Titres</h1>
      <?php while ($headtitle=$headtitles->fetch()): ?> 
      <div class="col-xs-12 col-md-6 extrait">
        <p><h2><?php echo $headtitle['title']; ?></h2></p>
        <p>Par <?php echo $headtitle['auth'] . " le " . $headtitle['date']; ?></p>
        <p><?php echo $headtitle['content']; ?></p>
      </div>
     <?php endwhile; ?>
    </div>
  </div>
  
  <div class="row">
    <div class="container">
      <a href="artistesgroupes.php"><h1>Studio</h1></a>
      <?php while($donnees=$select->fetch()): ?>
      <div class="col-xs-6 col-sm-3 col-md-2">
        <a href="artistesgroupes.php#<?php echo $donnees['nom']; ?>" class="thumbnail" data-toggle="popover" data-html="true" data-content="
          <p><strong>Membres : </strong><?php echo $donnees['membres']; ?></p>" >
          <div class="essai"><img src="<?php echo $donnees['image_fiche']; ?>" alt="<?php echo $donnees['nom']; ?>">
            <div class="etiquette"></div>
            <div class="etiquette_text" style="background-color: <?php echo $donnees['style_color']; ?>; opacity: 0.5;"><?php echo $donnees['style']; ?></div>
          </div>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
  </div>


  <div class="row">
    <div class="container">
      <h1>Actualité du jour</h1>
      <?php while ($new=$news->fetch()): ?> 
      <div class="col-xs-12 col-md-6 extrait">
        <p><h2><?php echo $new['title']; ?></h2></p>
        <p>Par <?php echo $new['auth'] . " le " . $new['date']; ?></p>
        <p><?php echo $new['content']; ?></p>
      </div>
    <?php endwhile; ?>
    </div>
  </div>

</div>



<footer>
  
    <div class="row">
      <div class="container">
        <div class="col-xs-12">

          <form action="#" method="post" class="form-inline">
            <div class="form-group">
              <label for="username">Nom d'utilisateur</label>
              <?php echo input('username'); ?>
            </div>
            <div class="form-group">
              <label for="password">Mot de Passe</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-success">Se connecter</button>
          </form>
        </div>
      </div>
    </div>
</footer>



<script src="js/jquery.js"></script>
<script type="text/javascript">
$(function (){
   $(".thumbnail").popover({placement:'auto right', trigger:'hover', container: 'body', delay: { show: 400}}); 
});</script>
<script src="js/bootstrap.js"></script>
</body>

</html>
