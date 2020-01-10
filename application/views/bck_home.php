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

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">SHU Baitullah</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-features">Event</a></li>
            <li class="nav-item"><a class="nav-link" href="#materi">Materi</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-reviews">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-pricing">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-faq">Contact</a></li>
            <?php
              if(isset($_SESSION['status'])){
            ?>
            <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0" >
            <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal" ><span class="pb_rounded-4 px-4">Logout</span></a>
            </li>
            <?php
              }else{
            ?>
            <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0">
            <a class="nav-link" href="#login"><span class="pb_rounded-4 px-4">Login</span></a>
            </li>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
   
    <!-- <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features" style="background-image: url('<?php echo base_url(); ?>assets/img/home-shu3.jpg')center;" > -->
    <section class="pb_cover_v3 overflow-hidden  pb_slant-light" id="section-home" style="background-image: url('<?php echo base_url(); ?>assets/img/home-shu3.jpg');">
      <div class="container" >         
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="sub-heading">
            </div>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-5 relative align-self-center">

           <!--  <form action="#" class="bg-white rounded pb_form_v1">
              <h2 class="mb-4 mt-0 text-center">Sign Up for Free</h2>
              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" placeholder="Full name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" placeholder="Email">
              </div>
              <div class="form-group">
                <div class="pb_select-wrap">
                  <select class="form-control pb_height-50 reverse">
                    <option value="" selected>Type</option>
                    <option value="">Basic</option>
                    <option value="">Business</option>
                    <option value="">Free</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Register">
              </div>
            </form> -->

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features" >
      <div class="container" >
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Event</strong></h5>
            <h2>Jadwal Kajian</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md- col-sm-12 ">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i> </div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Agenda</h5>
                <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                        Materi
                      </th>
                      <th>
                        Tanggal
                      </th>
                      <th>
                        Jam
                      </th>
                      <th>
                        Kota
                      </th>
                      <th>
                        Alamat
                      </th>
                      <th>
                        Pengajar
                      </th>
                      <th class="text-right">
                        Keterangan
                      </th>

                    </tr></thead>
                    <tbody>
                    <?php if (empty($jadwal)) {
                    ?>
                      <tr>
                        <td colspan="7" class="text-primary"  > 
                          <center>Jadwal Belum Tersedia</center>
                        </td>
                      </tr>
                    <?php   
                    }?>
                      <?php foreach ($jadwal as $row) { ?>
                        <tr>
                        <td>
                          <?php echo $row->nama_materi; ?>
                        </td>
                        <td>
                          <?php echo $row->tanggal; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->jam; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->city; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->add_line; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->FName; ?>
                        </td>
                        <td class="text-right">
                            <?php 
                              if(isset($_SESSION['sesId'])){
                            ?>
                              <a href="<?php echo base_url ().'user/Konfirmasi/'.$row->id_jadwal;?>" style="color: white" class="btn btn-success pull-right">Join</a>
                            <?php
                              }else{
                            ?>
                              <a href="#login" style="color: white" class="btn btn-success pull-right">Join</a>
                            <?php
                              }
                            ?>
                           
                         </td>
                       
                      </tr>
                      <?php } ?>
                      
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
        <!-- batasan -->
        <br>
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <!-- <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Event</strong></h5> -->
            <h2>Pengumuman</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div id="pb_faq" class="pb_accordion" data-children=".item">
            <?php foreach ($notifikasi as $row) { ?>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#a<?php echo $row->id_notifikasi ?>" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4"><?php echo $row->judul ?></a>
                <div id="a<?php echo $row->id_notifikasi ?>" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p><?php echo $row->jenis ?>.</p>
                    <p><?php echo $row->keterangan ?>.</p>
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

    <section class="pb_section pb_slant-light" id="section-reviews">
     <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h2>Photo Gallery SHU</h2>
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Foto Jamaah Umroh SHU</strong></h5>
            <?php 
                if(isset($_SESSION['sesId'])){
                  if ($_SESSION['status']== 3) {
              ?>
              <!-- Admin Edit Text -->
              <div class="">
              <a href="<?php echo base_url();?>" data-toggle="modal" data-target="#GalleryEdit"><i class="fa fa-edit pb_icon-gradient"></i> Edit </a>
              </div>

              <?php 
                }
              }
              ?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"></div>
              <div class="media-body">
                <img src="<?php echo base_url(); ?>assets/img/1.jpg">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"></div>
              <div class="media-body">
                <img src="<?php echo base_url(); ?>assets/img/2.jpg">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"></div>
              <div class="media-body">
                <img src="<?php echo base_url(); ?>assets/img/4.jpg">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"></div>
              <div class="media-body">
                <img src="<?php echo base_url(); ?>assets/img/3.jpg">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"></div>
              <div class="media-body">
                <img src="<?php echo base_url(); ?>assets/img/5.jpg">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"></div>
              <div class="media-body">
                <img src="<?php echo base_url(); ?>assets/img/6.jpeg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    
    <!-- END section -->

   
    <!-- END section -->

    <section class="pb_section bg-light pb_slant-white" id="section-pricing">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Pricing</strong></h5>
            <h2>About</h2>
            <?php 
                if(isset($_SESSION['sesId'])){
                  if ($_SESSION['status']== 3) {
              ?>
              <!-- Admin Edit Text -->
              <div class="">
              <a href="<?php echo base_url();?>"><i class="fa fa-edit pb_icon-gradient"></i> Edit </a>
              </div>

              <?php 
                }
              }
              ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="pb_pricing_v1 p-5 border border-primary  bg-white">
              <h3 class="text-center">About SHU</h3>

              <span class="price"><span>Apa itu Sekolah Haji dan Umroh ?</span></span>
              <p class="pb_font-15">Yaitu program perkuliahan, bimbingan dan praktek untuk ummat islam baik sebelum berangkat, saat di tanah suci maupun setelah pulang dari tanah suci.</p>

              <span class="price"><span>Apakah SHU identik dengan Biro Travel ?</span></span>
              <p class="pb_font-15">SHU lebih mirip dengan Kelompok Bimbingan Ibadah Haji dan Umroh (KBIH). Namun ada perbedaan mendasar SHU dengan KBIH yang pada umumnya membimbing jamaah yang siap berangkat saja. SHU tidak hanya diperuntukkan untuk yang <b>sudah siap berangkat jamaah haji/umroh</b> saja.</p>
              <p class="pb_font-15">Ummat muslim <b>yang belum siap berangkat </b> sangat dianjurkan mengikuti SHU agar semakin terdorong dan merasa mudah berangkat ke Tanah Suci. Bahkan bagi <b> yang sudah pernah berangkat ke Tanah Suci</b> sangat baik mengikuti SHU mengingat hidup ini harus selalui diperbaharui termasuk beberapa kekurangan ibadah dan orientasi selama di Tanah Suci sebelumnya.</p>
              <p class="pb_font-15">SHU juga bertindak sebagai biro travel. SHU memang menguruskan perjalanan, pesawat, hotel akomodasi dan lain-lain sebagaimana pekerjaan biro travel pada umumnya. Namun fokus utama SHU adalah memastikan setiap jamaah bisa memaksimalkan fasilitas ibadah haji dan umroh untuk kebaikan dunia dan akheratnya.</p>
              
              <span class="price"><span>Kenapa harus ada SHU ? Apa yang Melatarbelakangi berdirinya SHU ?</span></span>
              <p class="pb_font-15">“Bagaimana caranya berangkat ?”, “Saya belum pantas untuk berangkat” , “Saya belum merasa mendapat panggilan ke tanah suci”. Ungkapan-ungkapan senada itu sering muncul di kalangan ummat yang menunggu lama belum bisa berangkat juga ke Tanah Suci. Padahal setiap muslim pasti ingin berangkat ke tanah suci tetapi faktanya sebagian besar merasa SULIT bisa berangkat.</p>
              <p class="pb_font-15">Di sisi lain bagi yang sudah bisa berangkat ke tanah suci,sebagian besar jamaah baru bisa berupaya menunaikan ritualitas ibadah dengan berbagai sensasi kenikmatan spiritualitas nya saja. Masih miskin ilmu, belum benar dan belum maksimal. Bahkan banyak diantaranya yang terjerumus pada praktek khurafat, syirik dan tahayul.</p>
              <p class="pb_font-15">Kenyataan lain, jamaah yang berangkat ke tanah suci belum memaksimalkan fasilitas dari Allah berupa tempat-tempat mustajab dan tempat bersejarah di Tanah Suci menjadikan <b>TITIK BALIK PERUBAHAN HIDUP dimana HARAPAN DAN DOA-DOA JAMAAH BISA TERKABUL.</b></p>

              <span class="price"><span>Apa Tujuan didirikannya SHU ?</span></span>
              <p class="pb_font-15">1. Meyakinkan Ummat, bahwa Umroh dan Haji adalah panggilan Allah kepada semua manusia</p>
              <p class="pb_font-15">2. Membuka rahasia MUDAH berangkat ke Tanah Suci. Siapapun berkeinginan Untuk Umroh Serta Haji karena murni Merespon panggilan Allah, kemudian meminta taufiq serta pertolongan Nya, dan menekuni prosedur keduanya dengan benar, pasti dimudahkan oleh Allah. insya Allah.</p>
              <p class="pb_font-15">3. Memahamkan dan Meyakinkan kepada jamaah,bahwa Umroh serta Haji,bukanlah sebatas menggugurkan kewajiban, tapi lebih dari Itu, keduanya adalah tarbiyah yang paling istimewa langsung dari Allah dengan fasilitas-fasilitas tarbiyah yang tidak ada duanya, diantaranya BAITULLAH dengan hajar aswadnya, multazamnya, hijir Ismail, rukun yamani dan lain-lain. Yang jika semua keutamaannya diberdayakan secara efektif, maka umroh dan haji berpotensi mengubah dan bahkan membuat lompatan perubahan dalam diri manusia dalam kehidupan serta alam semesta. insya Allah.</b></p>

            </div>
          </div>
           
        </div>
      </div>
    </section>
    <!-- ENDs ection -->


    <section class="pb_section pb_slant-white" id="materi">
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
                        <a class="pull-right" href="<?php echo base_url().'file/materi/'.$m->id_kategori.'/'.$m->file_materi ?>" target="_blank">Download Materi</a>
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
    <!----- END Section ---->



    <section class="pb_section bg-light pb_slant-white" id="section-faq">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>FAQ</strong></h5>
            <h2>Contact</h2>
            <?php 
                if(isset($_SESSION['sesId'])){
                  if ($_SESSION['status']== 3) {
              ?>
              <!-- Admin Edit Text -->
              <div class="">
              <a href="<?php echo base_url();?>"><i class="fa fa-edit pb_icon-gradient"></i> Edit </a>
              </div>

              <?php 
                }
              }
              ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div id="pb_faq" class="pb_accordion" data-children=".item">
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="true" aria-controls="pb_faq1" class="pb_font-22 py-4">What is Instant?</a>
                <div id="pb_faq1" class="collapse show" role="tabpanel">
                  <div class="py-3">
                  <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4">Is this available to my country?</a>
                <div id="pb_faq2" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false" aria-controls="pb_faq3" class="pb_font-22 py-4">How do I use the features of Instant App?</a>
                <div id="pb_faq3" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false" aria-controls="pb_faq4" class="pb_font-22 py-4">How much do the Instant App cost?</a>
                <div id="pb_faq4" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq5" aria-expanded="false" aria-controls="pb_faq5" class="pb_font-22 py-4">I have technical problem, who do I email?</a>
                <div id="pb_faq5" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!----- END Section ---->
     <?php
      if(!isset($_SESSION['status'])){
      ?>
    <section class="pb_xl_py_cover overflow-hidden pb_slant-light pb_gradient_v1 cover-bg-opacity-8"  style="background-image: url(<?php echo base_url(); ?>assets/home/assets/images/1900x1200_img_5.jpg)" id="login">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 justify-content-center">
            <h2 class="heading mb-5 pb_font-40">SHU Baitullah Rubaiyat</h2>
            <div class="sub-heading">
              <p class="mb-4">
                <a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="<?php echo base_url(); ?>auth/signup" class="to_register"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">Create Account</span></a>
              </p>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
             <form form method="POST" action="<?php echo base_url() ?>auth/login" class="bg-white rounded pb_form_v1">
              <h2 class="mb-4 mt-0 text-center">Login Forms</h2>
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
              <!-- <div class="form-group">
                <div class="pb_select-wrap">
                  <select class="form-control pb_height-50 reverse">
                    <option value="" selected>Type</option>
                    <option value="">Basic</option>
                    <option value="">Business</option>
                    <option value="">Free</option>
                  </select>
                </div>
              </div> -->
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" name="login" value="Login">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
     <?php
      }
      ?>
    <!-- END section -->



    <footer class="pb_footer bg-light" role="contentinfo">
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
    </footer>

    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>




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
