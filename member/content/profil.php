<!-- Profil -->
<?php
              require_once '../pdo/Profil.php';
              $profil = new Profil();
              $tampil = $profil->read_profil();
              $data = $tampil->fetch(PDO::FETCH_OBJ);

?>
<section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading"><?=$data->nama_perusahaan?></h2>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- couple profile -->
  <section id="couple-profile" class="couple-profile-main-page">
    <div class="container">
      <center>
      <div class="row">
        <div class="col-md-12">  
          <div class="couple-profile-main-block">
            <div class="upload-profile-block mrgn-bottom-30">
              <div class="row">
                <div class="col-lg-12 col-lg-12">
                  <div class="upload-img">
                    <img src="images/profile.jpg" style="height:300px; width:400px" class="img-responsive" alt="upload img">
                  </div>
                  
                  <ul  class="text-left ">
                          <br>
                          <p >Pemilik : <?=$data->nama_pemilik?></p>
                          <p class="fa fa-map-marker"> Alamat : <?=$data->alamat?></p>
                          <br><p class="fa fa-mobile-phone"> No_Telepon : +62<?=$data->no_telepon?></p>
                          <p>Tentang Ratu Jawa : <?=$data->deskripsi?></p>
                          <div>
                          <!-- <a href="#" data-toggle="modal" data-target="#map-modal" name="btnMap"><img src="images/icons/map-marker-1-1.png" class="img-responsive" alt="upload img"></a></div> -->
                          <br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0079772402083!2d109.61335831511462!3d-7.005525555094918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7021aa15a5da6d%3A0xc58d393501b7de7e!2sRatu+Jawa+WO!5e0!3m2!1sid!2sid!4v1564112844725!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </center>
    </div>
  </section>

  <div class="modal fade map-model" id="map-modal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title text-center">Detail</h5>
            </div>
            <div class="modal-body request-model-body text-center">
              <form id="register-form" action="#">
                <div class="row">
                <div class="col-lg-12 col-lg-12">
                  <div class="upload-img">
                    <img src="images/blog-single-page/blog-related-3.jpg" class="img-responsive" alt="upload img">
                  </div>
                  <ul>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0079772402083!2d109.61335831511462!3d-7.005525555094918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7021aa15a5da6d%3A0xc58d393501b7de7e!2sRatu+Jawa+WO!5e0!3m2!1sid!2sid!4v1564112844725!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </ul>
                </div>
              </div>
                <button type="submit" name=btnSelesai class="btn btn-default">Selesai</button>
               
                </div>
              </form>
            
            </div>            
          </div>
        </div>
      </div>

<!-- Profil end -->