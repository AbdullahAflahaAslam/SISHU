
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <title>Absensi | SHU Baitullah</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets\login\img\logo.png">
    <!-- Bootstrap -->
    <link href="<?php  echo base_url(); ?>assets/user/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php  echo base_url(); ?>assets/user/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php  echo base_url(); ?>assets/user/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="<?php  echo base_url(); ?>assets/user/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php  echo base_url(); ?>assets/user/build/css/custom.min.css" rel="stylesheet">
  </head>
<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}
p{
  font-family: "Times New Roman", Times, serif;
  font-size: 11px;
}
h2{
  font-family: "Times New Roman", Times, serif;
  font-size: 14px;
}
h3{
  margin: 0px 0 0px 0;
  font-size: 14px;
  font-family: "Times New Roman", Times, serif;
  
}
div.a {
    text-align: center;
}
div.b {
    text-align: right;
}
div.c {
    text-align: justify;
}
table.blueTable {
  border: 1px solid #000000;
  background-color: #FFFFFF;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #000000;
  padding: 1px 2px;
}
table.blueTable tbody td {
  font-size: 11px;
}
table.blueTable tr:nth-child(even) {
  background: #F5F5F5;
}
table.blueTable thead {
  background: #FFFFFF;
  background: -moz-linear-gradient(top, #ffffff 0%, #ffffff 66%, #FFFFFF 100%);
  background: -webkit-linear-gradient(top, #ffffff 0%, #ffffff 66%, #FFFFFF 100%);
  background: linear-gradient(to bottom, #ffffff 0%, #ffffff 66%, #FFFFFF 100%);
  border-bottom: 1px solid #000000;
}
table.blueTable thead th {
  font-size: 12px;
  font-weight: bold;
  color: #000000;
  text-align: center;
  border-left: 1px solid #000000;
}
table.blueTable thead th:first-child {
  border-left: none;
}

</style>
  <body class="nav-md" onload="window.print()">  
        <!-- page content -->
        <div class="menu_fixed" role="main">
          
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-1 col-sm-1 col-xs-1">
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel ">
                  <br>
                  <div class="x_title">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center" >
                      <h3><b>DAFTAR HADIR</b></h3>
                    </div>

                    <div class="clearfix"></div>                
                  </div>
                  <div class="x_content ">
                      <div class="profile_img">
                       <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead class=" text-primary">
                      <tr><th>
                        Nama
                      </th>
                      <th>
                        Kota
                      </th>
                      <th>
                        Penanggung Jawab
                      </th>
                      <th width="20%">
                        TTD
                      </th>
                
                    </tr></thead>
                    <tbody>
                      <?php 
                      foreach ($peserta as $row) { ?>
                        <tr>
                        <td>
                          <a title="Detail"><?php echo $row->FName; ?> <?php echo $row->MName; ?>  <?php echo $row->LName; ?> </a>
                        </td>
                        <td class="time">
                          <?php echo $row->city; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->penanggung_jawab; ?>
                        </td>
                         <td class="time">
                          
                        </td> 
                      
                        
                      </tr>
                      <?php } ?>
                      
                    </tbody>
                  </table>
                      </div>
                  </div>          
                        </div>
                      </div>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       

     
<!DOCTYPE html>



</html>
    <!-- jQuery -->
 <!-- jQuery -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/iCheck/icheck.min.js"></script>
  </body>
</html>