
<div class="content">
 <?php echo form_open_multipart(base_url().'user/Kelengkapan/'); ?>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title"><i class="fa fa-archive"></i> Upload Kelengkapan Data</h5>

              </div>
              <div class="card-body">
                <code><?php echo $status ?></code>
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <code><?php echo $status ?></code>
                      <label>Scan KTP</label><br>
                     <!--  <?php 
                          if (empty($row->file_ktp)){
                        ?>
                        <img src="<?php echo base_url() ?>assets/img/photo/default.jpg" alt="..." id="test" style="max-width: 180px; max-height: 240px;line-height: 10px; margin: auto;" >
                        <?php 
                         }else{
                        ?>
                        <img src="<?php echo base_url().'file/'.$user[0]->id_user .'/'.$user[0]->file_photo ?>" alt="..." id="test" style="max-width: 180px; max-height: 240px;line-height: 10px; margin: auto;" >
                        <?php 
                          }
                        ?> -->
                        
                        
                        <?php 
                          if (!empty($user[0]->file_ktp)){
                        ?>
                        <a href="<?php echo base_url().'file/'.$user[0]->id_user.'/'.$user[0]->file_ktp ?>" download><?php echo $user[0]->file_ktp ?></a>
                        <?php 
                         }
                        ?>
                        <br>
                        <input type="file" name="file_ktp" class="default" id="file_ktp"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
                        <button type="submit" name="upload_ktp" class="btn-sm btn-primary btn-round"><i class="fa fa-upload"></i> Upload</button>
                        <hr class="sidebar-divider">
                      </div>     
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 ">
                      
                       <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label>Scan KK</label>
                        <br>
                        <?php 
                          if (!empty($user[0]->file_kk)){
                        ?>
                        <a href="<?php echo base_url().'file/'.$user[0]->id_user.'/'.$user[0]->file_kk ?>" download><?php echo $user[0]->file_kk ?></a>
                        <?php 
                         }
                        ?>
                        <br>
                        <input type="file" name="file_kk" class="default" id="file_kk"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
                        <button type="submit" name="upload_kk" class="btn-sm btn-primary btn-round"><i class="fa fa-upload"></i> Upload</button>
                        <hr class="sidebar-divider">
                      </div>     
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label>Buku Nikah</label>
                        <br>
                        <?php 
                          if (!empty($user[0]->file_buku_nikah)){
                        ?>
                        <a href="<?php echo base_url().'file/'.$user[0]->id_user.'/'.$user[0]->file_buku_nikah ?>" download><?php echo $user[0]->file_buku_nikah ?></a>
                        <?php 
                         }
                        ?>
                        <br>
                        <input type="file" name="file_buku_nikah" class="default" id="file_buku_nikah"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
                        <button type="submit" name="upload_buku_nikah" class="btn-sm btn-primary btn-round"><i class="fa fa-upload"></i> Upload</button>
                        <hr class="sidebar-divider">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label>Miningitis</label>
                        <br>
                        <?php 
                          if (!empty($user[0]->file_miningitis)){
                        ?>
                        <a href="<?php echo base_url().'file/'.$user[0]->id_user.'/'.$user[0]->file_miningitis ?>" download><?php echo $user[0]->file_miningitis ?></a>
                        <?php 
                         }
                        ?>
                        <br>
                        <input type="file" name="file_miningitis" class="default" id="file_miningitis"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
                        <button type="submit" name="upload_miningitis" class="btn-sm btn-primary btn-round"><i class="fa fa-upload"></i> Upload</button>
                        <hr class="sidebar-divider">
                      </div>   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label>Surat Ijin Umrah</label>
                        <br>
                        <?php 
                          if (!empty($user[0]->file_surat_ijin)){
                        ?>
                        <a href="<?php echo base_url().'file/'.$user[0]->id_user.'/'.$user[0]->file_surat_ijin ?>" download><?php echo $user[0]->file_surat_ijin ?></a>
                        <?php 
                         }
                        ?>
                        <br>
                        <input type="file" name="file_surat_ijin" class="default" id="file_surat_ijin"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
                        <button type="submit" name="upload_surat_ijin" class="btn-sm btn-primary btn-round"><i class="fa fa-upload"></i> Upload</button>
                        <hr class="sidebar-divider">
                      </div>
                    
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label>Tanggal Berangkat Umrah</label>
                        <br>
                        <?php 
                          if (!empty($user[0]->tanggal_umroh)){
                        ?>
                        <input type="date" name="tanggal_umroh" required="" class="form-control" value="<?php echo $user[0]->tanggal_umroh ?>"></input>
                        <?php 
                         }else{
                        ?>
                        <input type="date" name="tanggal_umrah" required="" class="form-control" ></input>
                        <?php 
                         }
                        ?>
                        <hr class="sidebar-divider">
                      </div>
                    </div>
                  </div>
                  <!-- HIDDEN INPUT -->
                  <input type="hidden"  name="id_user" value="<?php echo  $user[0]->id_user ?>">
                  <input type="hidden"  name="pass_lama" value="<?php echo  $user[0]->pass ?>">
                  
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="Simpan" class="btn btn-primary btn-round"><i class="fa fa-save"></i> Save</button>

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>