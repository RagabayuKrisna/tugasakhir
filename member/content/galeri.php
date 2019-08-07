<!-- galeri -->
<section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Galeri</h2>
      </div>
    </div>
  </section>
<!-- page banner -->
<section id="pricing-plan" class="pricing-plan-main-block">
    <div class="container">    
        <div class="row">
          <?php
              require_once '../pdo/Galeri.php';
              $galeri = new Galeri();
              $tampil = $galeri->read_galeri();
              while($data = $tampil->fetch(PDO::FETCH_OBJ)){
          ?>
          <div class="col-md-4 col-sm-6 mb-5" style="margin-bottom: 5%">
            <div class="pricing-table-block">
            <div class="col-md-12 col-sm-6">
              <div class="pricing-table-block">
                <div class="gallery-block pricing-table-img-section">
                  <img src="../media/galery/<?=$data->foto_galeri?>" class="img-responsive" style="height:300px; width:500px" alt="pricing-table-img">
                  
                    <div class=""></div>
                
                    <div class="pricing-table-dtl">
                    <div class="gallery-dtl">
                    <h4 class="gallery-heading" ><a href="../media/galery/<?=$data->foto_galeri?>" title="<?=$data->judul_galeri?>">Lihat Gambar</a></h4>
            
                </div>
                
              </div>
            </div>
            <div class="pricing-table-list">
              <ul><h3 class=""><?=$data->judul_galeri?></h3></ul>
              <ul>
                <?= $data->keterangan ?>
              </ul>
              <!-- <div class="pricing-table-btn">
                <a href="booking.php" class="btn btn-default">Booking Sekarang</a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
     </div>
        <?php } ?>
        <div class="col-md-4 col-sm-6 mb-5" style="margin-bottom: 5%">
    </div>
  </section>
<!-- galeri end -->