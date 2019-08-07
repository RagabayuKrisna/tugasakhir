<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-12">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Edit Paket</h1>
          </div>
          <div class="panel panel-default">
              <div class="panel-heading">
              </div>
                  <div class="card shadow mb-4">
                  
                  <div class="card-body">
                  <div class="table-responsive">
                  <?php
                        require_once '../pdo/Item.php';
                        $paket = new Item();
                        $tampil = $paket->read_Id_item($_GET['id_item']);
                        $data = $tampil->fetch(PDO::FETCH_OBJ);
                    ?>
                  <form method='POST'action="" enctype="multipart/form-data">
                          <div class="form-group">
                              <input type="hidden" class="form-control" value="<?= $data->id_item ?>" name="id_item" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="formGroupExampleInput">Nama Pelayanan</label>
                              <input type="text" readonly class="form-control" value="<?= $data->nama_pelayanan ?>" name="nama_pelayanan" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="formGroupExampleInput">Nama paket</label>
                              <input type="text" class="form-control" value="<?= $data->nama_item ?>" name="nama_item" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="formGroupExampleInput">Harga</label>
                              <input type="number" class="form-control" name="harga_item" placeholder="" id="harga" value="<?= $data->harga_item ?>">
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Keterangan</label>
                              <textarea class="form-control" type="text" name="deskripsi" rows="3" ><?= $data->deskripsi ?></textarea>
                          </div>
                          <h1><input type="file" name="cover_item" class="btn btn-primary" multiple/></h1>
                          <input type="submit" name=btnSimpan class="btn btn-primary" value="Simpan">
                          <a href='index.php?page=epaket'> <button type="button" name="btnBatal" class="btn btn-danger">Batal</button></a>
                   </form>
                      <?php
                          if(isset($_POST['btnSimpan'])){
                            $paket = new Item();
                            $id_item = $_POST['id_item'];
                            $nama_pelayanan = $_POST['nama_pelayanan'];
                            $nama_item = $_POST['nama_item'];
                            $deskripsi = $_POST['deskripsi'];
                            $harga_item = $_POST['harga_item'];
                           
                            // $cover_item = $_POST['cover_item'];

                            $cover_item =$_FILE['cover_item']['name'];
                            $tmp_name = $_FILES["cover_item"]["tmp_name"];

                            print_r($cover_item);
                            $nama_foto = rand().".jpg";
                            $folder = "../media/cover/".$nama_foto;
                            move_uploaded_file($tmp_name, $folder);

                            $debug = $paket->update_paket($id_item, $nama_pelayanan, $nama_item, $harga_item, $deskripsi, $nama_foto);
                            //  if(!($nama_item='')&&!($harga_item='')&&!($harga_item='')&&!($deskripsi='')){
                            //     echo "<script>window.alert('Data Harus di Input semua');
                            //     window.location.replace('index.php?page=formeditpaket');
                            //     </script>";
                            // }else
                            print_r($debug);
                            echo "<script>window.alert('Data Berhasil di ubah'); window.location.replace('index.php?page=epaket')</script>";
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