<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
 <script >
        
        tambah = function(){
            var opsi = document.getElementById("ops").value;
            if (opsi == "UNS") {
                document.getElementById("myText").style.visibility = "hidden";
            }
            else{
                document.getElementById("myText").style.visibility = "visible";
            }     
        }

        function phoneChange(){
            var indexCountry = document.getElementById("country").selectedIndex;
            var indexPhone = document.getElementById("phoneCode").selectedIndex = indexCountry;
        }
    </script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Detail Peserta </h4>
              </div>
              <div class="card-body">
                <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="table-responsive">
                    <?php echo form_open_multipart(base_url()."Admin/DataPeserta"); ?>
               
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Nama Lengkap <span class="required">*</span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="last-name" name="FName" readonly="" class="form-control "  value="<?php echo $peserta[0]->FName ?>" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">Nama Tengah 
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="last-name" name="MName" readonly="" class="form-control "  value="<?php echo $peserta[0]->MName ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"   for="last-name">Nama Belakang 
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="last-name" name="LName"  class="form-control " readonly="" value="<?php echo $peserta[0]->LName ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">No. KTP<span class="required">*</span>
                          </label>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="last-name" name="no_ktp"  class="form-control " readonly=""  required="required" value="<?php echo $peserta[0]->no_ktp ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">Email<span class="required">*</span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="email" id="last-name" name="email" required="required" class="form-control " readonly="" value="<?php echo $peserta[0]->email?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">Address Line<span class="required">*</span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="last-name" name="AddLine"  class="form-control " readonly="" value="<?php echo $peserta[0]->AddLine?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">City <span class="required">*</span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="last-name" name="city" required="required" readonly="" class="form-control "  value="<?php echo $peserta[0]->city?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">Country <span class="required">*</span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="country" required="required" readonly="" class="form-control "  value="<?php echo $peserta[0]->country?>">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">Phone Number <span class="required">*</span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="last-name" name="phone" required="required" readonly=""  class="form-control "  value="+<?php echo $peserta[0]->phone?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">Wilayah SHU <span class="required">*</span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="last-name" name="wilayah_shu" readonly="" required="required"  class="form-control "  value="<?php echo $peserta[0]->wilayah_shu?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">Penanggung Jawab<span class="required">*</span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="last-name" name="penanggung_jawab" readonly="" required="required"  class="form-control "  value="<?php echo $peserta[0]->penanggung_jawab?>">
                          </div>
                        </div>
                       <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">Kode Pos <span class="required">*</span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="number" id="last-name" name="poscode" required="required" readonly=""  class="form-control "  value="<?php echo $peserta[0]->poscode?>">
                          </div>
                        </div>
                        <!--<div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">User <span class="required">*</span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="last-name" name="user" required="required" readonly=""  class="form-control "  value="<?php echo $peserta[0]->user?>">
                          </div>
                        </div>
                        <!-- <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="pass" required="required" readonly=""  class="form-control "  value="<?php echo $this->encryption->decrypt($peserta[0]->pass);?>">
                          </div>
                        </div> -->
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <a href="">
                            <button type="submit" class="btn btn-primary" name="Back" >Back</button>
                            </a>

                            <!-- ditambahkan disable ketika sudah ada -->
                           <!--  <a onclick="return confirm('Konfirmasi Kehadiran Kajian?')"> -->
                            
                            </a>
                          </div>
                        </div>
                      </form>
                  </div>
                </div>


                <div class="col-md-6 pl-1">

                  <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                      <h6 class="m-0 font-weight-bold text-primary">Kelengkapan Data</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample" style="">
                      <div class="card-body">

                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File KTP <span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php if (!empty($peserta[0]->file_ktp)) { ?>
                            <i class="fas fa-check"></i>
                            <?php echo $peserta[0]->file_ktp?><br>
                            <?php }else { ?>
                             <i class="fas fa-close"></i>
                            No file Uploaded
                            <?php }?>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File KK <span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php if (!empty($peserta[0]->file_kk)) { ?>
                            <i class="fas fa-check"></i>
                            <?php echo $peserta[0]->file_kk?><br>
                            <?php }else { ?>
                            <i class="fas fa-close"></i>
                            No file Uploaded
                            <?php }?>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File Buku Nikah <span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php if (!empty($peserta[0]->file_buku_nikah)) { ?>
                            <i class="fas fa-check"></i>
                            <?php echo $peserta[0]->file_buku_nikah?><br>
                            <?php }else { ?>
                            <i class="fas fa-close"></i>
                            No file Uploaded
                            <?php }?>
                          </div>
                        </div>

                        <!-- <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File Paspor <span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php if (!empty($peserta[0]->file_paspor)) { ?>
                            <i class="fas fa-check"></i>
                            <?php echo $peserta[0]->file_paspor?><br>
                            <?php }else { ?>
                            <i class="fas fa-close"></i>
                            No file Uploaded
                            <?php }?>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File Visa <span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php if (!empty($peserta[0]->file_visa)) { ?>
                            <i class="fas fa-check"></i>
                            <?php echo $peserta[0]->file_visa?><br>
                            <?php }else { ?>
                            <i class="fas fa-close"></i>
                            No file Uploaded
                            <?php }?>
                          </div>
                        </div> -->

                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File Miningitis <span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php if (!empty($peserta[0]->file_miningitis)) { ?>
                            <i class="fas fa-check"></i>
                            <?php echo $peserta[0]->file_miningitis?><br>
                            <?php }else { ?>
                            <i class="fas fa-close"></i>
                            No file Uploaded
                            <?php }?>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File Surat Ijin <span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php if (!empty($peserta[0]->file_surat_ijin)) { ?>
                            <i class="fas fa-check"></i>
                            <?php echo $peserta[0]->file_surat_ijin?><br>
                            <?php }else { ?>
                            <i class="fas fa-close"></i>
                            No file Uploaded
                            <?php }?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                </div>
              </div>
            </div>
    <script>


       
    </script>