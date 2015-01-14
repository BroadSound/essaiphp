<?php
$auth = 0;
include('lib/auth.php');
include ('lib/includes.php');

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

<?php echo flash(); ?>

<form action="#" method="post">
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

<?php include('partials/debug.php'); ?>

</body>

</html>