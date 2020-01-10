<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Detail Agenda </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <code>Jumlah Siswa Konfirmasi : <?php echo $konfirmasi; ?></code>
                    <form>
                    <?php $row = $jadwal[0];?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">ID Jadwal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input readonly="" type="text" id="last-name" name="tanggal" required="required" class="form-control "  value="<?php echo $row->id_jadwal; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Materi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                         <input readonly="" type="text" id="last-name" name="tanggal" required="required" class="form-control "  value="<?php echo $row->nama_materi; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="" type="text" id="last-name" name="tanggal" required="required" class="form-control "  value="<?php echo $row->tanggal; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jam <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input readonly="" type="text" id="last-name" name="tanggal" required="required" class="form-control "  value="<?php echo $row->jam; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kota <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input readonly="" type="text" id="last-name" name="tanggal" required="required" class="form-control "  value="<?php echo $row->City; ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input readonly="" type="text" id="last-name" name="tanggal" required="required" class="form-control "  value="<?php echo $row->add_line; ?>">
                        </div>
                      </div>
                      <!--  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jumlah Siswa Konfirmasi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input readonly="" type="text" id="last-name" name="tanggal" required="required" class="form-control "  value="<?php echo $konfirmasi; ?>">
                        </div>
                      </div> -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control form-control-line" name="ketarangan" cols="70" rows="10" required="" readonly=""> <?php echo $row->keterangan;  ?></textarea>
                        </div>
                      </div>
                      </form>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <?php if($_SESSION['status']==3){ ?>
                          <a href="<?php echo base_url ().'Admin/Jadwal'?>" >
                             <button  class="btn btn-primary">Back</button>
                          </a>
                         <?php }else{ ?>
                          <a href="<?php echo base_url ().'User/Jadwal'?>" >
                             <button  class="btn btn-primary">Back</button>
                          </a>
                      <?php }?>

                          

                          <!-- ditambahkan disable ketika sudah ada -->
                         <!--  <a onclick="return confirm('Konfirmasi Kehadiran Kajian?')"> -->
                         
                          </a>
                        </div>
                      </div>

                    </form>
                </div>
              </div>
            </div>
    <script >


        function cityChange(){
            var indexCountry = document.getElementById("kota").selectedIndex;
            var indexPhone = document.getElementById("alamat").selectedIndex = indexCountry;
        }
    </script>