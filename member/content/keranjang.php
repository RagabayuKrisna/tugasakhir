
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Keranjang</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li class="active">Daftar Keranjang Anda</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- real wedding listing -->
  <section id="pricing-plan" class="pricing-plan-main-block">
    <div class="container">
          
            <div class="row">
            <?php
              require_once '../pdo/Keranjang.php';
              $keranjang = new Keranjang();
              $tampil = $keranjang->read_keranjang($_SESSION['login']);
              $jumlah=0;
              
              while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                
                $jml = $data->harga_item;
                $jumlah = $jml + $jumlah;
          ?>
              <div class="col-md-4 col-sm-6 mb-5" style="margin-bottom: 5%">
                <div class="pricing-table-block">
                  <div class="col-md-12 col-sm-6">
                    <div class="pricing-table-block">
                      <div class="pricing-table-img-section">
                        <img src="../media/cover/<?=$data->cover_item?>" class="img-responsive" alt="pricing-table-img">
                        <div class=""></div>
                        <div class="pricing-table-dtl">
                          
                        </div>
                      </div>
                      </div>
                    <div class="pricing-table-list">
                      <ul><h3 class=""><?=$data->nama_item?></h3></ul>
                      <ul>
                        <?= "Rp " . number_format($data->harga_item,2,',','.'); ?>
                        
                      </ul>
                      <form action="" method="get">
                      <a href="keranjang/<?=$data->id_keranjang?>" onclick="confirm('Yakin Untuk menghapus data?')">HAPUS</a>
                        </form>                     
                    </div>
                  </div>
                </div>
              </div>
        <?php } ?>
       <?php
        if(isset($_GET['id_keranjang'])){
          $keranjang->delete_item($_GET['id_keranjang']);
          echo "<script>window.location.replace('keranjang')</script>";
        }
       ?>
            </div>
            <div class="col-md-4 col-sm-6 mb-5" style="margin-bottom: 5%">
            <div class="">
        <ul> Jumlah = <?="Rp " . number_format($jumlah,2,',','.');?></ul>
        <ul></ul>
        </div>
       
    </div>
    <div>
     
     <label data-toggle="modal" data-target="#boking-modal" type="submit" class="btn btn-default btn-block" name="btnCetak" >Pesan Semua</label>
     <a href="index.php?page=tersedia" class="btn btn-default btn-block">Kembali</a>
     </div>
  </section>
 <center>
    
  </center>
  
  <div class="modal fade boking-model" id="boking-modal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title text-center">Cetak Bukti Booking</h5>
            </div>
            <div class="modal-body request-model-body">
              <form id="form_boking" action="cetak.php?direct=false" method="post">
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" id="f_name" placeholder="Budi Sudarsono....." name="nama"/></div> 
                  </div>  
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" id="l_name" placeholder="RT.01/RW.02 Ds. Tengeng....." name="alamat"/></div> 
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="">No.Telp</label>
                    <input type="text" class="form-control" id="l_name" placeholder="087788....." name="nohp"/></div> 
                  </div>  
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Budi@gmail....." name="email"/></div> 
                  </div>  
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Paket Silver A minus gaun....." id="l_name" name="item"/></div> 
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="">Tanggal</label>
                    <input type="date" class="form-control" placeholder="" id="l_name" name="tgl"/></div> 
                  </div>
                  <ul><button type="submit" class="btn-default" name="btnCetak" >Cetak</!--></ul>
                </form>
                <?php
                if(isset($_POST['btnCetak'])){
                            $id_keranjang = $data->id_keranjang;
                            $tanggal = $data->tanggal;
                            $id_member = $_SESSION['login'];
                            $nama_lengkap =  $_POST['nama'];
                            $alamat =  $_POST['alamat'];
                            $no_hp =  $_POST['nohp'];
                            $email =  $_POST['email'];
                            $patokan_rumah =  $_POST['patokan'];
                            $keterangan_item = $data->$nama_item;
                            $debug = $keranjang->create_boking($id_keranjang, $tanggal, $id_member, $nama_lengkap, $alamat, $no_hp, $email, $patokan_rumah, $keterangan_item);
                            print_r($debug);

                }
                            
            ?>
            </div>            
          </div>
        </div>
      </div>


<!-- Profil end -->
  