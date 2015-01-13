<?php

include'partials/bdd.php'; 


?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
   <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
   <link href="css/artistesgroupes.css" rel="stylesheet">
 </head>
 <body>

<div class="row">
	<div class="container-fluid">
    	<div class="col-sm-12 col-md-2">
            <?php include('partials/aside_gauche.php'); ?>
        </div>
    	<div class="col-sm-12 col-md-offset-1 col-md-8 col-md-offset-1">
    		<form action="workshop/request_check.php" method="POST">

    			<div class="row">
    				<h2>Pour vous contacter</h2>
    				<div class="row">
    					<div class="col-md-4">
							<div class="form-group">
    							<label for="inputname">Votre nom</label>
    							<input type="text" name="name" class="form-control" id="inputname">
    						</div>
    					</div>
    					<div class="col-md-4">
							<div class="form-group">
    							<label for="inputemail">Votre email</label>
    							<input type="text" name="email" class="form-control" id="inputemail">
    						</div>
    					</div>
    				</div>
    				<div class="row">
    				<h2>Votre proposition</h2>
    					<div class="col-xs-12 col-md-4">
    						<div class="form-group">
    							<label for="inputnameartist">Artiste ou Groupe</label>
    							<input type="text" name="nameartist" class="form-control" id="inputnameartist">
    						</div>
    					</div>
    					<div class="col-xs-12 col-md-4">
    						<div class="form-group">
    							<label for="inputstyle">Style</label>
                                <select name="style" id="inputstyle" class="form-control">
                                    <option value="rock">Rock</option>
                                    <option value="pop">Pop</option>
                                    <option value="electro">Electro</option>
                                </select>
    						</div>
    					</div>
    					<div class="col-xs-12 col-md-4">
    						<div class="form-group">
    							<label for="inputmembers">Membres</label>
    							<input type="text" name="members" class="form-control" id="inputmembers">
    						</div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col-xs-12 col-md-5">
    						<div class="form-group">
    							<label for="inputbio">Biographie</label>
    							<textarea name="biography" class="form-control" id="inputbio"></textarea>
    						</div>
    					</div>
    					<div class="col-xs-12 col-md-5">
    						<div class="form-group">
    							<label for="inputdisco">Discographie</label>
    							<textarea name="discography" class="form-control" id="inputdisco"></textarea>
    						</div>
    					</div>
    				</div>
    				<button type="submit" class="btn btn-primary">Envoyer</button>
    			</div>
    		</form>
    	</div>
	</div>
</div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.js "></script>
<script src="js/essai.js "></script>
 </body>

</html>
