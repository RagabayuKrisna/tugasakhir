<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ratu Jawa</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Masuk Sebagai Admin</h1>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="id_admin" placeholder="Masukkan ID">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="Login">Login</button>
    
                  </form>
                  
                  <?php if(isset($error)) { ?>
                      <p style="color: red;">ID / Password salah</p>
                  <?php }?>
                  <?php
                      if(isset($_POST['Login'])){
                      require '../pdo/User.php';
                      //Mengambil Data Inputan 
                      $id_admin = $_POST['id_admin'];
                      $password = $_POST['password'];
                      $fungsi = new User();
                      $login = $fungsi->read_admin($id_admin, $password);
                      $validasi = $login->fetch(PDO::FETCH_OBJ);
                      $hitung = $validasi;
                      if(!($id_admin) && !($password)){
                          echo "<script>window.alert('Anda Belum MENGISI ID dan Password')</script>";
                      }else if(!($password)){
                          echo "<script>window.alert('Password Tidak Boleh KOSONG')</script>";
                      }else if (!($id_admin)) {
                          echo "<script>window.alert('ID Tidak Boleh KOSONG')</script>";
                      }
                      //Membaca Fungsi Login
                      // echo $id_admin . $password;
                        //Memeriksa apakah ada data di temukan
                      else if($hitung){
                          $_SESSION['loginadmin']=$validasi->id_admin;
                      echo "<script>window.location.replace('index.php')</script>";
                      }else{
                      echo "<script>window.alert('ID atau PASSWORD tidak ditemukan!!!')</script>";
                      }
                  }?>
                  
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
