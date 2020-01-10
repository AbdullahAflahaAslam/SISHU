<!DOCTYPE html> 
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/paper_dasbor/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/img/logo/logo_sishu.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>SISHU  - Baitullah</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/SBAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/SBAdmin/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
  <link href="<?php echo base_url(); ?>assets/SBAdmin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


  <!-- Dari Paper -->
   <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/paper_dasbor/assets/demo/demo.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/SHU_Bailtullah/">
        
        <div class="sidebar-brand-text mx-3"><img  height="50px" width="150px" src="<?php echo base_url() ?>assets/img/logo/logo_sishu3.png"   ></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- ADMIN Menu -->
      <?php if ($_SESSION['status']==3){?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link">
          <span>
            <small>Selamat Datang,</small>
            <br>
            <?php echo $nama ?> 
          </span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url ().'admin';?>">
          <i class="fas fa-fw fa fa-bank"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Menu 
      </div>
      <!-- Menu Grafik Peserta -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url ().'admin/Grafik';?>"   aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Grafik Peserta</span>
        </a>
      </li> -->
      <!-- Admin -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#DataAdmin" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-user"></i>
          <span>Data Admin</span>
        </a>
        <div id="DataAdmin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admin</h6>
            <a class="collapse-item" href="<?php echo base_url ().'admin/InputAdmin';?>">Tambah Admin</a> 
            <a class="collapse-item" href="<?php echo base_url ().'admin/DataAdmin';?>">Lihat  Data Admin</a>
          </div>
        </div>
      </li>
      <!-- Peserta -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#DataPeserta" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-users"></i>
          <span>Data Perserta</span>
        </a>
        <div id="DataPeserta" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Peserta Didik</h6>
            <a class="collapse-item" href="<?php echo base_url ().'admin/InputPeserta';?>">Tambah Peserta Didik</a> 
            <a class="collapse-item" href="<?php echo base_url ().'admin/DataPeserta';?>">Lihat  Data Peserta Didik</a>
          </div>
        </div>
      </li>
      <!-- Pengajar -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url ().'admin/DataPengajar';?>" data-toggle="collapse"  aria-expanded="true" aria-controls="collapseTwo" data-target="#DataPengajar">
          <i class="fas fa-fw fa fa-user"></i>
          <span>Data Pengajar</span>
        </a>
        <div id="DataPengajar" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pengajar</h6>
            <a class="collapse-item" href="<?php echo base_url ().'admin/InputPengajar';?>">Tambah Pengajar</a>
            <a class="collapse-item" href="<?php echo base_url ().'admin/DataPengajar';?>">Lihat Data Pengajar</a>
          </div>
        </div>
      </li>

      <!-- Daftar Hadir -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#DaftarHadir" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-check-square-o"></i>
          <span>Daftar Hadir</span>
        </a>
        <div id="DaftarHadir" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Daftar Hadir</h6>
            <!-- <a class="collapse-item" href="<?php echo base_url ().'admin/InputAbsen';?>">Tambah Daftar Hadir</a> -->
            <a class="collapse-item" href="<?php echo base_url ().'admin/DaftarHadir';?>">Lihat Daftar Hadir</a>
            <a class="collapse-item" href="<?php echo base_url ().'admin/CetakDaftarHadir';?>">Cetak Daftar Hadir</a>
          </div>
        </div>
      </li>

      <!-- Jadwal -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Jadwal" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-table"></i>
          <span>Jadwal</span>
        </a>
        <div id="Jadwal" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kegiatan Pembelajaran</h6>
            <a class="collapse-item" href="<?php echo base_url ().'admin/InputJadwal';?>">Tambah Kegiatan</a>
            <a class="collapse-item" href="<?php echo base_url ().'admin/Jadwal';?>">Lihat Jadwal</a>
          </div>
        </div>
      </li>

      <!-- Materi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Materi" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-book"></i>
          <span>Materi</span>
        </a>
        <div id="Materi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Materi Pembelajaran</h6>
            <a class="collapse-item" href="<?php echo base_url ().'admin/InputMateri'; ?>">Tambah Materi</a>          
            <a class="collapse-item" href="<?php echo base_url ().'admin/Kategori'; ?>">Lihat Materi</a>
          </div>
        </div>
      </li>

       <!-- Kelas -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Kelas" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-graduation-cap"></i>
          <span>Kelas</span>
        </a>
        <div id="Kelas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelas</h6>
            <a class="collapse-item" href="<?php echo base_url ().'admin/InputKelas'; ?>">Tambah Kelas</a>          
            <a class="collapse-item" href="<?php echo base_url ().'admin/Kelas'; ?>">Lihat Kelas</a>
          </div>
        </div>
      </li>

      <!-- Lokasi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Lokasi" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-map-marker"></i>
          <span>Lokasi</span>
        </a>
        <div id="Lokasi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lokasi Kegiatan</h6>
            <a class="collapse-item" href="<?php echo base_url ().'admin/InputLokasi  ';?>">Tambah Lokasi</a>
            <a class="collapse-item" href="<?php echo base_url ().'admin/Lokasi  ';?>">Lihat Lokasi</a>
          </div>
        </div>
      </li>
     
      <!-- Heading -->
      <div class="sidebar-heading">
        Pengaturan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Notifikasi" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-paper-plane"></i>
          <span>Kirim Notifikasi</span>
        </a>
        <div id="Notifikasi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Notification</h6>
            <a class="collapse-item" href="<?php echo base_url ().'admin/InputNotifikasi  ';?>">Kirim Pengumuman</a>
          </div>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="modal" data-target="#logoutModal" href="">
          <i class="fas fa-fw fa fa-power-off"></i>
          <span>Logout</span>
        </a>
      </li>






      <!-- /////////////////////////////////////////////////////// MENU UNTUK USER -->
    
      <?php }else{?>
<!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link">
          <span>
            <small>Selamat Datang,</small>
            <br>
            <?php echo $nama ?>  
          </span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url ().'user/';?>">
          <i class="fas fa-fw fa fa-bank"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Menu 
      </div>
      

      <!-- Menu Grafik Peserta -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url ().'user/Profile';?>"   aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
     
      <!-- Pengajar -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url ().'user/DataPengajar';?>"   aria-expanded="true" aria-controls="collapseTwo" >
          <i class="fas fa-fw fa fa-user"></i>
          <span>Data Pengajar</span>
        </a>
      </li>


      <!-- Jadwal -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url ().'user/Jadwal';?>"  data-target="" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-table"></i>
          <span>Jadwal</span>
        </a>
      </li>

      <!-- Materi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url ().'user/Kategori';?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-book"></i>
          <span>Materi</span>
        </a>
      </li>

      <!-- Lokasi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url ().'user/Lokasi  ';?>"  data-target="" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa fa-map-marker"></i>
          <span>Lokasi</span>
        </a>
      </li>
     
      <!-- Heading -->
      <div class="sidebar-heading">
        Pengaturan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa fa-power-off"></i>
          <span>Logout</span>
        </a>
      </li>
      <?php } ?> 
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">



            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nama ?>  </span>
                <?php 
                  if (empty($photo)){
                ?>
                <img class="img-profile rounded-circle" src="<?php echo base_url() ?>assets/img/photo/default.jpg" alt="...">
                <?php 
                  }else{
                ?>
                <img class="img-profile rounded-circle" src="<?php echo base_url().'file/'.$_SESSION['sesId'].'/'.$_SESSION['photo'] ?>" alt="...">
                <?php 
                  }
                ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <?php if ($_SESSION['status']!=3){?>
                <a class="dropdown-item" href="<?php echo base_url ().'user/Profile';?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <a class="dropdown-item" href="<?php echo base_url ().'User/Setting';?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Pengaturan
                </a>
                 <a class="dropdown-item" href="<?php echo base_url ().'user/Log';?>">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Log Aktifitas
                </a>
                <?php if ($_SESSION['status'] != 2){?>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url ().'user/Kelengkapan';?>">
                    <i class="fa fa-cloud-upload fa-sm fa-fw mr-2 text-gray-400"></i>
                  Unggah Kelengkapan Data
                  </a>
                <?php }?>
               <?php }else{?>
                <a class="dropdown-item" href="<?php echo base_url ().'Admin/Setting';?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Pengaturan
                </a>
                 <a class="dropdown-item" href="<?php echo base_url ().'user/Log';?>">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Log Aktifitas
                </a>
                
                <?php }?>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Sekolah Haji dan Umrah <small>Baitullah </small></h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>



          <!-- Content Row -->

          <?php echo $contents; ?>


        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span> &copy; 2019. Sistem Sekolah Haji dan Umrah</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url ().'Auth/logout';?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/SBAdmin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/SBAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/SBAdmin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/SBAdmin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/SBAdmin/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/SBAdmin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/SBAdmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/SBAdmin/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/SBAdmin/js/demo/chart-pie-demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/SBAdmin/js/demo/chart-bar-demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/SBAdmin/js/demo/datatables-demo.js"></script>



  <!-- Dari Paper -->
  <!--   Core JS Files   -->
  <!--<script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>-->
   <!--  Notifications Plugin    -->
  <!--<script src="<?php echo base_url(); ?>assets/paper_dasbor/assets/js/plugins/bootstrap-notify.js"></script>-->
</body>

</html>
