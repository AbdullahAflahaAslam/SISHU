<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Edit Lokasi </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <?php echo form_open_multipart(base_url()."Admin/EditLokasi"); ?>
             
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="last-name" name="add_line" required="required" class="form-control " placeholder="Alamat"  value="<?php echo $lokasi[0]->add_line ?>">
                         
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Kota <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="last-name" name="city" required="required" class="form-control " placeholder="Kota"  value="<?php echo $lokasi[0]->City ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Provinsi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="last-name" name="province" required="required" class="form-control " placeholder="Provinsi" value="<?php echo $lokasi[0]->province ?>">
                         <input type="hidden" id="last-name" name="id_lokasi" required="required" class="form-control " placeholder="Provinsi" value="<?php echo $lokasi[0]->id_lokasi ?>">
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
    <script >


        function cityChange(){
            var indexCountry = document.getElementById("kota").selectedIndex;
            var indexPhone = document.getElementById("alamat").selectedIndex = indexCountry;
        }
    </script>