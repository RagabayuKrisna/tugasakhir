<section class="s-content">
     
     <div class="row">
         <div class="col-four">
             <img src="../media/foto/<?= $_SESSION['foto'] ?>" alt="">
             <form action="" method="post" enctype="multipart/form-data">
                 <input type="file" name="foto" id="">
                 <input type="submit" value="Ganti Foto" name="GantiFoto">
             </form>
             <?php
                require '../pdo/Member.php';
                if(isset($_POST['GantiFoto'])){
                    $username = $_SESSION['username'];
                    $foto = $_FILES['foto']['name'];
                    $tmp_foto =  $_FILES['foto']['tmp_name'];
                    $acak = round(microtime(true));
                    $nama_foto = $acak.$foto;
                    $lokasi = "../media/foto/".$nama_foto;
                    if(move_uploaded_file($tmp_foto, $lokasi)){
                        $member = new Member();
                        //Cek Apa Sudah ada Fotonya?
                        $tampil = $member->read_foto($username);
                        $count = $tampil->rowCount();
                        if($count == 1){
                            $simpan = $member->ganti_foto($username, $nama_foto);
                            $_SESSION['foto'] = $nama_foto;
                            echo "<script>window.location.replace('index.php?page=profil')</script>";
                        }else{
                            $simpan = $member->tambah_foto($username, $nama_foto);
                            $_SESSION['foto'] = $nama_foto;
                            echo "<script>window.location.replace('index.php?page=profil')</script>";
                        }
                    }
                }
             ?>
         </div>
         <a href="../admin/index.php?page=tambah-req-ebook" style="margin-left:20px"><button class="btn btn-primary">Tambah Paket Baru</button></a>
         <div class="col-eight">
             <table>
                 <tbody>
                     <tr>
                        <td>Nama</td>
                        <?php if($_GET['edit']!='nama'){ ?>
                        <td><?php session_start(); echo $_SESSION['nama'];?></td>
                        <td><a href="index.php?page=profil&edit=nama"><i class="fa fa-pencil"></i></a></td>
                        <?php }elseif($_GET['edit']=='nama'){ ?>
                        <td><form action="" method="post"><input type="text" name="nama" placeholder="Input Nama baru" id="" class="col-tenx"></form></td>
                        <td><a href="index.php?page=profil"><i class="fa fa-ban"></i></a></td>
                        <?php } ?>
                     </tr>
                     <tr>
                        <td>Username</td>
                        <?php if($_GET['edit']!='username'){ ?>
                        <td><?php echo $_SESSION['username'];?></td>
                        <td><a href="index.php?page=profil&edit=username"><i class="fa fa-pencil"></i></a></td>
                        <?php }elseif($_GET['edit']=='username'){ ?>
                        <td><form action="" method="post"><input type="text" name="username" placeholder="Input Username baru" id="" class="col-tenx"></form></td>
                        <td><a href="index.php?page=profil"><i class="fa fa-ban"></i></a></td>
                        <?php } ?>
                     </tr>
                     <?php
                        $member = new Member();
                        $tampil = $member->read_username($_SESSION['username']);
                        foreach($tampil as $data){}
                     ?>
                     <tr>
                        <td>Email</td>
                        <?php if($_GET['edit']!='email'){ ?>
                        <td><?php echo $data['email'];?></td>
                        <td><a href="index.php?page=profil&edit=email"><i class="fa fa-pencil"></i></a></td>
                        <?php }elseif($_GET['edit']=='email'){ ?>
                        <td><form action="" method="post"><input type="text" name="email" placeholder="Input Email baru" id="" class="col-ten"></form></td>
                        <td><a href="index.php?page=profil"><i class="fa fa-ban"></i></a></td>
                        <?php } ?>
                     </tr>
                     <tr>
                        <td>Prodi</td>
                        <?php if($_GET['edit']!='prodi'){ ?>
                        <td><?php echo $data['prodi'];?></td>
                        <td><a href="index.php?page=profil&edit=prodi"><i class="fa fa-pencil"></i></a></td>
                        <?php }elseif($_GET['edit']=='prodi'){ ?>
                        <td><form action="" method="post"><input type="text" name="prodi" placeholder="Input Prodi baru" id="" class="col-ten"></form></td>
                        <td><a href="index.php?page=profil"><i class="fa fa-ban"></i></a></td>
                        <?php } ?>
                     </tr>
                     <tr>
                        <td>Password</td>
                        <?php if($_GET['edit']!='password'){ ?>
                        <td><?php echo '*******';?></td>
                        <td><a href="index.php?page=profil&edit=password"><i class="fa fa-pencil"></i></a></td>
                        <?php }elseif($_GET['edit']=='password'){ ?>
                        <td><form action="" method="post"><input type="password" name="password" placeholder="Input Password baru" id="" class="col-ten"></form></td>
                        <td><a href="index.php?page=profil"><i class="fa fa-ban"></i></a></td>
                        <?php } ?>
                     </tr>
                 </tbody>
                 <?php
                    if(isset($_POST['nama'])){
                        $nilai = $_POST['nama'];
                        $username = $_SESSION['username'];
                        $member = new Member();
                        $bagian = 'nama';
                        $simpan = $member->update($bagian, $nilai, $username);
                        $_SESSION['nama'] = $nilai;
                        echo "<script>window.location.replace('index.php?page=profil')</script>";
                    }elseif(isset($_POST['username'])){
                        $nilai = $_POST['username'];
                        $username = $_SESSION['username'];
                        $member = new Member();
                        $bagian = 'username';
                        $simpan = $member->update($bagian, $nilai, $username);
                        $_SESSION['username'] = $nilai;
                        echo "<script>window.location.replace('index.php?page=profil')</script>";
                    }elseif(isset($_POST['email'])){
                        $nilai = $_POST['email'];
                        $username = $_SESSION['username'];
                        $member = new Member();
                        $bagian = 'email';
                        $simpan = $member->update($bagian, $nilai, $username);
                        //$_SESSION['username'] = $nilai;
                        echo "<script>window.location.replace('index.php?page=profil')</script>";
                    }elseif(isset($_POST['prodi'])){
                        $nilai = $_POST['prodi'];
                        $username = $_SESSION['username'];
                        $member = new Member();
                        $bagian = 'prodi';
                        $simpan = $member->update($bagian, $nilai, $username);
                        //$_SESSION['username'] = $nilai;
                        echo "<script>window.location.replace('index.php?page=profil')</script>";
                    }elseif(isset($_POST['password'])){
                        $nilai = $_POST['password'];
                        $username = $_SESSION['username'];
                        $member = new Member();
                        $bagian = 'password';
                        $simpan = $member->update($bagian, $nilai, $username);
                        //$_SESSION['username'] = $nilai;
                        echo "<script>window.location.replace('index.php?page=profil')</script>";
                    }
                 ?>
             </table>
         </div>
     </div>
     

</section>