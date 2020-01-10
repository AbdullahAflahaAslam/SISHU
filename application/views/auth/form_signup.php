<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/img/logo/logo_sishu.png">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/SBAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/SBAdmin/css/sb-admin-2.min.css" rel="stylesheet">
    <script >
        
        tambah = function(){
            var opsi = document.getElementById("ops").value;
            if (opsi == "UNS") {
                document.getElementById("myText").style.visibility = "hidden";
            }
            else{
                document.getElementById("myText").style.visibility = "visible";
            }     
        }

        function phoneChange(){
            var indexCountry = document.getElementById("country").selectedIndex;
            var indexPhone = document.getElementById("phoneCode").selectedIndex = indexCountry;
        }
    </script>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <!-- <form class="user" method="post" action="<?php echo base_url()?>auth/signup/"> -->
              <!-- <?php echo form_open_multipart(base_url().'auth/signup/','class="user"'); ?> -->
              <?php echo form_open_multipart(base_url().'Auth/signup/'); ?>
                <div class="form-group">
                  <input class="form-control form-control-user" type="text" name="FName" value=""  required="" placeholder="Nama Lengkap *">
                </div>
                <div class="form-group">
                  <input class="form-control form-control-user" type="text" name="no_ktp" value="" required="" placeholder="No.KTP *">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" required="" name="email" placeholder="Email Address *">
                </div>
                <div class="form-group">
                  <input class="form-control  form-control-user" type="text" name="AddLine" value="" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <input class="form-control  form-control-user" type="text" name="city" value=""  required="" placeholder="Kota *">
                </div>
                <div class="form-group">
                  <input class="form-control  form-control-user" type="text" name="province" value="" placeholder="Provinsi">
                </div>
                <div class="form-group">
                  <select class="form-control form-control-user" name="country" size="1" id="country" onchange="phoneChange();">
                    <option value="">Country </option>
                        <?php foreach ($country as $row) { ?>
                            <option value="<?php echo $row->nicename;?>"><?php echo $row->nicename; ?></option>
                        <?php }?>
                  </select>
                </div>
                <div class="form-group">
                    <input class="form-control  form-control-user" type="text" name="poscode" value="" placeholder="Kode Pos">
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <select  name="phoneCode" size="1"  required="" id="phoneCode" class="form-control  form-control-user"  required="">
                      <option value="">Phone code </option>
                      <?php foreach ($country as $row) { ?>
                        <option value="<?php echo $row->phonecode;?>">(<?php echo $row->iso; ?>)+<?php echo $row->phonecode; ?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="col-sm-8">
                    <input class="form-control  form-control-user" type="text" name="phone" value="" required="" placeholder="Nomer Hp. *">
                  </div>
                </div>
                <div class="form-group">
                    <input class="form-control  form-control-user" type="text" name="user" value="" placeholder="Username" required="">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" type="password" name="pass" required="" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" type="password" name="repass" required="" placeholder="Repeat Password">
                  </div>
                </div>
                <input class="btn btn-primary btn-user btn-block" type="submit" name="add" value="Create User Account">
                
                <hr>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url() ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
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

</body>

</html>
