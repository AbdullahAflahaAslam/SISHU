<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/paper_dasbor/assets/img/apple-icon.png">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/img/logo/logo_sishu.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SISHU
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/paper_dasbor/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/paper_dasbor/assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/paper_dasbor/assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
      <!--   <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?php echo base_url(); ?>assets/paper_dasbor/assets/img/logo-small.png">

          </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">

          Creative Tim
          <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div>
        </a> -->
      <br>
      <img  height="50px" width="150px" src="<?php echo base_url() ?>assets/img/logo/logo_sishu3.png"   >
      <br>
      <br>
      </div>
      <div class="logo">
        <div class="row logo-image-small">
          <div class="col-md-3 col-3">
            <div class="avatar">
               <?php 
                  if (empty($photo)){
                ?>
              <img class="img-circle img-no-padding img-responsive" src="<?php echo base_url() ?>assets/img/photo/default.jpg" alt="...">
              <?php 
                  }else{
                ?>
              <img class="img-circle img-no-padding img-responsive" src="<?php echo base_url() ?>file/PhotoProfile/<?php echo $photo ?>" alt="...">
                <?php 
                  }
                ?>
            </div>
          </div>
          <div class="col-md-8 col-8">
            <span class="text-muted">
            <small>Welcome,</small>
            </span>
            <br>
            <?php echo $nama ?>           
          </div>
        </div>
      </div>


      <div class="sidebar-wrapper">
        <ul class="nav">
<!--           <li class="active "> -->
           
               <!-- Admin Menu -->
          <?php if ($_SESSION['status']==3){?>
          <li>
            <a href="<?php echo base_url ().'admin/admin';?>">
              <i class="nc-icon nc-bank"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'admin/DataPeserta';?>">
              <i class="fa fa-user"></i>
              <p>Data Perserta</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'admin/DataPengajar';?>">
              <i class="fa fa-user"></i>
              <p>Data Pengajar</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'admin/InputAbsen';?>">
              <i class="fa fa-check-square-o"></i>
              <p>Input Absensi</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'admin/Jadwal';?>">
              <i class="fa fa-table"></i>
              <p>Jadwal</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'admin/Materi';?>">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Materi</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'admin/Lokasi  ';?>">
              <i class="nc-icon nc-pin-3"></i>
              <p>Lokasi</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'auth/logout';?>">
              <i class="fa fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>

          <!-- Peserta Didik Menu -->       
           <?php }elseif($_SESSION['status']==1){?>
           <li>
            <a href="<?php echo base_url ().'user/';?>">
              <i class="nc-icon nc-bank"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'user/Profile';?>">
              <i class="fa fa-user"></i>
              <p>Profile</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'user/Jadwal';?>">
              <i class="fa fa-table"></i>
              <p>Jadwal</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'user/DataPengajar';?>">
              <i class="fa fa-user"></i>
              <p>Data Pengajar</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'user/Materi';?>">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Materi</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'user/Lokasi  ';?>">
              <i class="nc-icon nc-pin-3"></i>
              <p>Lokasi</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url ().'auth/logout';?>">
              <i class="fa fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>
          <?php } ?> 
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Sekolah Haji dan Umrah <small>Baitullah Rubaiyat</small></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink3q1">
                  <a class="dropdown-item" href="<?php echo base_url ().'User/Setting';?>">Setting</a>
                  <a class="dropdown-item" href="<?php echo base_url ().'auth/logout';?>">Logout</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">
  
  <canvas id="bigDashboardChart"></canvas>
  
  
</div> -->
       <div class="content">
      <?php echo $contents; ?>
        </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://shubaitullahrubaiyat.id" target="_blank">Baitullah Rubaiyat</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, Sistem Sekolah Haji dan Umrah
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>


 <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>