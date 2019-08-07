<?php
session_start();
if(isset($_SESSION['loginadmin'])){
?>
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
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <script src="js/jquery.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'asset/sidebar.php' ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <!-- Topbar -->
      <?php include 'asset/header.php' ?>
      <!-- End of Topbar -->

      <?php 
            error_reporting(0);
            if(empty($_GET)){
              include 'content/berandaadmin.php';
            }else{
              if($_GET['page']=='beranda'){
                include 'content/berandaadmin.php';
              }elseif($_GET['page']=='epaket'){
                  include 'content/epaket.php';
              }elseif($_GET['page']=='member'){
                include 'content/member.php';
              }elseif($_GET['page']=='formPaket'){
                include 'content/formuploadpaket.php';
                echo '<script src="rupiah.js"></script>';
              }elseif($_GET['page']=='formeditpaket'){
              include 'content/formeditpaket.php';
              }elseif($_GET['page']=='tambahan'){
                  include 'content/tambahan.php';
              }elseif($_GET['page']=='formuploadtambahan'){
                include 'content/formuploadtambahan.php';
              }elseif($_GET['page']=='formedittambahan'){
                include 'content/formedittambahan.php';
              }elseif($_GET['page']=='hubungi'){
                  include 'content/hubungi.php';
              }elseif($_GET['page']=='galeri'){
                include 'content/galeri.php';
              }elseif($_GET['page']=='booking'){
                  include 'content/booking.php';
              }elseif($_GET['page']=='uploadgaleri'){
                include 'content/uploadgaleri.php';
              }elseif($_GET['page']=='editgaleri'){
                include 'content/editgaleri.php';
              }elseif($_GET['page']=='editprofilrj'){
                include 'content/editprofilrj.php';
              }elseif($_GET['page']=='sah'){
                include 'content/form_tanda_bukti.php';
              }elseif($_GET['page']=='daftar_boking'){
                include 'content/daftarboking.php';
            }
           }
            // if($_GET['page']=='kiriman'){
            //     include 'content/kiriman.php';
            // }
        ?>

        
        <!-- Begin Page Content -->
        <?php include 'asset/content/beranda.php' ?>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'asset/footer.php' ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
Pilih "Logout" di bawah ini jika Anda yakin untuk mengakhiri sesi Anda saat ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php } else {
  echo "<script>window.location.replace('login.php')</script>";
}
?>