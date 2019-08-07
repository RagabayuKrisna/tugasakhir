 
<section id="couple-profile" class="couple-profile-main-page">
    <div class="container">
      <center>
      <div class="row">
      <?php
        require_once '../pdo/Item.php';
        $it = new Item();
        $id_item = $_GET['id_item'];
        $tampil = $it->read_Id_item($id_item);
        $data = $tampil->fetch(PDO::FETCH_OBJ);        
        ?>
        <div class="col-md-12">  
          <div class="couple-profile-main-block">
            <div class="upload-profile-block mrgn-bottom-30">
              <h3 class="couple-profile-heading"><?=$data->nama_item?></h3>
              <div class="row">
                <div class="col-lg-12 col-lg-12">
                  <div class="">
                    <img src="../media/cover/<?=$data->cover_item?>" class='img img-profile' >
                  </div>
                  <br>
                  <h6><?=str_replace(",","<br>",$data->deskripsi)?>
                  <br><br>
                  <br><?="Rp " . number_format($data->harga_item,2,',','.');?>
                  </h6>
                  <ul>
                  <div>
                  <a href="index.php?page=tersedia&tanggal=<?=$_SESSION['tanggal']?>" class="btn btn-default btn-block">Lihat Barang Yang Tersedia</a>
                  </div>
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