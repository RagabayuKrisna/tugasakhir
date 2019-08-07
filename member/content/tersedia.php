<section id="page-banner" class="page-banner"> 
<center>
<div class="container">
<h2 class="call-out-heading">Pilih Layanan Yang Tersedia</h2>
<?php 
date_default_timezone_set('asia/jakarta');
if(!empty($_POST['tanggal'])){
    $_SESSION['tanggal'] = $_POST['tanggal'];
}
$tanggalPilih = date('Y-m-d', strtotime($_SESSION['tanggal']));
$tanggalSekarang = date('Y-m-d');


if($tanggalPilih <= $tanggalSekarang){
    echo "<script>alert('Tanggal Tidak Bisa di Pilih/ Belum Di Pilih')</script>";
    echo "<script>window.location.href='http://localhost/ta/member/'</script>";
}else {
    
?>
<div class="manage-item-listing-block">
        <table>
        <tr class="top-heading-row">
        <th>Image</th>
        <th>Layanan</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Action</th>
        </tr>

        <?php
        
            require_once '../pdo/Booking.php';
            $boking = new Booking();
            $tanggal = $_POST['tanggal'];
            // $tampil = $boking->read_tanggal($tanggal);
            // $data = $tampil->fetch(PDO::FETCH_OBJ);
            // if($data){
            //     if($data->id_item == $ambilDataitem->id_item){
            //     }
            // }else{
                $ambilkeranjang = $boking->read_item($_SESSION['login'], $tanggal);
                //print_r($ambilkeranjang);
                while($keranjang = $ambilkeranjang->fetch(PDO::FETCH_OBJ)){
                    ?>
                    <tr>
                        <td><img src="../media/cover/<?=$keranjang->cover_item?>" style="width: 100px;height:100px"></td>
                        <td><?=$keranjang->nama_pelayanan?></td>
                        <td><?=$keranjang->nama_item?></td>
                       <td><?php
                          if(strlen($keranjang->deskripsi)>20){
                            echo substr($keranjang->deskripsi, 0, 20) . " <a href='detailitem/$keranjang->id_item'>Detail Paket</a>";
                          }else{
                            echo $keranjang->deskripsi;
                          }
                          
                        ?></td>
                        <td><?="Rp " . number_format($keranjang->harga_item,2,',','.');?></td>
                        <td class="action-icons">
                        <div class="table-editable-icon">
                        <ul><label data-toggle="modal" data-target="#boking-modal" type="submit" class="btn-default" data-idbarang="<?=$keranjang->id_item?>" name="btnCetak" >Pesan</label></ul>
                        <a href="../member/content/proseskeranjang.php?id_item=<?=$keranjang->id_item?>&tanggalboking=<?=$tanggalPilih?>"><i class="fa fa-cart-plus"aria-hidden="true"  onclick="confirm('Barang Sudah Masuk ke Keranjang')"></i></a>
                        <!-- <i href=""><i class="fa fa-search" aria-hidden="true"></i></a> -->
                        </div>
                        </td>
                        
                    </tr>
                   
                            
                <?php
                    }
            ?>


    </table>
     <!-- <div class="pagination">
                      <ul>
                        <li class="active"><a href="#" class="btn btn-default">1</a></li>
                        <li><a href="#" class="btn btn-default">2</a></li>
                        <li><a href="#" class="btn btn-default">3</a></li>
                        <li><a href="#" class="btn btn-default">4</a></li>
                      </ul>
                    </div> -->
    </div>
    
</div>
</center>
</section>
        <?php } ?>

      <div class="modal fade boking-model" id="boking-modal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title text-center">Cetak Bukti Booking</h5>
            </div>
            <div class="modal-body request-model-body ">
              <form id="form_boking" action="cetak.php?direct=true" method="post">
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="" >Nama</label>
                    <input type="hidden" name="id_barang" id="id_barang">
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
                    <label for="">Keterangan</label>
                    <input type="text" class="form-control" placeholder="Paket Silver A minus gaun....." id="l_name" name="item"/></div> 
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <label for="">Tanggal</label>
                    <input type="date" class="form-control" placeholder="" id="l_name" name="tgl"/></div> 
                  </div>
                  <ul><button type="submit" class="btn-default" name="btnCetak" >Cetak</!--></ul>
                    
                </form>
            </div>            
          </div>
        </div>
      </div>
      <script>
        $('#boking-modal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_barang = button.data('idbarang')
          $('#id_barang').val(id_barang);
        });
      </script>
      <?php 
// $tampil = $boking->read_paket_detail();
// $data = $tampil->fetch(PDO::FETCH_OBJ);
?>
  <div class="modal fade view-model" id="view-modal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title text-center">Detail</h5>
            </div>
            <div class="modal-body request-model-body text-center">
              <form id="register-form" action="#">
                <div class="form-group">
                <h3 class="modal-title text-center"><?=$data->deskripsi?></h3>
                </div>
                </div>
                <button type="submit" name=btnSelesai class="btn btn-default">Selesai</button>
                  <!-- <input type="number" class="form-control" name="no_hp" placeholder="Masukkan Nomor Telepon Anda"/>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda"/>
                  <input type="text" class="form-control" name="username" placeholder="Masukkan Username"/>
                  <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda"/>
                  <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Anda"/>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password"/> -->
                </div>
              </form>
            
            </div>            
          </div>
        </div>
      </div>