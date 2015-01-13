<?php
	$bdd = new PDO('mysql:host=localhost;dbname=broadsound', 'root', '');
	$bdd->exec("SET CHARACTER SET utf8");
	$requete_count=$bdd->query('SELECT COUNT(id) as nbArt FROM artistes WHERE style= "Rock"'); 
	$datacount = $requete_count->fetch(PDO::FETCH_OBJ); 
	$nbArt = $datacount->nbArt; 
	$nbparpage = 8;
	$nbpages = ceil($nbArt/$nbparpage);
	
	if(isset($_GET['page']) && $_GET['page']>0 && $_GET['page']<=$nbpages)
		{ $pagecourante = $_GET['page']; }
	else { $pagecourante = 1; }
	
	$req = $bdd->query("SELECT * FROM artistes WHERE style= \"Rock\" ORDER BY nom LIMIT ".(($pagecourante-1)*$nbparpage).",$nbparpage");
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
    <div class="col-sm-12 col-md-10">
    <?php include('partials/element.php'); ?>
    <div class="pagination col-xs-12">
        <?php for($i=1;$i<=$nbpages;$i++){
          if($i==$pagecourante){
            echo "page" . " $i ~ ";
          }else{
            echo " <a href=\"artistesgroupes.php?page=$i\"> $i </a>" . " ~ ";
          }
        }?>
      </div>
    </div>
  </div>
</div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.js "></script>
<script src="js/essai.js "></script>
</body>

</html>