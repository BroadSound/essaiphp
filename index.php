<?php

$auth = 0;
include'lib/includes.php';


if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $bdd->quote($_POST['username']);
  $password = sha1($_POST['password']);
  $select = $bdd->query("SELECT * FROM users WHERE username=$username AND password='$password'");
  if($select->rowCount() > 0 ){
    $_SESSION['Auth'] = $select->fetch();
    setFlash('Vous êtes maintenant connecté');
    header('Location:' . WEBROOT . 'workshop/workshop_index.php');
    die();
  }
}

$select=$bdd->query("SELECT * FROM artistes LIMIT 0,12");
$headtitles=$bdd->query("SELECT * FROM news ORDER BY date LIMIT 0,2");
$news=$bdd->query("SELECT * FROM news ORDER BY date LIMIT 2,4");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; <charset="ISO-8859-1">" />
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
          <li> <a href="news.php">Nouveaut&eacute;s</a> </li>
          <li> <a href="artistesgroupes.php">Artistes/Groupes</a> </li>
          <li> <a href="oldies/index_oldies.php">Oldies</a> </li>
          <li> <a href="blogsound.php">BlogSound</a> </li>
          <li><a href="forum/forum.php">Le Saloon</a></li>
          <li><a href="request.php">Propositions</a></li>
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
      <h1>Studio</h1>
      <?php while($donnees=$select->fetch()): ?>
      <div class="col-xs-6 col-sm-3 col-md-2">
        <a href="artistesgroupes.php#<?php echo $donnees['nom']; ?>" class="thumbnail" data-toggle="popover" data-html="true" data-content="
          <p><strong>Membres : </strong><?php echo $donnees['membres']; ?></p>" >
          <div class="essai"><img src="<?php echo $donnees['image_fiche']; ?>" alt="Nazca">
            <div class="etiquette"></div>
            <div class="etiquette_text" style="background-color: <?php echo $donnees['color']; ?>; opacity: 0.5;"><?php echo $donnees['style']; ?></div>
          </div>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
  </div>


  <div class="row">
    <div class="container">
      <h1>Actualit&eacute; du jour</h1>
      <?php while ($new=$news->fetch()): ?> 
      <div class="col-xs-12 col-md-6 extrait">
        <p><h2><?php echo $new['title']; ?></h2><span class="badge"><?php echo $new['badge']; ?></span></p>
        <p>Par <?php echo $new['auth'] . " le " . $new['date']; ?></p>
        <p><?php echo $new['content']; ?></p>
      </div>
    <?php endwhile; ?>
    </div>
  </div>


  <div class="row">
    <div class="container">
      <div class="col-xs-12">
        <?php echo flash(); ?>

        <form action="#" method="post" class="form-inline">
          <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <?php echo input('username'); ?>
          </div>
          <div class="form-group">
            <label for="password">Mot de Passe</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-default">Se connecter</button>
        </form>
      </div>
    </div>
  </div>

</div>



<footer>
  <div class="row">
    <div class="container-fluid">
      <div class="col-xs-12">
      	<ul>	
          <li><a href="mailto:damien.bussiere@outlook.fr">Contact</a></li>
          <li><a href="workshop/workshop_index.php">Administration</a></li>
          <li><p>&#169; 2015 BroadSound Team</p></li>
          <li><a href="https://www.facebook.com/pages/BroadSound/1375754919321962"><img src="medias/facebookicone.png" alt="facebook" width="20" height="20"></a></li>
          <li><img src="medias/twittericone.png" alt="twitter" width="20" height="20"></li>
      	</ul>
      </div>
    </div>
  </div>
</footer>


<script src="js/jquery.js"></script>
<script type="text/javascript">
$(function (){
   $(".thumbnail").popover({placement:'auto right', trigger:'hover', container: 'body', delay: { show: 300}}); 
});</script>
<script src="js/bootstrap.js"></script>
</body>

</html>