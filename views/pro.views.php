<?php ob_start() ?>

    
        <form class="d-flex" class="col-sm-4">
          <div >
            <input class="form-control me-sm-2" type="search" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
          </div>
        </form>
    

        <div class="container marketing" bis_skin_checked="1">

        <!-- Three columns of text below the carousel -->
            <div class="row" bis_skin_checked="1">


              <div class="col-lg-4" bis_skin_checked="1">
                <img class="rounded-circle" src="" alt="" width="140" height="140">
                <h2>Actulité</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
              </div><!-- /.col-lg-4 -->


              <div class="col-lg-4" bis_skin_checked="1">
                <img class="rounded-circle" src="" alt="" width="140" height="140">
                <h2>Pros</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
              </div><!-- /.col-lg-4 -->


              <div class="col-lg-4" bis_skin_checked="1">
                <img class="rounded-circle" src="" alt="" width="140" height="140">
                <h2>Emplois</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
<?php
    $content = ob_get_clean();
    require('layout.php');
    $titre = 'Pro';
?>
