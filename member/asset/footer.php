
    <div class="copyright-block text-center">
     <?php
              require_once '../pdo/Profil.php';
              $profil = new Profil();
              $tampil = $profil->read_profil();
              $data = $tampil->fetch(PDO::FETCH_OBJ);

          ?>
    <ul class="social-btns">
        <li><a class="btn facebook" href="<?=$data->fb?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a class="btn twitter" href="<?=$data->ig?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a class="btn google" href="<?=$data->email?>" target="_blank"><i class="fa fa-google"></i></a></li>
    </ul>
      <div class="container">
        <p>&copy; Ratu Jawa Wedding Organizer</p>
      </div>
    </div>
