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
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Edit Pengajar </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form method="post" action="<?php echo base_url(); ?>Admin/EditPengajar">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Depan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="FName"  class="form-control "  value="<?php echo $pengajar[0]->FName ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Tengah 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="MName"  class="form-control "  value="<?php echo $pengajar[0]->MName ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Belakang 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="LName"  class="form-control "  value="<?php echo $pengajar[0]->LName ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. KTP<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="no_ktp"  class="form-control "   required="required" value="<?php echo $pengajar[0]->no_ktp ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="last-name" name="email" required="required" class="form-control " value="<?php echo $pengajar[0]->email?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Address Line<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="AddLine"  class="form-control " value="<?php echo $pengajar[0]->AddLine?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="city" required="required" class="form-control "  value="<?php echo $pengajar[0]->city?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Province <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="province" required="required" class="form-control "  value="<?php echo $pengajar[0]->province?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Country <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="country" required="required"  class="form-control "  value="<?php echo $pengajar[0]->country?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="phone" required="required"  class="form-control "  value="<?php echo $pengajar[0]->phone?>">
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Pos <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="last-name" name="poscode"    class="form-control "  value="<?php echo $pengajar[0]->poscode?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="user" required="required"  class="form-control "  value="<?php echo $pengajar[0]->user?>">
                        </div>
                      </div>
                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                          <input type="hidden" id="last-name" name="pass" required="required"   class="form-control "  value="<?php echo $this->encryption->decrypt($pengajar[0]->pass);?>">
                        </div>
                      </div> -->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                      <input type="hidden" id="last-name" name="pass" required="required"   class="form-control "  value="<?php echo $this->encryption->decrypt($pengajar[0]->pass);?>">
                      <input type="hidden" id="last-name" name="id_user" required="required"  class="form-control "  value="<?php echo $pengajar[0]->id_user?>">
                      <input type="hidden" id="last-name" name="userLast" required="required"  class="form-control "  value="<?php echo $pengajar[0]->user?>">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class="btn btn-danger" href="#ResetPassword"  data-toggle="modal">Reset Passowrd</a>
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

        <form form method="POST" action="<?php echo base_url().'Admin/ResetPassword/'.$pengajar[0]->id_user ?>" class="">
          <input type="hidden" id="last-name" name="id_user" required="required"  class="form-control "  value="<?php echo $pengajar[0]->id_user?>">
          <button class="btn btn-secondary" type="submit" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit"  name="Reset">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>