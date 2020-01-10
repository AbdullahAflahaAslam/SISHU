<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/logo/logo_sishu.png">

     <title>Login Admin | SISHU </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/user/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/user/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/user/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/user/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>/assets/user/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="forget"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper ">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="<?php echo base_url() ?>admin/index" >
              <h1>Login Admin</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" id="username" name="user"  />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required=""  id="password" name="pass"/>
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" name="login" value="Login"  />
              </div>
              <div class="clearfix">
                
              </div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class=""></i> </h1>
                    <table class="creator col-lg-12 col-md-12">

                        <tbody><tr>

                          <td>

                            <a href="https://www.shubaitullahrubaiyat.id"><img src="<?php echo base_url() ?>assets/img/logo_sishu.png"></a>

                          </td>

                          <td class="text-muted">

                            <br>

                           <!--   <p style="font-size: 7pt">CBUDDY: Your Conference Buddy is proudly provided by <a  href="https://cbuddy.id" style="font-size: 7pt">CBUDDY.ID.<br></a>For further quotation please contact<br>E-mail: <i><strong>contact@cbuddy.id</strong></i>  </p> -->


                          </td>

                        </tr>

                    </tbody></table>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
