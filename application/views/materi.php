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
  </head>
  <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

   
    <section class="pb_section pb_slant-light overflow-hidden pb_slant-light  " id="login">
     <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Kajian</strong></h5>
            <h2>Materi</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div id="pb_faq" class="pb_accordion" data-children=".item">
            <?php foreach ($ketegori as $row) { ?>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#a<?php echo $row->id_kategori ?>" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4"><?php echo $row->Kategori ?></a>
                <div id="a<?php echo $row->id_kategori ?>" class="collapse" role="tabpanel">
                  <div class="py-3">
                  <p><?php echo $row->keterangan ?>.</p>
                  <hr>
                  <?php foreach ($materi as $m) { 
                    if ($m->id_kategori == $row->id_kategori) {
                    ?>
                    <p>- <?php echo $m->nama_materi  ?>. 
                        <?php if(!empty($m->file_materi)){ ?>
                        <a class="pull-right" href="<?php echo base_url().'file/materi/'.$m->id_kategori.'/'.$m->file_materi ?>" download>Download Materi</a>
                        <?php } ?>
                   </p>
                   <hr>
                    <?php 
                     }
                    } ?>  
                    
                  </div>
                </div>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->



    <!-- <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">&copy; SHU Baitullah Rubaiyat. <br>  <a href="https://uicookies.com/bootstrap-html-templates/">Bootstrap Templates</a> by uiCookies</p>
            <p class="pb_font-14">Contack us: <a href="#" target="_blank" rel="nofollow">admin@shubaitullahrubaiyat.id</a></p>
          </div>
        </div>
      </div>
    </footer> -->

    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>



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
