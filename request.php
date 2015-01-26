<?php
$auth = 0;
include'lib/includes.php'; 

if (isset($_POST['nom']) && isset($_POST['style']) && isset($_POST['description']) && isset($_POST['discographie'])){
    checkCsrf();
    $nom = $bdd->quote($_POST['nom']);
    $style = $bdd->quote($_POST['style']);
    $discographie = $bdd->quote($_POST['discographie']);
    $description = $bdd->quote($_POST['description']);

    $bdd->query("INSERT INTO artistes SET nom=$nom, style=$style, description=$description, discographie=$discographie ");
    
    header('Location: request.php');
    setFlash('Votre proposition a bien été envoyé');
    die();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="<?php echo WEBROOT; ?>css/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="<?php echo WEBROOT; ?>css/artistesgroupes.css" rel="stylesheet">
    </head>

    <body>

    <div class="row">
	   <div class="container-fluid">
            <div class="col-sm-12 col-md-2">
            <?php include('partials/aside_gauche.php'); ?>
            </div>

            <div class="col-sm-12 col-md-offset-1 col-md-8 col-md-offset-1">
                <?php echo flash(); ?>
                <form action="#" method="post">
                    
                    <div class="row">
                        <h1>Pour vous contacter</h1>
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
    				<h1>Votre proposition</h1>
    					<div class="col-xs-12 col-md-6">
    						<div class="form-group">
    							<label for="nom">Artiste ou Groupe</label>
    							<?php echo input('nom'); ?>
    						</div>
    					</div>
    					<div class="col-xs-12 col-md-6">
    						<div class="form-group">
    							<label for="style">Style</label>
                                <select name="style" id="style" class="form-control">
                                    <option value="Rock">Rock</option>
                                    <option value="Pop">Pop</option>
                                    <option value="Electro">Electro</option>
                                </select>
    						</div>
    					</div>

                    <div class="row">


                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                              <label for="description">Biographie</label>
                              <?php echo textarea('description'); ?>    
                            </div>
                        </div>

    					<div class="col-xs-12 col-md-6">
    						<div class="form-group">
    							<label for="discographie">Discographie</label>
    							<?php echo textarea('discographie'); ?>
    						</div>
    					</div>
    				</div>
                </div>
                    <?php echo csrfInput(); ?>
    				<button type="submit" class="btn btn-primary">Envoyer</button>
    			</div>
    		</form>
    	</div>
	</div>
</div>



<script src="<?php echo WEBROOT; ?>js/jquery.js"></script>
<script src="<?php echo WEBROOT; ?>js/essai.js "></script>
<script src="<?php echo WEBROOT; ?>js/tynimce/tinymce.min.js"></script>
<script>
tinyMCE.init({
        // General options
        mode : "textareas"
});
</script>
 </body>

</html>
