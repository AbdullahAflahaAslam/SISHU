
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title"><i class="fa fa-user"></i> Aktifitas Log</h5>
              </div>
              <div class="card-body">
               
                  <div class="row">
                    <div class="col-md-8 ">
                      <div class="form-group">
                        <table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0" >
                        <thead class=" text-primary">
                          <tr><th>
                            #
                          </th>
                          <th>
                            Keterangan
                          </th>
                          <th>
                            Tanggal
                          </th>
                        </tr></thead>
                        <tbody>
                           <?php 
                           $n = 1;
                           foreach ($log as $row)
                           
                            { ?>
                            <tr>
                              <th>
                                <?php echo $n; ?>
                              </th>
                              <th>
                                <?php echo $row->keterangan; ?>
                              </th>
                              <th>
                                <?php echo $row->tanggal; ?>
                              </th>
                            </tr>
                           <?php $n += 1; } ?>
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