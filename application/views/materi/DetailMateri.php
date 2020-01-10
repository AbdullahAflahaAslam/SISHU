<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Detail Materi </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <?php echo form_open_multipart(base_url()."Admin/InputMateri"); ?>
             
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Materi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_materi" readonly=""  class="form-control "  value="<?php echo $materi[0]->nama_materi;?>">
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kelas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text" id="last-name" name="nama_materi" readonly="" class="form-control "  value="<?php echo $materi[0]->Kategori;?>">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">File Materi <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php if(!empty($materi[0]->file_materi)){ ?>
                        <a href="<?php echo base_url().'file/materi/'.$materi[0]->id_kategori.'/'.$materi[0]->file_materi ?>" target="_blank"><?php echo $materi[0]->nama_materi; ?></a>
                        </div>
                        <?php }else{ ?>
                          - 
                        <?php } ?>
                      </div>                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control form-control-line" readonly="" name="Keterangan" cols="70" rows="10" required=""> <?php echo $materi[0]->Keterangan ;?></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="" >
                            <button type="submit" class="btn btn-primary " name="Back">Back</button>
                          </a>

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