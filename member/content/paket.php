<section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Paket Ratu Jawa</h2>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- real wedding listing -->
  <section id="pricing-plan" class="pricing-plan-main-block">
    <div class="container">
          
            <div class="row">
                <?php
                require_once '../pdo/Item.php';
                $p = new Item();
                $tampil = $p->read_paket();
                while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                ?>
              <div class="col-md-4 col-sm-6 mb-5" style="margin-bottom: 5%">
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
                      </div>
                    <div class="pricing-table-list">
                      <ul><h3 class="">
                      <?php
                          if(strlen($data->nama_item)>15){
                            echo substr($data->nama_item, 0, 15) ;
                          }else{
                            echo $data->nama_item;
                          }
                          
                        ?></h3></ul>
                      <ul>
                       <?="Rp " . number_format($data->harga_item,2,',','.');?><span>/Paket
                      </ul>
                      <form action="" method="post">
                      <div class="pricing-table-btn">
                         <a href="detailitem/<?= $data->id_item ?>"  class="btn btn-default" name="btnView">Lihat Detail</a>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        <?php } ?>
            </div>
            <div class="col-md-4 col-sm-6 mb-5" style="margin-bottom: 5%">
    </div>
    
    
  </section>

<?php 
$p = new Item();
$tampil = $p->read_paket();
$data = $tampil->fetch(PDO::FETCH_OBJ);
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
                <h3 class="modal-title text-center"><?=$data->deskripsi?></h3>
                </div>
                </div>
                <button type="submit" name=btnSelesai class="btn btn-default">Selesai</button>
                  <!-- <input type="number" class="form-control" name="no_hp" placeholder="Masukkan Nomor Telepon Anda"/>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda"/>
                  <input type="text" class="form-control" name="username" placeholder="Masukkan Username"/>
                  <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda"/>
                  <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Anda"/>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password"/> -->
                </div>
              </form>
            
            </div>            
          </div>
        </div>
      </div>
      
<!-- end pricing table -->
 
  




       