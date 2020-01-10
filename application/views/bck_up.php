<!DOCTYPE html>



<html lang="en">



  <head>



    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



    <!-- Meta, title, CSS, favicons, etc. -->



    <meta charset="utf-8">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/favicon.png">


 




    <title>SISHU </title>



    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/img/logo_sishu.png">



    <!-- Bootstrap -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- Font Awesome -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">



    <!-- NProgress -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/nprogress/nprogress.css" rel="stylesheet">



    <!-- iCheck -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/table.css" rel="stylesheet">



  



    <!-- bootstrap-progressbar -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">



    <!-- JQVMap -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>



    <!-- bootstrap-daterangepicker -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">



    <link rel="icon" type="image/png" sizes="16x16" href="">



    <!-- Custom Theme Style -->



    <link href="<?php echo base_url(); ?>assets/user/build/css/custom.min.css" rel="stylesheet">



  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" >
              <img  height="50px" width="150px" src="<?php echo base_url() ?>assets/img/logo_sishu2.png"  style="margin: 10px" >
                             
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php 
                  if (empty($photo)){
                ?>
                  <img height="55px" width="50" src="<?php echo base_url() ?>assets/img/photo/default.jpg" alt="..." class="img-circle profile_img">
                <?php 
                  }else{
                ?>
                  <img height="55px" width="50" src="<?php echo base_url() ?>assets/img/photo/<?php echo $photo ?>" alt="..." class="img-circle profile_img">
                <?php 
                  }
                ?>

              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $nama ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home</span></a>
                  </li>
                  <li><a><i class="fa fa-user"></i> Profile </span></a>
                  </li>
                  <li><a><i class="fa fa-table"></i> Jadwal</span></a>
                  </li>
                  <li><a><i class="fa fa-book"></i> Materi</span></a>
                  </li>
                  <li><a><i class="fa fa-university"></i> Lokasi</span></a>
                  </li>
                  <li><a href="<?php echo base_url ().'auth/logout';?>"><i class="fa fa-power-off"></i>Logout </a>
                   </li>
                </ul>
              </div>
              
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $nama ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span>Settings Account</span>
                      </a>
                    </li>
                    <!-- <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">

            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sekolah Haji dan Umrah <small>Baitullah Rubaiyat</small></h2>
                    <div class="filter">
                       <div id="calndar" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="fa fa-calendar"></i>
                        <span><?php echo date('Y-m-d')?></span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php echo $contents; ?>
                  </div>
                </div>
              </div>
            </div>



            



            
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <a href=""> SISHU | Sistem Informasi Sekolah Haji dan Umrah</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <script src="<?php  echo base_url(); ?>assets/user/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php  echo  base_url(); ?>assets/user/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php  echo  base_url(); ?>assets/user/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php  echo  base_url(); ?>assets/user/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php  echo  base_url(); ?>assets/user/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/Flot/jquery.flot.resize.js"></script>
   <!-- Flot plugins -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo  base_url(); ?>assets/user/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/moment/min/moment.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php  echo base_url(); ?>assets/user/build/js/custom.min.js"></script>


</html>



