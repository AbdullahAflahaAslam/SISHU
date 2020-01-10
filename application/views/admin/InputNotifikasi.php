<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Kirim Pengumuman </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <?php echo form_open_multipart(base_url()."Admin/InputNotifikasi"); ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Judul <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="last-name" name="judul" required="required" class="form-control " placeholder="Judul"  value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Jenis Pengumuman <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="last-name" name="jenis" required="required" class="form-control " placeholder="Jenis Pengumuman"  value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea class="form-control form-control-line" name="keterangan" cols="70" rows="10" placeholder="Keterangan" required=""> </textarea>
                        </div>
                      </div>                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="">
                          <button type="submit" class="btn btn-primary" name="Back" >Back</button>
                          </a>

                          <!-- ditambahkan disable ketika sudah ada -->
                         <!--  <a onclick="return confirm('Konfirmasi Kehadiran Kajian?')"> -->
                          <button type="submit" class="btn btn-success" name="Simpan" >Save</button>
                          </a>
                        </div>
                      </div>

                    </form>
                </div>
              </div>
            </div>
   