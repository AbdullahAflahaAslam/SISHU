  <div class="row">
            <!-- Area Chart -->
    <div class="col-md-8">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Beranda</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <!-- BERANDA -->
                <div class="table-responsive table-upgrade">
                  <table class="table">
                    <thead>
                    <tr>
                    
                    Agenda Sekolah Haji dan Umrah Baitullah
                    </tr>
                      <!-- <tr>
                        <input class="form-control form-control-line" name="abstract" cols="70" rows="10" required="" style="margin: 0px -597.75px 0px 0px; height: 76px; width: 100%;" placeholder="Ketik cacatan Anda disini"></input>
                      </tr>
                      <tr>
                        <div class="section-right">
                          <div class="secondary-action">
                            <button data-action="postbox-reset" class="qa-test-cancel btn btn-link"><span>Batal</span></button>
                            <span class="action-delimiter"><span>atau</span></span>
                            <button data-action="postbox-reset" class="qa-test-cancel btn btn-link"><span>Post</span></button>
                          </div>
                          
                        </div>
                      </tr>
                      <tr><th></th>
                      
                    </tr> -->
                    </thead>
                    <tbody>
                     <?php foreach ($jadwal as $row) { ?>
                      <tr>
                        <td colspan="2">
                        Pelaksanaan Kajian <?php echo $row->nama_materi; ?> <br>
                        Pada :  <?php echo $row->jam; ?>,  <?php echo $row->tanggal; ?>
                        </td>
                        <td>
                        <a href="<?php echo base_url().'User/DetailJadwal/'.$row->id_jadwal ?>/" class="text-info btn btn-link"><span>Cek</span></a>
                          
                        </td>

                      </tr>
                     <?php } ?>
                      <!-- <tr>
                        <td>Components</td>
                        <td class="text-center">16</td>
                        <td class="text-center">160</td>
                      </tr>
                      
                      <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                          <a href="#" class="btn btn-round btn-default disabled">Current Version</a>
                        </td>
                        <td class="text-center">
                          <a target="_blank" href="https://www.creative-tim.com/product/paper-dashboard-2-pro?ref=pd-free-upgrade-live" class="btn btn-round btn-primary">Upgrade to PRO</a>
                        </td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
             <!-- BERANDA -->
                </div>
              </div>
    </div>
        <!-- BATAS LOG AKTIVITAS SISWA -->
    <div class="col-md-4 ">
      <div>
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-title">Pengumuman</h5>
            <p class="card-category">Notification</p>
          </div>
          <div class="card-body ">             
            <!-- NOTIFIKASI -->                
            <?php foreach ($notifikasi as $row) { ?>
            <div class="alert alert-info alert-dismissible fade show">
              <button type="button" aria-hidden="true" class="close " data-dismiss="alert" aria-label="Close">
                <i class="fa fa-close"></i>
              </button>
              <div class="">
                <b><span data-notify="message"><?php echo $row->judul ?></span></b><br>
                <span data-notify="message"><?php echo $row->keterangan ?>.</span>
              </div>   
            </div>
            <?php } ?>
          </div>
          <!-- <div class="card-footer">
            <div class="chart-legend">
              <i class="fa fa-circle text-info"></i> Tesla Model S
              <i class="fa fa-circle text-warning"></i> BMW 5 Series
            </div>
              <hr>
            <div class="card-stats">
            <i class="fa fa-check"></i> Data information certified
            </div>
          </div> -->
        </div>
      </div>
      <hr>
      <div>
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-title">Log Aktivitas</h5>
            <p class="card-category"></p>
          </div>
          <div class="card-body ">             
            <!-- LOg -->                
          
            <?php foreach ($log as $row) { ?>
            <div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
              <i class="fa fa-close"></i>
              </button>
              <span data-notify="icon" class="nc-icon nc-bell-55"></span>
              <span data-notify="message"><?php echo $row->keterangan ?></span><br>
              <span data-notify="message"><small> <?php echo $row->tanggal ?></small></span>
            </div>
            <?php } ?>
          <!-- <div class="card-footer">
            <div class="chart-legend">
              <i class="fa fa-circle text-info"></i> Tesla Model S
              <i class="fa fa-circle text-warning"></i> BMW 5 Series
            </div>
              <hr>
            <div class="card-stats">
            <i class="fa fa-check"></i> Data information certified
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
