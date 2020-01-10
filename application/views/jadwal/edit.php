<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Edit Agenda </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <?php echo form_open_multipart(base_url()."Admin/EditJadwal"); ?>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Materi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="form-control" name="id_materi" size="1" required="" style="margin-bottom:20px;">
                          <option value="">----------Materi-----------</option>
                          <?php foreach ($materi as $row) { ?>
                                <option value="<?php echo $row->id_materi;?>"><?php echo $row->nama_materi; ?></option>
                          <?php }?>
                          </select>
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Kota <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <select class="form-control" name="id_lokasi" size="1" id="kota" onchange="cityChange();" required="" style="margin-bottom:20px;">
                          <option value="">----------Kota-----------</</option>
                          <?php foreach ($lokasi as $row) { ?>
                                <option value="<?php echo $row->id_lokasi;?>"><?php echo $row->City; ?></option>
                          <?php }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select class="form-control" name="alamat" size="1" id="alamat" onchange="cityChange();"  disabled="" style="margin-bottom:20px;">
                          <option value="">----------Alamat-----------</option>
                          <?php foreach ($lokasi as $row) { ?>
                                <option value=""><?php echo $row->add_line; ?></option>
                          <?php }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pengajar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select class="form-control" name="id_pengajar" size="1"  required=""  style="margin-bottom:20px;">
                          <option value="">----------Pengajar-----------</option>
                          <?php foreach ($pengajar as $row) { ?>
                                <option value="<?php echo $row->id_user; ?>"><?php echo $row->FName; ?> </option>
                          <?php }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="last-name" name="tanggal" required="required" class="form-control "  value="<?php echo $jadwal[0]->tanggal?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jam <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="time" id="last-name" name="jam" required="required" class="form-control"  value="<?php echo $jadwal[0]->jam?>">
                        </div>
                      </div>
                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control form-control-line" name="keterangan" cols="70" rows="10" required="" > <?php echo $jadwal[0]->keterangan?></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="">
                          <input type="hidden" id="last-name" name="id_jadwal" required="required" class="form-control"  value="<?php echo $this->uri->segment(3);?>">
                          <button type="submit" class="btn btn-primary" name="Back" >Back</button>
                          </a>

                          <!-- ditambahkan disable ketika sudah ada -->
                         <!--  <a onclick="return confirm('Konfirmasi Kehadiran Kajian?')"> -->
                          <button type="submit" class="btn btn-success" name="Simpan" >Update</button>
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