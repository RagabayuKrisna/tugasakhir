<?php if($_GET['page']=='epaket') { ?>
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Paket</h1>
          </div>
          <h1><a href="index.php?page=formPaket";><button class="btn btn-primary">Upload Paket</button></a></h1>
          

          <!-- Content Row -->
          <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Paket</h6>
                        </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <th>Kode Paket</th>
                                            <th>Kode Pelayanan</th>
                                            <th>Nama Paket</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Foto Cover</th>
                                            <th>Verifikasi Paket</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require_once '../pdo/Item.php';
                                            $paket = new Item();
                                            $tampil = $paket->read_paket();
                                            // print_r($detail);
                                            while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                                        ?>
                                        <tr>
                                            <td><?= $data->id_item ?></td>
                                            <td><?= $data->nama_pelayanan ?></td>
                                            <td><?= $data->nama_item ?></td>
                                            <td><?= $data->deskripsi ?></td>
                                            <td><?= "Rp " . number_format($data->harga_item,2,',','.'); ?></td>
                                            <td><img src="../media/cover/<?=$data->cover_item ?>" style="width: 100px;height:100px" ></td>
                                            <td><a href="index.php?page=formeditpaket&id_item=<?=$data->id_item ?>"><button class="btn btn-primary">Edit</button></a>&nbsp
                                                <a href="index.php?page=epaket&id_item=<?= $data->id_item ?>" onclick="confirm('Yakin Untuk menghapus data?')"><button class="btn btn-danger">Hapus</button></a>
                                            </td>
                                            
                                        </tr>
                                        <?php } ?>
                                        <?php
                                          if($_GET['id_item']){
                                            $paket = new Item();
                                            $stmt = $paket->delete_item($_GET['id_item']);
                                            echo '<script>window.location.href = "index.php?page=epaket"</script>';
                                          }
                                        ?>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            

            <!-- Pie Chart -->
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              

              <!-- Color System -->
              

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              

              <!-- Approach -->
              

            </div>
          </div>

        </div>
            <?php } else if ($_GET['page'] == 'formPaket') { ?>
              <div class="container">

  

  </div>
            <?php } ?>