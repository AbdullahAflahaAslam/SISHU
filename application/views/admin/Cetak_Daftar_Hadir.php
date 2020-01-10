<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Cetak Daftar Hadir </h4>
              </div>
              <div class="card-body"> 
                <div class="table-responsive">
                  <form action="<?php echo base_url() ?>Admin/CetakDaftarHadir" method="post" target="_blank">
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kelas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="id_kategori" size="1" required="" style="margin-bottom:20px;">
                          <option value="">---------Kelas---------</option>
                          <?php foreach ($kelas as $row) { ?>
                                <option value="<?php echo $row->id_kelas;?>"><?php echo $row->nama_kelas; ?> | <?php echo $row->angkatan; ?> </option>
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
                         <input type="hidden" id="last-name" name="id_admin" required="required" class="form-control"  value="<?php  echo $_SESSION['sesId'];?>">
                          <button type="submit" class="btn btn-success" name="Simpan" >Cetak</button>
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