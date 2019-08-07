<section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Daftar Booking</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li class="active">Tanggal Yang Sudah Terbooking</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- real wedding listing -->
  <section id="real-wedding-listing" class="real-wedding-listing">
  <div class="table-responsive" style="padding:20px">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <th>ID Booking</th>
                    <th>Tanggal</th>
                    <th>Nama Item</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Nomor Hp</th>
                    <th>Email</th>
                    <th>Keterangan</th>                  
                </tr>
            </thead>
            <tbody>
                <?php
                    require '../pdo/Booking.php';
                    $booking = new Booking();
                    $tampil = $booking->read_booking_2('2');
                    while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                ?>
                <tr>
                    <td><?= $data->id_boking ?></td>
                    <td><?= date('d-m-Y',strtotime($data->tanggal))?></td>
                    <td><?= $data->nama_item ?></td>
                    <td><?= $data->nama_lengkap ?></td>
                    <td><?= $data->alamat ?></td>
                    <td><?= $data->no_hp ?></td>
                    <td><?= $data->email ?></td>
                    <td><?= $data->keterangan_item ?></td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
  </section>
<!-- daftar_boking end -->