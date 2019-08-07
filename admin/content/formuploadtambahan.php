<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-12">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Upload Tambahan</h1>
          </div>
          <div class="panel panel-default">
              <div class="panel-heading">
              </div>
                  <div class="card shadow mb-4">
                  
                  <div class="card-body">
                  <div class="table-responsive">
                      <form method='POST' enctype="multipart/form-data" action="">
                          <!-- <div class="form-group">
                              <label for="formGroupExampleInput">Id Tambahan</label>
                              <input type="number" class="form-control" name="id_item" placeholder="">
                          </div> -->
                          <div class="form-group">
                              <label for="formGroupExampleInput">Nama Pelayanan</label>
                              <input type="text" readonly class="form-control" name="nama_pelayanan" placeholder="Tambahan">
                          </div>
                          <div class="form-group">
                              <label for="formGroupExampleInput">Nama Tambahan</label>
                              <input type="text" class="form-control" name="nama_item" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="formGroupExampleInput">Harga</label>
                              <input type="text" class="form-control" name="harga_item" placeholder="" id="harga">
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Keterangan</label>
                              <textarea class="form-control" type="text" name="deskripsi" rows="3"></textarea>
                          </div>
                          <h1><input type="file" name="cover_item" class="btn btn-primary" multiple/></h1>
                          
                          <input type="submit" name=btnSimpan class="btn btn-primary" value="Simpan">
                          <a href='index.php?page=tambahan'> <button type="button" name="btnBatal" class="btn btn-danger">Batal</button></a>
                      </form>
                      
                      <?php
                          if(isset($_POST['btnSimpan'])){

                            require_once '../pdo/Item.php';

                            $addtambahan = new Item(); 

                           
                            $nama_item = $_POST['nama_item'];
                            $harga_item = $_POST['harga_item'];
                            $deskripsi = $_POST['deskripsi']; 
                            $cover_item =$_FILE['cover_item']['name'];
                            $tmp_name = $_FILES["cover_item"]["tmp_name"];

                            // $harga_item = explode(' ', $harga_item);
                            // $harga_item = str_replace(".", "", $harga_item[1]);

                            print_r($cover_item);
                            $nama_foto = rand().".jpg";
                            $folder = "../media/cover/".$nama_foto;
                            move_uploaded_file($tmp_name, $folder);

                            $debug = $addtambahan->create_tambahan($nama_item, $harga_item, $deskripsi, $nama_foto);
                           
                            print_r($debug);
                            echo "<script>window.location.replace('index.php?page=tambahan')</script>";
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