<?php

$bdd = new PDO('mysql:host=localhost;dbname=broadsound', 'root', '');
$bdd->exec("SET CHARACTER SET utf8");
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$count=$bdd->query('SELECT COUNT(id) as nbArt FROM news'); 
$datacount = $count->fetch(PDO::FETCH_OBJ); 
$nbArt = $datacount->nbArt; 
$nbparpage = 5;
$nbpages = ceil($nbArt/$nbparpage);

if(isset($_GET['page']) && $_GET['page']>0 && $_GET['page']<=$nbpages)
  { $pagecourante = $_GET['page']; }
else { $pagecourante = 1; }

$select = $bdd->query("SELECT * FROM news ORDER BY date LIMIT ".(($pagecourante-1)*$nbparpage).",$nbparpage");

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
      <div class="col-sm-12 col-md-10 contenu">
        <div class="row">
          <div class="container">
          <?php while ($news=$select->fetch()): ?>
            <div class="col-xs-12 col-md-10">
              <p><h2><?php echo $news['title']; ?></h2> par <?php echo $news['auth'] . " le " . $news['date']; ?></p>
              <p><?php echo $news['text']; ?></p>
            </div>
          <?php endwhile; ?>
          </div>
        </div>


        <div class="pagination col-xs-12">
        <?php for($i=1;$i<=$nbpages;$i++){
          if($i==$pagecourante){
            echo "page" . " $i ~ ";
          }else{
            echo " <a href=\"news.php?page=$i\"> $i </a>" . " ~ ";
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