<?php while ($donnees = $req->fetch()): ?>
  <div class="col-sm-12 col-md-offset-1 col-md-9 element" id="monaccordeon" >
    <div class="panel panel-default">
      <div class="panel-heading" id="<?php echo $donnees["nom"]; ?>"> 
        <a href="#<?php echo $donnees['id']; ?>" data-parent="#monaccordeon" data-toggle="collapse"><?php echo $donnees['nom'];?><i class="glyphicon glyphicon-chevron-down pull-right" id="glyph"></i></a> 
      </div>
      <div id="<?php echo $donnees['id'];?>" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-12 col-md-7">
              <p><em><strong>Style : </strong><?php echo $donnees['style']; ?></em></p>
              <p><strong>Membres : </strong><?php echo $donnees['membres']; ?></p>
            </div>
            <div class="hidden-sm col-md-offset-1 col-md-3">
              <img src="<?php echo $donnees['image']; ?>">
            </div>
          </div>
            <div class="row">
              <div class="col-xs-12">
                <p><strong>La petite histoire : </strong></p>
                <p><?php echo $donnees['description']; ?></p>
              </div>
            </div>
          <div class="row">
            <div class="col-xs-12">
              <p><strong>Discographie : </strong></p>
              <p><?php echo $donnees['discographie']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p><iframe class="lecteursoundcloud" width="70%" height="100%" src="<?php echo $donnees["soundcloud"]; ?>"></iframe></p>
            </div>
              <div class="col-xs-2">
                <p><a href=""><img src="medias/facebookicone.png" alt="Facebook"/></a></p>
              </div>
              <div class="col-xs-2">
                <p><a href=""><img src="medias/twittericone.png" alt="Twitter"/></a></p>
              </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>