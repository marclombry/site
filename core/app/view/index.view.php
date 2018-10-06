<?php include("partials/nav.view.php");?>

    <div id="content" class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          
          <div class="row">
            <div>
              <h2>Contenu de la Tirelire</h2>
            
              <?=$content;?>
           
            </div>
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
      </div><!--/row-->
    </div>
<?php include("partials/footer.view.php");?>
