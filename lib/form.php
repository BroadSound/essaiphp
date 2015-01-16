<?php
function input($id){
	$value = isset($_POST[$id]) ? $_POST[$id] : '';
	return "<input type='text' class='form-control' id='$id' name='$id' value='$value'>";
}

function textarea($id){
	$value = isset($_POST[$id]) ? $_POST[$id] : ' ';
	return "<textarea type='text' class='form-control' id='$id' name='$id'>$value</textarea>";
}
