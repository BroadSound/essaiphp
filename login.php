<?php
include'lib/includes.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $bdd->quote($_POST['username']);
	$password = sha1($_POST['password']);
	$select = $bdd->query("SELECT * FROM users WHERE username=$username AND password='$password'");
		if ($select->rowCount() > 0) {
			$_SESSION['Auth'] = $select->fetch();
			setFlash('Vous êtes maintenant connecté');
			header ('Location:' . WEBROOT . '/admin/index.php');
			die();	
	}	

}	

include'partials/header.php';
?>


<form action="#" method="post">
<label for="username">Nom d'utilisateur</label>
<?php echo input('username'); ?>
<label for="password">Password</label>
<input type="password" id="password" name="password">
<button type="submit">Envoyer</button>
</form>

<?php include'lib/debug.php'; ?>

	</body>	
</html>