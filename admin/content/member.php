<div class="container-fluid">
<div id="page-wrapper">

            
            <div class="row">
                    <!--  page header -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Member</h1>
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
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Member</h6>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <th>Nomor Hp</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Password</th>
                                            <th>Verifikasi Akun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require_once '../pdo/User.php';
                                            $user = new User();
                                            $tampil = $user->read_member_diadmin();
                                            while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                                        ?>
                                        <tr>
                                            <td><?= $data->no_hp ?></td>
                                            <td><?= $data->nama ?></td>
                                            <td><?= $data->username ?></td>
                                            <td><?= $data->email ?></td>
                                            <td><?= $data->alamat ?></td>
                                            <td><?= $data->password ?></td>
                                            <td><a href="index.php?page=member"><button class="btn btn-primary">Edit</button></a>&nbsp
                                                <a href="index.php?page=member&id_member=<?= $data->id_member ?>" onclick="confirm('yakin hapus?')"><button class="btn btn-danger">Hapus</button></a></td>
                                            
                                        </tr>
                                        <?php } ?>
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