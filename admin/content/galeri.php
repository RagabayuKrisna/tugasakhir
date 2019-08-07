<div class="container-fluid">
<div id="page-wrapper">

            
            <div class="row">
                    <!--  page header -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"> Galeri</h1>
            </div>
                    <!-- end  page header -->
            </div>
            <h1><a href="index.php?page=uploadgaleri";><button class="btn btn-primary">Upload Galeri</button></a></h1>
                <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Galery Gambar</h6>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <th>Id Galery</th>
                                            <th>Judul Galeri</th>
                                            <th>Keterangan</th>
                                            <th>Foto</th>
                                            <th>Validasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require_once '../pdo/Galeri.php';
                                            $galeri = new Galeri();
                                            $tampil = $galeri->read_galeri();
                                            while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                                        ?>
                                        <tr>
                                            <td><?= $data->id_galeri ?></td>
                                            <td><?= $data->judul_galeri ?></td>
                                            <td><?= $data->keterangan ?></td>
                                            <td><img src="../media/galery/<?=$data->foto_galeri ?>" style="width: 100px;height:100px" ></td>
                                            <td><a href="index.php?page=editgaleri&id_galeri=<?= $data->id_galeri ?>"><button class="btn btn-primary">Edit</button></a>&nbsp
                                                <a href="index.php?page=galeri&id_galeri=<?= $data->id_galeri ?>" onclick="confirm('yakin hapus?')"><button class="btn btn-danger">Hapus</button></a></td>
                                            
                                        </tr>
                                        <?php } ?>
                                        <?php
                                        if($_GET['id_galeri']){
                                        if(file_exists("../media/galery/" . $data->foto_galeri)){
                                        $stmt = $galeri->delete_galeri($_GET['id_galeri']);
                                        echo '<script>window.location.href = "index.php?page=galeri"</script>';
                                        }
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