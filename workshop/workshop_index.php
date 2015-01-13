<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link href="css/workshop_style.css" rel="stylesheet">
    <link href="asset/ionicons-2.0.0/css/ionicons.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600' rel='stylesheet' type='text/css'>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
  	

	<nav class="navbar navbar-fixed-top navbar-inverse">
    	<div class="container-fluid">
      		<ul class="nav navbar-nav">
        		<li><a href="../index.php"><i class="ion-headphone"></i></a></li>
        		<li><a href="../news.php">Nouveautés</a></li>
        		<li><a href="../artistesgroupes.php">Artistes/Groupes</a></li>
        		<li><a href="../blogsound.php">BlogSound</a></li>
        		<li><a href="../forum.php">Le Saloon</a></li>
        		<li><a href="../oldies.php">Oldies</a></li>
      		</ul>
      		<form class="navbar-form navbar-right inline-form">
        		<div class="form-group">
          			<input type="search" class="input-sm form-control" placeholder="Recherche">
          			<button type="submit" class="btn btn-primary btn-sm"><i class="ion-search"></i></button>
        		</div>
      		</form>
    	</div>
  	</nav>

  	<div class="content">
  		<div id="monaccordeon" class="col-sm-2">
  			<div class="panel panel-info">
    			<div class="panel-heading">
      				<h4 class="panel-title" ><a data-toggle="collapse" data-parent="#monaccordeon"href="#site">Site</a></h4>
    			</div>
				<ul id="site" class="list-group collapse">
				    <li class="list-group-item"><a href="#">Editer les fiches</a></li>
				    <li class="list-group-item"><a href="#">Editer le blog</a></li>
				    <li class="list-group-item"><a href="#">Proposition</a></li>
			    </ul>
  			</div>
  			<div class="panel panel-info">
    			<div class="panel-heading">
      				<h4 class="panel-title" ><a data-toggle="collapse" data-parent="#monaccordeon" href="#forum">Forum</a></h4>
    			</div>
				<ul id="forum" class="list-group collapse">
				    <li class="list-group-item"><a href="#">Membres</a></li>
				    <li class="list-group-item"><a href="#">Edition de catégorie</a></li>
				    <li class="list-group-item"><a href="#">Edition de sujet</a></li>
			    </ul>
  			</div>
		</div>
	</div>

  </body>
 <script src="../bootstrap/js/jquery.js"></script> 
<script src="../bootstrap/js/bootstrap.js "></script>
</html>