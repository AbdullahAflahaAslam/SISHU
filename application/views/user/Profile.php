<?php $row = $user->result();?>

<div class="content">
 <?php echo form_open_multipart(base_url().'user/Profile/'); ?>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <!-- <img width="10%" src="<?php echo base_url(); ?>assets/paper_dasbor/assets/img/damir-bosnjak.jpg" alt="..."> -->
              </div>
              <div class="card-body">
                <div class="center" style="margin: auto; width: 60%; padding: 10px;">
                   <center>
                  <a href="<?php echo base_url ().'User/ChangePhoto/'.$row[0]->id_user;?>">
                  
                   <div>
                  <?php 
                  if (empty($row[0]->file_photo)){
                  ?>
                  <img width="90px" height="100px"   src="<?php echo base_url() ?>assets/img/photo/default.jpg" alt="...">
                  <?php 
                   }else{
                  ?>
                  <img width="90px" height="100px"  src="<?php echo base_url().'file/'.$row[0]->id_user.'/'.$row[0]->file_photo ?>" alt="...">
                  <?php 
                  }
                  ?>
                   </div>
                   
                    <br>  
                   <i class="fa fa-pencil-square-o"></i>
                  </a>
                    <h5 class="title"><?php echo $row[0]->FName ?></h5>

                  
                  <p class="description">
                    <?php 
                      if ($_SESSION['status'] == 1) {
                         echo "As Student";
                       }else{
                        echo "As Teacher";
                       }
                     ?>
                    
                  </p>
                  </center>
                </div>
                <!-- <p class="description text-center">
                  "I like the way you work it
                  <br> No diggity
                  <br> I wanna bag it up"
                </p> -->
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-6 ml-auto">
                      <h5>Capaian
                        <br>
                        <small><?php  echo $jumlah; ?></small>
                      </h5>
                    </div>

                    <div class="col-lg-5 mr-auto">
                      <h5>Last Materi
                        <br>
                        <small>
                        <?php  
                          if (!empty($lastmateri)) {
                            echo $lastmateri[0]->nama_materi;
                          }
                         ?>
                        </small>
                      </h5>
                    </div>
                  </div>
                </div>
                 <hr>
                 <?php if ($_SESSION['status'] == 1) { ?>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 ml-auto text-center">
                      <h5>Kelas yang di Ikuti
                        <br>
                        <small>
                        <b>
                          <?php if (isset($row[0]->nama_kelas)) {
                            echo $row[0]->nama_kelas;
                          } ?>
                        </b></small><br>
                        <a href="#changeKelas" class="btn btn-primary btn-sm" data-toggle="modal">Change</a>
                      </h5>
                    </div>
                  </div>
                </div>
                 <?php }?>
              </div>
            </div>
            <hr>
            <?php if ($_SESSION['status'] == 1) { ?>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Materi Terakhir</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled team-members">


              <?php 

              //jika materi lebih dari 3 maka dipanggil 3 terakhir
              if ($jumlah > 3) {
                for ($i=0; $i < 3 ; $i++) {  ?>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        <?php echo $materi[$i]->id_kategori?> <?php echo $materi[$i]->nama_materi?>
                        <br />
                        <span class="text-muted">
                          <small> <?php echo $materi[$i]->Keterangan?></small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <a href="<?php echo base_url ().'Admin/DetailMateri/'.$materi[$i]->id_materi;?>" title="Detail"> 
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon" ><i class="fa fa-external-link-square"></i></btn>
                        </a>
                      </div>
                    </div>
                  </li>
               <?php } 
             }else{
                ?>

                <?php
                //jika kurang dari 3 dipanggil semua
                foreach ($materi as $mat) { ?>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <!-- <img src="<?php echo base_url(); ?>assets/paper_dasbor/assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive"> -->
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        <?php echo $mat->id_kategori?> <?php echo $mat->nama_materi?>
                        <br />
                        <span class="text-muted">
                          <small> <?php echo $mat->Keterangan?></small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <a href="<?php echo base_url ().'Admin/DetailMateri/'.$mat->id_materi;?>" title="Detail"> 
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon" ><i class="fa fa-external-link-square"></i></btn>
                        </a>
                      </div>
                    </div>
                  </li>
                <?php } 
                }
               ?>

                  
                </ul>
              </div>
            </div>
            <?php }?>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title"><i class="fa fa-user"></i>  Edit Profile</h5>
              </div>
              <div class="card-body">
               
                  <div class="row">
                  <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Nama Depan</label>
                        <input type="text" class="form-control" placeholder="Nama Depan" name="FName" value="<?php echo $row[0]->FName ?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Nama Tengah</label>
                        <input type="text" class="form-control" placeholder="Nama Tengah" name="MName" value="<?php echo $row[0]->MName ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label >Nama Belakang</label>
                         <input type="text" class="form-control" placeholder="Nama Belakang" name="LName" value="<?php echo $row[0]->LName ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>No. KTP</label>
                        <input type="text" class="form-control" placeholder="No. KTP" name="no_ktp" value="<?php echo $row[0]->no_ktp ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $row[0]->email ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $row[0]->tempat_lahir ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="<?php echo $row[0]->tanggal_lahir ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Address" name="AddLine" value="<?php echo $row[0]->AddLine ?>">
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Kota</label>
                        <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $row[0]->city ?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Negara</label>
                        <input type="text" class="form-control" placeholder="Country" name="country" value="<?php echo $row[0]->country ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="number" class="form-control" placeholder="ZIP Code" name="poscode" value="<?php echo $row[0]->poscode ?>">
                      </div>
                    </div>
                  </div>
                  <!-- HIDDEN INPUT -->
                  <input type="hidden"  name="id_user" value="<?php echo $row[0]->id_user ?>">
                  <input type="hidden"  name="pass_lama" value="<?php echo $this->encryption->decrypt($row[0]->pass);?>">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="pass" >
                         <small class="text-danger">*Password dibutuhkan untuk mengubah profil.</small>
                        <!-- <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea> -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="save" class="btn btn-primary btn-round">Update Profile</button>

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Logout Modal-->
  <div class="modal fade" id="changeKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Kelas </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form form method="POST" action="<?php echo base_url() ?>user/ChangeKelas" class="">
        <div class="modal-body">          
          <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="last-name">Kelas Sekolah Haji <span class="required">*</span>
            </label>
            <div class="col-md-12 col-sm-12 col-xs-12">
            <select class="form-control" name="id_kategori" size="1" required="" style="margin-bottom:20px;">
              <option value="">---------Kelas---------</option>
              <?php foreach ($kelas as $k) { ?>
              <option value="<?php echo $k->id_kategori;?>"><?php echo $k->nama_kelas; ?> </option>
            <?php }?>
            </select>
            <input type="hidden"  name="id_user" value="<?php echo $row[0]->id_user ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit" name="Save" >Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>