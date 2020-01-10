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

            <div class="">
              <div class="card-header">
                <h4 class="card-title"> Detail Peserta </h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="table-responsive">
                      <form method="post" action="<?php echo base_url();?>/Admin/EditPeserta/">
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Nama Lengkap <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="FName"  class="form-control "  value="<?php echo $peserta[0]->FName ?>" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Nama Tengah 
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="MName" class="form-control "  value="<?php echo $peserta[0]->MName ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">Nama Belakang 
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="LName"  class="form-control "  value="<?php echo $peserta[0]->LName ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">No. KTP<span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="no_ktp"  class="form-control "   required="required" value="<?php echo $peserta[0]->no_ktp ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Email<span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="email" id="last-name" name="email" required="required" class="form-control " value="<?php echo $peserta[0]->email?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Address Line<span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="AddLine"  class="form-control " value="<?php echo $peserta[0]->AddLine?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">City <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="city" required="required" class="form-control "  value="<?php echo $peserta[0]->city?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Province <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="province" required="required" class="form-control "  value="<?php echo $peserta[0]->province?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Country <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="last-name" name="country" required="required"  class="form-control "  value="<?php echo $peserta[0]->country?>">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Phone Number <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="phone" required="required"  class="form-control "  value="<?php echo $peserta[0]->phone?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Wilayah SHU <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="wilayah_shu" required="required"  class="form-control "  value="<?php echo $peserta[0]->wilayah_shu?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Penanggung Jawab<span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="penanggung_jawab" required="required"  class="form-control "  value="<?php echo $peserta[0]->penanggung_jawab?>">
                            </div>
                          </div>
                         <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Kode Pos <span class="required"></span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="number" id="last-name" name="poscode"    class="form-control "  value="<?php echo $peserta[0]->poscode?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Username <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" id="last-name" name="user" required="required"  class="form-control "  value="<?php echo $peserta[0]->user?>">
                            </div>
                          </div>
                          <!-- <div class="form-group"> 
                            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Password <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="hidden" id="last-name" name="pass" required="required"  class="form-control "  value="<?php echo $this->encryption->decrypt($peserta[0]->pass);?>">
                              <input type="hidden" id="last-name" name="id_user" required="required"  class="form-control "  value="<?php echo $peserta[0]->id_user?>">
                            </div>
                          </div> -->
                          <input type="hidden" id="last-name" name="pass" required="required"  class="form-control "  value="<?php echo $this->encryption->decrypt($peserta[0]->pass);?>">
                          <input type="hidden" id="last-name" name="id_user" required="required"  class="form-control "  value="<?php echo $peserta[0]->id_user?>">
                          <input type="hidden" id="last-name" name="userLast" required="required"  class="form-control "  value="<?php echo $peserta[0]->user?>">
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                              <a class="btn btn-danger" href="#ResetPassword"  data-toggle="modal">Reset Password</a>

                              <!-- ditambahkan disable ketika sudah ada -->
                             <!--  <a onclick="return confirm('Konfirmasi Kehadiran Kajian?')"> -->
                              
                              <button type="submit" class="btn btn-success" name="Simpan" >Save</button>

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

                     <?php echo form_open_multipart(base_url().'admin/Kelengkapan/'); ?>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample" style="">
                      <div class="card-body">

                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File KTP <?php echo $peserta[0]->file_ktp ?><span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php 
                              if (!empty($peserta[0]->file_ktp)){
                            ?>
                            <a href="<?php echo base_url().'file/'.$peserta[0]->id_user.'/'.$peserta[0]->file_ktp ?>" download><?php echo $peserta[0]->file_ktp ?></a>
                            <?php 
                             }
                            ?>
                            <br>
                            <input type="file" name="file_ktp" class="default" id="file_ktp"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
                            <button type="submit" name="upload_ktp" class="btn-sm btn-primary btn-round"><i class="fa fa-upload"></i> Upload</button>
                            <hr class="sidebar-divider">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File KK <span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                          <br>
                            <?php 
                            if (!empty($peserta[0]->file_kk)){
                            ?>
                            <a href="<?php echo base_url().'file/'.$peserta[0]->id_user.'/'.$peserta[0]->file_kk ?>" download><?php echo $peserta[0]->file_kk ?></a>
                            <?php 
                             }
                            ?>
                            <br>
                            <input type="file" name="file_kk" class="default" id="file_kk"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
                            <button type="submit" name="upload_kk" class="btn-sm btn-primary btn-round"><i class="fa fa-upload"></i> Upload</button>
                            <hr class="sidebar-divider">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File Buku Nikah <span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                           
                           <br>
                          <?php 
                            if (!empty($peserta[0]->file_buku_nikah)){
                          ?>
                          <a href="<?php echo base_url().'file/'.$peserta[0]->id_user.'/'.$peserta[0]->file_buku_nikah ?>" download><?php echo $peserta[0]->file_buku_nikah ?></a>
                          <?php 
                           }
                          ?>
                          <br>
                          <input type="file" name="file_buku_nikah" class="default" id="file_buku_nikah"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
                          <button type="submit" name="upload_buku_nikah" class="btn-sm btn-primary btn-round"><i class="fa fa-upload"></i> Upload</button>
                          <hr class="sidebar-divider">

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
                            
                            <br>
                            <?php 
                              if (!empty($peserta[0]->file_miningitis)){
                            ?>
                            <a href="<?php echo base_url().'file/'.$peserta[0]->id_user.'/'.$peserta[0]->file_miningitis ?>" download><?php echo $peserta[0]->file_miningitis ?></a>
                            <?php 
                             }
                            ?>
                            <br>
                            <input type="file" name="file_miningitis" class="default" id="file_miningitis"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
                            <button type="submit" name="upload_miningitis" class="btn-sm btn-primary btn-round"><i class="fa fa-upload"></i> Upload</button>
                            <hr class="sidebar-divider">

                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-12 col-sm-12 col-xs-12"  for="last-name">File Surat Ijin <span class="required"></span>
                          </label>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            
                            <br>
                          <?php 
                            if (!empty($peserta[0]->file_surat_ijin)){
                          ?>
                          <a href="<?php echo base_url().'file/'.$peserta[0]->id_user.'/'.$peserta[0]->file_surat_ijin ?>" download><?php echo $peserta[0]->file_surat_ijin ?></a>
                          <?php 
                           }
                          ?>
                          <br>
                          <input type="file" name="file_surat_ijin" class="default" id="file_surat_ijin"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
                          <button type="submit" name="upload_surat_ijin" class="btn-sm btn-primary btn-round"><i class="fa fa-upload"></i> Upload</button>
                          <hr class="sidebar-divider">

                          </div>
                        </div>
                        <input type="hidden" id="last-name" name="id_user" required="required"  class="form-control "  value="<?php echo $peserta[0]->id_user?>">
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
                </div>
              </div>
            </div>
    

<!-- Forget Password Modal-->
  <!-- Logout Modal-->
  <div class="modal fade" id="ResetPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reset Password akun ini?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Reset" jika anda ingin Mereset Password akun ini. Password baru akan dikirim secara otomatis oleh sistem ke data email akun ini.</div>
        <div class="modal-footer">

        <form form method="POST" action="<?php echo base_url().'Admin/ResetPassword/'.$peserta[0]->id_user ?>" class="">
          <input type="hidden" id="last-name" name="id_user" required="required"  class="form-control "  value="<?php echo $peserta[0]->id_user?>">
          <button class="btn btn-secondary" type="submit" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit"  name="Reset">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
