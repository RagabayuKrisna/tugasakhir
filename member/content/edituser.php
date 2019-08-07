
<section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Edit Profil</h2>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- couple profile -->
  <section id="couple-profile" class="couple-profile-main-page">
    <div class="container">

        <div id="page-wrapper">

            
            <div class="row">
                    <!--  page header -->
                
                    <!-- end  page header -->
            </div>
                <div class="row">
                <div class="col-lg-8">
                    <!-- Advanced Tables -->
                    <div>
                        <h6 class="couple-profile-heading">Edit Profil</h6>
                        <div class="panel-heading">
                        </div>
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                            <?php
                                require_once '../pdo/User.php';
                                $editprofil = new User();
                                $tampil = $editprofil->read_member_user($_SESSION['login']);
                                $data = $tampil->fetch(PDO::FETCH_OBJ);
                            ?>
                                <form method='POST'>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">ID Member</label>
                                        <input type="text" class="form-control" name="id_member" id="formGroupExampleInput" value="<?=$data->id_member?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Nomer Handphone</label>
                                        <input type="number" class="form-control" name="no_hp" id="formGroupExampleInput" value="<?=$data->no_hp?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="formGroupExampleInput" value="<?=$data->nama?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Username</label>
                                        <input type="text" class="form-control" name="username" id="formGroupExampleInput" value="<?=$data->username?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Email</label>
                                        <input type="email" class="form-control" name="email" id="formGroupExampleInput" value="<?=$data->email?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" value="<?=$data->alamat?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Password</label>
                                        <input type="password" class="form-control" name="password" id="exampleFormControlInput1" value="<?=$data->password?>">
                                    </div>
                                        <input type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">
                                        <button type="button" name="btnBatal" class="btn btn-danger">Batal</button>
                                </form>
                              
                            </div>
                            <?php
                                if(isset($_POST['btnSimpan'])){
                                    $id_member = ($_SESSION['login']);
                                    $no_hp = $_POST['no_hp'];
                                    $nama = $_POST['nama'];
                                    $username = $_POST['username'];
                                    $email = $_POST['email'];
                                    $alamat = $_POST['alamat'];
                                    $password = md5($_POST['password']);

                                    $debug= $editprofil->update_user($id_member, $no_hp, $nama, $username, $email, $alamat, $password);
                                    print_r($debug);

                                    echo "<script>window.alert('Data Berhasil di ubah'); window.location.replace('edituser')</script>";
                                }
                            ?>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>

    </div>
  </section>