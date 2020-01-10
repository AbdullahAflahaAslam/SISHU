<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Tambahkan Kelas </h4>
              </div>
              <div class="card-body"> 
                <div class="table-responsive">
                  <?php echo form_open_multipart(base_url()."Admin/InputKelas"); ?>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Kelas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_kelas"  class="form-control "  value="">
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Angkatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text" id="last-name" name="angkatan"  class="form-control ">
                        </div>
                      </div>                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori Materi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="id_kategori" size="1" required="" style="margin-bottom:20px;">
                            <option value="">---------Kategori Materi---------</option>
                            <?php foreach ($kategori as $row) { ?>
                                  <option value="<?php echo $row->id_kategori;?>"><?php echo $row->Kategori; ?></option>
                            <?php }?>
                          </select>
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Kota <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <select class="form-control" name="id_lokasi" size="1" id="kota" onchange="cityChange();" required="" style="margin-bottom:20px;">
                          <option value="">---------Kota--------- </option>
                          <?php foreach ($lokasi as $row) { ?>
                                <option value="<?php echo $row->id_lokasi;?>"><?php echo $row->City; ?> <?php echo $row->add_line; ?></option>
                          <?php }?>
                          </select>
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