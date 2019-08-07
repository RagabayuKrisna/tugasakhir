<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-12">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Upload Galeri</h1>
          </div>
          <div class="panel panel-default">
              <div class="panel-heading">
              </div>
                  <div class="card shadow mb-4">
                  <?php
                        require_once '../pdo/Galeri.php';
                        $galeri = new Galeri();
                        $tampil = $galeri->read_id_galeri($_GET['id_galeri']);
                        $data = $tampil->fetch(PDO::FETCH_OBJ);
                    ?>
                  
                  <div class="card-body">
                  <div class="table-responsive">
                  <form method="post" enctype="multipart/form-data" action="">
                          <!-- <div class="form-group">
                              <label for="formGroupExampleInput">ID Paket</label>
                              <input type="number" class="form-control" name="id_paket" placeholder="<?= $data->id_paket ?>">
                          </div> -->
                          <div class="form-group">
                              <input type="hidden" class="form-control" name="id_galeri" value="<?=$data->id_galeri?>">
                          </div>
                          <div class="form-group">
                              <label for="formGroupExampleInput">Nama Foto</label>
                              <input type="text" class="form-control" name="judul_galeri" value="<?=$data->judul_galeri?>">
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Keterangan</label>
                              <textarea class="form-control" name="keterangan" rows="3" value=""><?=$data->keterangan?></textarea>
                          </div>
                             <h1>
                                <input type="file" name="foto_galeri" class="btn btn-primary" multiple/>
                            </h1>
                          <div class="form-group"> 
                            <input type="submit" name="btnSimpan" class="btn btn-primary" value="Simpan"> 
                            <a href='index.php?page=galeri'> <button type="button" name="btnBatal" class="btn btn-danger">Batal</button></a>
                          </div>
                      </form>
                      <?php
                          if(isset($_POST['btnSimpan'])){
                            
                            
                            $editgaleri = new Galeri(); 

                            
                            $judul_galeri = $_POST['judul_galeri'];
                            $keterangan = $_POST['keterangan'];

                            $foto_galeri =$_FILES['foto_galeri']['name'];
                            $tmp_name = $_FILES["foto_galeri"]["tmp_name"];
                            $judulLama = $data->foto_galeri;
                            // var_dump($_POST);
                            if(file_exists("../media/galery/" . $judulLama)){
                              // unlink('../media/galery/' . $judulLama);
                              $nama_foto = rand().".jpg";
                              $folder = "../media/galery/".$nama_foto;
                              move_uploaded_file($tmp_name, $folder);

                              $debug = $editgaleri->update_galeri($_GET['id_galeri'], $judul_galeri, $keterangan, $nama_foto);
                              echo "<script>window.location.replace('index.php?page=galeri')</script>";
                            }else{
                              echo "<script>alert('data gagal di edit')</script>";
                              echo "<script>window.location.replace('index.php?page=galeri')</script>";
                            }
                            
                          } 
                      ?>
                  </div>
                  
              </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

</div>
