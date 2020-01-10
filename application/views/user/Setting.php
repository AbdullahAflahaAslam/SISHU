
<div class="card">
              <div class="card-header">
                <h5 class="card-title">Konfigurasi Keamanan Akun</h5>
                <!-- <p class="card-category">Handcrafted by our friend
                  <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
                  <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
                </p> -->
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-plain">
                      <div class="card-header">
                        <h5 class="card-title"> <i class="fa fa-user"></i> User Account</h5>
                      </div>
                      <div class="card-body">
                      <?php if ($_SESSION['status']==3){?>
                        <form class="form-horizontal" method="post" action="<?php echo base_url() ?>Admin/Setting">
                      <?php }else {?>
                        <form class="form-horizontal" method="post" action="<?php echo base_url() ?>user/Setting">
                      <?php }?>
                        <div class="form-group">
                          <label class="col-lg-6 control-label">Username</label>
                          <div class="col-lg-12"><input type="text" class="form-control" name="user" value="<?php echo $user[0]->user;  ?>"></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-6 control-label">Nama Depan</label>
                          <div class="col-lg-12"><input type="text" class="form-control" name="FName" value="<?php echo $user[0]->FName;  ?>"></div>
                        </div>
                        <!-- <div class="form-group">
                          <label class="col-lg-6 control-label">Nama Tengah</label>
                          <div class="col-lg-12"><input type="text" class="form-control" name="MName" value="<?php echo $user[0]->MName;  ?>"></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-6 control-label">Nama Belakang</label>
                          <div class="col-lg-12"><input type="text" class="form-control" name="LName" value="<?php echo $user[0]->LName;  ?>"></div>
                        </div> -->
                        <div class="form-group">
                          <label class="col-lg-6 control-label">Password</label>
                          <div class="col-lg-12"><input type="password" class="form-control" name="passwordAcc"><small class="text-danger">*Password dibutuhkan untuk mengubah user account.</small></div>
                          <input type="hidden" class="form-control" name="id_user" value="<?php echo $user[0]->id_user;  ?>">
                          <input type="hidden" value="<?php echo $user[0]->pass; ?>" name="pass"></input>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-9">
                            <button class="btn btn-danger" type="reset">Reset</button>
                            <button class="btn btn-primary" name="simpan_profile" type="submit">Ubah Profil</button>
                          </div>
                        </div>
                      </form> 
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-plain">
                      <div class="card-header">
                        <h5 class="card-title"><i class="fa fa-key"></i> Password</h5>
                      </div>
                      <div class="card-body">
                        <?php if ($_SESSION['status']==3){?>
                          <form class="form-horizontal" method="post" action="<?php echo base_url() ?>Admin/Setting">
                        <?php }else {?>
                          <form class="form-horizontal" method="post" action="<?php echo base_url() ?>user/Setting">
                        <?php }?>
                        <div class="form-group">
                          <label class="col-lg-6 control-label">Password Saat Ini</label>
                          <div class="col-lg-12"><input type="password" class="form-control" name="password"></div>
                          <input type="hidden" value="<?php echo $user[0]->pass; ?>" name="pass"></input>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-6 control-label">Password Baru</label>
                          <div class="col-lg-12"><input type="password" class="form-control" name="new_password"></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-6 control-label">Konfirmasi Password Baru</label>
                          <div class="col-lg-12"><input type="password" class="form-control" name="new_password2"></div>
                          <input type="hidden" class="form-control" name="id_user" value="<?php echo $user[0]->id_user;  ?>">
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-9">
                            <button class="btn btn-danger" type="reset">Reset</button>
                            <button class="btn btn-primary" type="submit" name="simpan_pass">Ubah Password</button>
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
