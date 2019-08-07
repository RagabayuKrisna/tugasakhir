<div class="container-fluid">
<div id="page-wrapper">
            <div class="row">
                    <!--  page header -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">  Booking</h1>
            </div>
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
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Booking</h6>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <th>ID Booking</th>
                                            <th>Tanggal</th>
                                            <th>Nama Lengkap</th>
                                            <th>Alamat</th>
                                            <th>Nomor Hp</th>
                                            <th>Email</th>
                                            <th>Keterangan</th>
                                            <th>Validasi Booking</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require '../pdo/Booking.php';
                                            $booking = new Booking();
                                            $tampil = $booking->read_booking('1');
                                            while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                                        ?>
                                        <tr>
                                            <td><?= $data->id_boking ?></td>
                                            <td><?= $data->tanggal ?></td>
                                            <td><?= $data->nama_lengkap ?></td>
                                            <td><?= $data->alamat ?></td>
                                            <td><?= $data->no_hp ?></td>
                                            <td><?= $data->email ?></td>
                                            <td><?= $data->keterangan_item ?></td>
                                            
                                            <td><a href="index.php?page=sah&id_boking=<?= $data->id_boking ?>&status=2" onclick="confirm('Uang Muka Telah Di Bayar')"><button class="btn btn-primary" name="btnSah">Dibayar</button></a>&nbsp
                                                <a href="index.php?page=sah&id_boking=<?= $data->id_boking ?>" onclick="confirm('Permintaan di Hapus?')" ><button class="btn btn-danger">Hapus</button></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <?php
                                        
                                             if(isset($_GET['id_boking'])){                  
                                                $status_aktif = $_GET['status'];
                                                $id_boking =$_GET['id_boking'];
                                                $debug = $booking->update_status($status_aktif, $id_boking);
                                                print_r($debug);
                                                echo "<script>window.location.replace('index.php?page=sah')</script>";
                                              }
                                          ?>
                                          <?php
                                                if($_GET['btnHapus']){
                                                    $id_boking =$_GET['id_boking'];
                                                    $debug = $booking->delete_boking($id_boking);
                                                    // var_dump($id_boking);
                                                    die;
                                                    echo '<script>window.location.href = "index.php?page=sah"</script>';
                                                }
                                          ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
</div>