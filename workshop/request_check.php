<?php
var_dump($_POST);

$fiche = $_POST['nameartist'];


mail('broadsoundrequest@gmail.com', "Proposition d'artiste", $fiche);