<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">

<head>
<title>Ratu Jawa Weeding Organizer</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Ratu Jawa" />
<meta name="keywords" content="Ratu Jawa Wedding Organizer">
<meta name="author" content="TA 1910" />
<meta name="MobileOptimized" content="320" />
<link href="images/favicon.ico" rel="icon" type="image/x-icon"/> <!-- favicon -->
<!-- theme style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<!-- revolution -->   
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css"> <!-- revolution setting css -->
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">  <!-- revolution layer css --> 
<!-- end revolution -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> <!-- google fonts -->
<link href="css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="css/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->
<!-- end theme style -->
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
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Selamat Datang di Ratu Jawa</h1>
                        </div>
                        <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" require=""/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" require=""/>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default btn-block" name="Login">Login</button>
                        <button type="reset" class="btn btn-default btn-block" name="Batal">Batal</button>
                        <h1 style="font-size:15px">Belum Punya Akun?
                        <a href="daftar.php">Daftar disini</a></h1>
                        </form>
                        <?php if(isset($error)) { ?>
                            <p style="color: red;">Username / Password salah</p>
                        <?php }?>
                        <?php
                            if(isset($_POST['Login'])){
                            require '../pdo/User.php';
                            //Mengambil Data Inputan 
                            $username = $_POST['username'];
                            $password = md5($_POST['password']);
                            $fungsi = new User();
                            $login = $fungsi->read_member($username, $password);
                            $validasi = $login->fetch(PDO::FETCH_OBJ);
                            $hitung = $validasi;
                            if(!($username) && !($password)){
                                echo "<script>alert('Anda Belum MENGISI Username dan Password')</script>";
                            }else if(!($password)){
                                echo "<script>alert('Password Tidak Boleh KOSONG')</script>";
                            }else if (!($username)) {
                                echo "<script>alert('Username Tidak Boleh KOSONG')</script>";
                            }
                            //Membaca Fungsi Login
                            // echo $username . $password;
                             //Memeriksa apakah ada data di temukan
                            else if($hitung){
                                $_SESSION['login']=$validasi->id_member;
                            echo "<script>window.location.replace('index.php')</script>";
                            }else{
                            echo "<script>window.alert('USERNAME atau PASSWORD tidak ditemukan!!!')</script>";
                            }
                        }?>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>

    </div>

</div>

</div>

</body>
</html>