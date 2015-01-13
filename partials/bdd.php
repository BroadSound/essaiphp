<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=broadsound', 'root', '');
	$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch(Exception $e){
	echo "Impossible de se connecter à la base de données";
	echo $e->getMessage();
	die();
}