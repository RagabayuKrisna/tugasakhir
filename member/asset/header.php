<div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader --> 
<!--  top bar -->
  <section class="top-nav-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="top-text">Ratu Jawa Wedding Organizer</div>
        </div>
        <div class="col-sm-6">
          <div class="top-detail text-right">
            <ul>
              <li><a href="logout.php">Logout</a></li>
              <?php 
              $id_member = $_SESSION['login'];
              ?>
              <li><a href="keranjang" class="fa fa-cart-plus"></a></li>
              <li class="search-btn search-icon text-center">
                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
              </li>
              <li><a href="edituser" class="fa fa-user"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- search -->
      <div class="search">
        <div class="container">
          <input type="search" class="search-box" placeholder="Search"/>
          <a href="#" class="fa fa-times search-close"></a>
        </div>
      </div>
      <!-- end search -->
      <?php require '../pdo/User.php'?>
      <!-- login popup -->
      <!-- end login popup -->
      <!-- register popup -->
      <!-- end register popup -->
    </div>
  </section>
<!--  end top bar -->
<!--  navigation -->
  <header id="nav-bar" class="nav-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3">
          <!-- <div class="wedding-logo">
            <a href="index.php"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
          </div> -->
        </div>
        <div class="col-md-10 col-sm-9">
          <div class="navigation">
            <div id="cssmenu">
              <ul class="css-menu">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="paket">Paket</a></li> 
                <li><a href="tambahan">Tambahan</a></li>   
                <li><a href="profil">Profil</a></li>                         
                <li><a href="galeri">Galeri</a></li>
                <li><a href="boking">Daftar Boking</a></li>  
              </ul>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </header>