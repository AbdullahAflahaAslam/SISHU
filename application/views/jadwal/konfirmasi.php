
 
            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Konfirmasi Kehadiran </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <?php echo form_open_multipart(base_url()."User/Konfirmasi/".$jadwal[0]->id_jadwal."/".$user[0]->id_user); ?>
             

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="Nama" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $user[0]->FName; ?> ">
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Materi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="Materi" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $jadwal[0]->nama_materi; ?>">
                           <input type="hidden" id="last-name" name="id_materi" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $jadwal[0]->id_materi; ?>">
                            <input type="hidden" id="last-name" name="tanggal" required="required" class="form-control col-md-7 col-xs-12" readonly="" value="<?php echo $jadwal[0]->tanggal; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="Alamat" readonly="" value="<?php echo $jadwal[0]->add_line; ?> <?php echo $jadwal[0]->City; ?> ">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="<?php echo base_url ().'user/Jadwal';?>">
                          <button type="submit" class="btn btn-primary" name="Back" >Back</button>
                          </a>

                          <!-- ditambahkan disable ketika sudah ada -->
                          <a onclick="return confirm('Konfirmasi Kehadiran Kajian?')">
                          <button type="submit" class="btn btn-success" name="Konfirmasi" >Konfirmasi</button>
                          </a>
                        </div>
                      </div>

                    </form>
                </div>
              </div>
            </div>
