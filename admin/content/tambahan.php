<div class="container-fluid">
<div id="page-wrapper">

            
            <div class="row">
                    <!--  page header -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"> Tambahan</h1>
            </div>
                    <!-- end  page header -->
            </div>
            <h1><a href="index.php?page=formuploadtambahan";><button class="btn btn-primary">Upload Tambahan</button></a></h1>
                <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Tambahan</h6>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <th>Kode Tambahan</th>
                                            <th>Kode Pelayanan</th>
                                            <th>Nama Tambahan</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Cover</th>
                                            <th>Verifikasi Tambahan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require_once '../pdo/Item.php';
                                            $tambahan = new Item();
                                            $tampil = $tambahan->read_tambahan();
                                            while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                                        ?>
                                        <tr>
                                            <td><?= $data->id_item ?></td>
                                            <td><?= $data->nama_pelayanan ?></td>
                                            <td><?= $data->nama_item ?></td>
                                            <td><?=  "Rp " . number_format($data->harga_item,2,',','.'); ?></td>
                                            <td><?= $data->deskripsi ?></td>
                                            <td> <img src="../media/cover/<?=$data->cover_item ?>" style="width: 100px;height:100px" > </td>
                                            <td><a href="index.php?page=formedittambahan&id_item=<?= $data->id_item ?>"><button class="btn btn-primary">Edit</button></a>&nbsp
                                                <a href="index.php?page=tambahan&id_item=<?= $data->id_item ?>" onclick="confirm('yakin hapus?')"><button class="btn btn-danger">Hapus</button></a></td>
                                            
                                        </tr>
                                        <?php } ?>
                                        <?php
                                          if($_GET['id_item']){
                                            $stmt = $tambahan->delete_item($_GET['id_item']);
                                            echo '<script>window.location.href = "index.php?page=tambahan"</script>';
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