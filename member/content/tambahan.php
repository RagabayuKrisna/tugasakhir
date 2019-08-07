<!-- Kontak -->
<section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');">
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Tambahan Ratu Jawa</h2>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- category listing -->
<section id="pricing-plan" class="pricing-plan-main-block">
    <div class="container">
    
        <div class="row">
          <?php
              require_once '../pdo/Item.php';
              $t = new Item();
              $tampil = $t->read_tambahan();
              while($data = $tampil->fetch(PDO::FETCH_OBJ)){
        ?>
        <div class="col-md-4 col-sm-6"  style="margin-bottom: 5%">
          <div class="pricing-table-block">
          <div class="col-md-12 col-sm-6">
          <div class="pricing-table-block">
            <div class="pricing-table-img-section">
              <img src="../media/cover/<?=$data->cover_item?>" class="img-responsive" alt="pricing-table-img">
              <div class=""></div>
              <div class="pricing-table-dtl">
                <h3 class="pricing-table-heading" style="color: #000000"></h3>
                <div class="pricing-table-price" style="color: #000000"></span></div>
              </div>
            </div>
            <div class="pricing-table-list">
              <ul>
               <?php
                  if(strlen($data->nama_item)>15){
                    echo substr($data->nama_item, 0, 15) ;
                  }else{
                    echo $data->nama_item;
                  }
                  
                ?>
              </ul>
              <ul>
                <?="Rp " . number_format($data->harga_item,2,',','.');?><span>/Item
                </ul>
              <div class="pricing-table-btn">
              <form action="" method="POST">
              <a href="detailitem/<?= $data->id_item ?>"  class="btn btn-default" name="btnView">Lihat Detail</a>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
       
     </div> <?php } ?>
      <div class="col-md-4 col-sm-6 mb-5" style="margin-bottom: 5%">
    </div>
  </section>
  <?php
    if(isset($_POST['btnView'])){ 
      
          $view = new Item();
          $id_item = $_POST["id_item"];
          $tampil = $view->read_cover($id_item);
          $data = $tampil->fetch(PDO::FETCH_OBJ);
            
          // var_dump($id_paket);
          echo '<script>window.location.href = "index.php?page=tambahan"</script>';
        
      }
      
    ?>

  <div class="modal fade view-model" id="view-modal" role="dialog">
            
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title text-center">Detail</h5>
            </div>
            <div class="modal-body request-model-body text-center">
              <form id="register-form" action="#">
                <div class="form-group">
                <div class="pricing-table-img-section">
              <img src="../media/cover/<?=$data->cover_item?>" class="" >
              <div class=""></div>
              
            </div>
                  <!-- <input type="number" class="form-control" name="no_hp" placeholder="Masukkan Nomor Telepon Anda"/>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda"/>
                  <input type="text" class="form-control" name="username" placeholder="Masukkan Username"/>
                  <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda"/>
                  <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Anda"/>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password"/> -->
                </div>
                <a href="tambahan"><button type="submit" class="btn btn-default">Selesai</button></a>
              </form>
            
            </a>            
          </div>
        </div>
  </div>
<!-- Kontak end -->