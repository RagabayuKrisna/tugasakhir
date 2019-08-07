<div id="page-wrapper">
<?php
    require_once '../pdo/Profil.php';
    $profil = new Profil();
    $tampil = $profil->read_profil();
    $data = $tampil->fetch(PDO::FETCH_OBJ);
?>
            
            <div class="row">
                    <!--  page header -->
                
                    <!-- end  page header -->
            </div>
                <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Profil</h6>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <form method='POST'>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Nama Perusahaan</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name='nama_perusahaan' value="<?=$data->nama_perusahaan ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Nama Pemilik</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name='nama_pemilik' value="<?=$data->nama_pemilik ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Alamat</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name='alamat' value="<?=$data->alamat ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" name='email' value="<?=$data->email ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">No.Telp</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name='no_telepon' value="+62<?=$data->no_telepon ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Facebook</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name='fb' value="<?=$data->fb ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Instagram</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name='ig' value="<?=$data->ig ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name='deskripsi' rows="3"><?=$data->deskripsi ?></textarea>
                                    </div>
                                <input type="submit" name=btnSimpan class="btn btn-primary" value="Simpan">
                                <button type="button" class="btn btn-danger">Batal</button>
                                </form>
                                <?php
                                if(isset($_POST['btnSimpan'])){
                                    $nama_perusahaan= $_POST['nama_perusahaan'];
                                    $nama_pemilik = $_POST['nama_pemilik'];
                                    $alamat = $_POST['alamat'];
                                    $email = $_POST['email'];
                                    $no_telepon = $_POST['no_telepon'];
                                    $fb = $_POST['fb'];
                                    $ig = $_POST['ig'];
                                    $deskripsi = $_POST['deskripsi'];
                                    $debug = $profil->update_profil($nama_perusahaan, $nama_pemilik, $alamat, $email, $no_telepon, $fb, $ig, $deskripsi);
                                    //  if(!($nama_item='')||!($harga_item='')||!($harga_item='')||!($deskripsi='')||!($nama_foto='')){
                                    //     echo "<script>window.alert('Data Harus di Input semua');
                                    //     window.location.replace('index.php?page=formPaket');
                                    //     </script>";
                                    // }else
                                    print_r($debug);
                                    echo "<script>window.location.replace('index.php?page=editprofilrj')</script>";
                                } 
                            ?>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>