
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
                            <h1 class="h4 text-gray-900 mb-4">Hello!</h1>
                        </div>
                        <form action="" method="post">
                        <div class="form-group">
                            <input type="number" class="form-control" name="no_hp" placeholder="Masukkan Nomor Telepon Anda"/>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda"/>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username"/>
                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda"/>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Anda"/>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password"/>
                            <input type="hidden" class="form-control" name="status_aktif" placeholder="Masukkan Password"/>
                        </div>
                        <button type="submit" class="btn btn-default btn-block" onclick="confirm('Harap Login kembali menggunakan Username dan Password Anda')" name="btnRegistrasi">Daftar</button>
                        <a href="login.php"  class="btn btn-default btn-block" style="color:white">Batal</a>
                        </form>
                        <?php 
                            if(isset($_POST['btnRegistrasi'])){
                            require '../pdo/User.php';
                            $addmember = new User();
                            $no_hp = $_POST['no_hp'];
                            $nama = $_POST['nama'];
                            $username = $_POST['username'];
                            $email = $_POST['email'];
                            $alamat = $_POST['alamat'];
                            $password = md5($_POST['password']);
                            // echo $username;
                            
                            
                           
                                if(!($no_hp) && !($nama) && !($username) && !($email) && !($alamat) && !($password)){
                                    echo "<script>window.alert('Data Harus di isi semua')</script>";
                                }else if(!($no_hp)){
                                    echo "<script>window.alert('Data ada yang kosong harap diisi')</script>";
                                }else if(!($nama)){
                                    echo "<script>window.alert('Data ada yang kosong harap diisi')</script>";
                                }else if(!($username)){
                                    echo "<script>window.alert('Data ada yang kosong harap diisi')</script>";
                                }else if(!($email)){
                                    echo "<script>window.alert('Data ada yang kosong harap diisi')</script>";
                                }else if(!($alamat)){
                                    echo "<script>window.alert('Data ada yang kosong harap diisi')</script>";
                                }else if(!($alamat)){
                                    echo "<script>window.alert('Data ada yang kosong harap diisi')</script>";
                                }else if(!($password)){
                                    echo "<script>window.alert('Data ada yang kosong harap diisi')</script>";
                                }else{
                                    $add = $addmember->create_member($no_hp, $nama, $username, $email, $alamat, $password);
                                        print_r($add);
                                        echo "<script>window.location.replace('login.php')</script>"
                                        ;
                                }
                            }
                        ?>
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