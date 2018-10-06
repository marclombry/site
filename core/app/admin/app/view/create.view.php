<?php include("partials/header.view.php");?>

    <div id="content" class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          
          <div class="row">
            <div>
              <h2>Back office</h2>
              <div id="showTirelires" class=""></div>
                <form id="addPosts" method="POST" action="">
                  <div>
                    <label for="euros">Argent : </label>
                    <input type="text" id="euros" name="valeurs" placeholder="euros(1) centimes (0.10)"> 
                  </div>
                  <div>
                  <label for="id_tirelire">Numero de la tirelire : </label>
                    <input type="text" id="id_tirelire" name="id_tirelire" placeholder="le numéro de la tirelire">  
                    <input type="submit" value="Ajouter">
                  </div>
                </form>
            </div>
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
      </div><!--/row-->
    </div>
<?php include("partials/footer.view.php");?>