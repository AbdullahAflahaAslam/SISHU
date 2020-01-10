<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/logo/logo_sishu.png">
    <title>SHU Baitullah</title>
    <meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
    <meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/assets/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/assets/css/slick-theme.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/assets/css/helpers.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/assets/css/landing-2.css">

     <style>
        #image { 
            background-image: url(<?php echo base_url(); ?>/assets/img/bg_login.jpg); 
            width: 100%;
        }
        @media only screen and (max-width: 320px) {
            #image { 
                background-image: url(<?php echo base_url(); ?>/assets/img/bg_login.jpg); 
                width: 100%;
            }
        }
        </style>
  </head>
  <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    
    <!-- END nav -->
   
    
     <?php
      if(!isset($_SESSION['status'])){
      ?>
      
    <section class="pb_sm_py_cover" id="image"  >
      <div class="container">
        <div class="row  align-items-center justify-content-right">
          <div class="col-md-4">
            
          </div>
          <div class="col-md-3">
            <div class="sub-heading">

              <p class="mb-4 pull-right">
             <!-- <img src="<?php echo base_url(); ?>/assets/img/bg_login.jpg">  -->
                <a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="<?php echo base_url(); ?>auth/signup" class="to_register"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">Create Account</span></a>
              </p>
              <p class="mb-4 pull-right">
                <a class="btn btn-danger btn-lg pb_btn-pill smoothscroll" href="#ForgetPassModal" class="to_register" data-toggle="modal"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">Forget Password</span></a>
              </p>
            </div>
          </div>
          <div class="col-md-5 align-items-right justify-content-center">
             <form form method="POST" action="<?php echo base_url() ?>auth/login" class="bg-white rounded pb_form_v1">
              <h2 class="mb-4 mt-0 text-center">Login </h2>
              <!-- <code><?php echo $statu_login; ?></code> -->
              <div class="form-group">
                <input type="text" class="form-control py-3 reverse" placeholder="Username" required="" id="username" name="user">
              </div>
              <div class="form-group">
                <input type="password" class="form-control py-3 reverse" placeholder="Password" required=""  id="password" name="pass">
              </div>
               <div class="form-group">
                <select class="form-control reverse " required="" name="role">
                  <option value="">Login As..</option>
                  <option value="3">Admin</option> 
                  <option value="2">Pengajar</option>
                  <option value="1">Peserta</option>
                </select>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" name="login" value="Login">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="container">

        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">&copy; SHU Baitullah. <br>  <a href="https://uicookies.com/bootstrap-html-templates/">Bootstrap Templates</a> by uiCookies
            <br>Contack us: 
            </p>
            
          </div>
        </div>
      </div>
    </section>
     <?php
      }
      ?>
    <!-- END section -->







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


<!-- Forget Password Modal-->
  <div class="modal fade" id="ForgetPassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Password Reminder</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form form method="POST" action="<?php echo base_url() ?>auth/RememberPass" class="">
          
          <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Username / Email <span class="required">*</span>
            </label>
            <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text" id="last-name" name="key" required="required" class="form-control "  value="">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-primary" name="submit"  >Submit</button>
            </div>
          </div>
          
          </form>

        </div>
        <div class="modal-footer">
          <code>Already remember your password ?</code>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Back</button>
          <!-- <a class="btn btn-primary" href="<?php echo base_url ().'Auth/logout';?>">Logout</a> -->
        </div>
      </div>
    </div>
  </div>



  <!-- Gallert Modal-->
  <div class="modal fade" id="GalleryEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Gallery</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <!-- content-->
        <div class="modal-body">
        </div>

        <!-- footer -->
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url ().'Auth/logout';?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

    <script src="<?php echo base_url(); ?>assets/home/assets/js/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/home/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/assets/js/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/assets/js/jquery.mb.YTPlayer.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/home/assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/assets/js/jquery.easing.1.3.js"></script>

    <script src="<?php echo base_url(); ?>assets/home/assets/js/main.js"></script>

  </body>
</html>
