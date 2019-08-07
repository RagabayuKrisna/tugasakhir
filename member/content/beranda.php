
<section id="wedding-gallery" class="wedding-gallery-main-block">
  <h6 class="call-out-heading"></h6>
    <div id="gallery-slider" class="gallery-slider">
    <?php
              require_once '../pdo/Galeri.php';
              $galeri = new Galeri();
              $tampil = $galeri->read_galeri();
              while($data = $tampil->fetch(PDO::FETCH_OBJ)){
      ?>
      <div class="item gallery-block">
        <div class="gallery-img">
          <img src="../media/galery/<?=$data->foto_galeri?>" class="img-responsive" style="height:300px; width:500px" alt="gallery">
        </div>
        <div class="overlay-bg"></div>
        <div class="gallery-dtl">
          
          <h4 class="gallery-heading"><a href="../media/galery/<?=$data->foto_galeri?>" title="<?=$data->judul_galeri?>"><?=$data->judul_galeri?></a></h4>
        </div>
      </div>
              <?php }?>
    </div>
  </section>

<div>
<br>
<br>

</div>

<section id="call-out" class="call-out-main-block">
    <div class="parallax" style="background-image: url('images/bg/testimonial-bg.jpg');">
      <div class="overlay-bg"></div>
      <div class="container text-center">
        <div class="call-out-dtl " >
          <h6 class="call-out-heading">Tentukan Tanggal Untuk Melihat Barang Yang Tersedia</h6>
          <!-- <input type="hidden" class="form-control"> -->
          <!-- <span class="input-group-addon">
            <span class="icon-calendar-full"></span>
          </span> -->
          <!-- <a href="#" class="btn btn-pink tanggal">Tentukan Tanggal</a> -->
          <a href="#tentukan_tanggal" class="btn btn-pink" data-toggle="modal" >Tentukan Tanggal</a>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade login-model" id="tentukan_tanggal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title text-center">Tentukan Tanggal</h5>
            </div>
            <div class="modal-body login-model-body text-center">
              <form action="index.php?page=tersedia" method="post">
                <div class="form-group">
                  <input type="date" class="form-control" name="tanggal" />
                  </div>
              <button type="submit" class="btn btn-default" name="pilihTanggal">Pilih</button>
              </form>
            
            </div>            
          </div>
        </div>
      </div>