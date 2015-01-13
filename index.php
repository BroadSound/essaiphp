<?php
include('partials/bdd.php');
$select=$bdd->query("SELECT * FROM artistes LIMIT 0,12");
$headtitles=$bdd->query("SELECT * FROM news ORDER BY date LIMIT 0,2");
$news=$bdd->query("SELECT * FROM news ORDER BY date LIMIT 2,4");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; <charset="ISO-8859-1>" />
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
        <p><?php echo $headtitle['text']; ?></p>
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
        <p><?php echo $new['text']; ?></p>
      </div>
    <?php endwhile; ?>
    </div>
  </div>

</div>


<footer>
  <div class="row">
    <div class="container-fluid">
      <div class="col-xs-12">
        <p>Contact</p>
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