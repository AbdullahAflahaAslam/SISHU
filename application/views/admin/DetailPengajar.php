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
                <h4 class="card-title"> Detail Pengajar </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <?php echo form_open_multipart(base_url()."Admin/EditPengajar"); ?>
             
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" readonly="" id="last-name" name="FName"  class="form-control "  value="<?php echo $pengajar[0]->FName ?>" >
                          <input type="hidden" id="last-name" name="id_user"  class="form-control "  value="<?php echo $pengajar[0]->id_user ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="AddLine"  class="form-control" readonly="" required="required" value="<?php echo $pengajar[0]->AddLine ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kota<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="city" required="required" readonly="" class="form-control "  value="<?php echo $pengajar[0]->city ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Provinsi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="province"  class="form-control " readonly="" value="<?php echo $pengajar[0]->province ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="city" required="required" readonly="" class="form-control "  value="<?php echo $pengajar[0]->FName ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Country <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="country" required="required" readonly="" class="form-control "  value="<?php echo $pengajar[0]->FName ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="last-name" name="email" required="required"  readonly="" class="form-control "  value="<?php echo $pengajar[0]->email ?>">
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Hp <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="last-name" name="phone" required="required" readonly="" class="form-control "  value="<?php echo $pengajar[0]->phone ?>">
                        </div>
                      </div>
                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">User <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="user" required="required" readonly=""  class="form-control "  value="<?php echo $pengajar[0]->user ?>">
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                          <input type="text" id="last-name" name="pass" readonly="" required="required"   class="form-control "  value="<?php echo $this->encryption->decrypt($pengajar[0]->pass);?>">
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
            </div>
    <script >


       
    </script>