<div class="card demo-icons">
             <div class="card-header">
                <h5 class="card-title">Daftar Sub Materi <?php echo $kategori[0]->Kategori ?></h5>
                <p class="card-category">Kurikulum 
                  <a href="https://shubaitullahrubaiyat.id">SHU Baitullah</a>
                </p>
              </div>
              <div class="card-body all-icons">
              <!-- admin menu -->
              <?php if ($_SESSION['status']>=2){?>
              <div class="col-lg-6 mb-4">
                <a href="<?php echo base_url ().'admin/InputMateri';?>" ><button type="button" class="btn btn-success">Tambahkan Sub Materi</button></a>
              </div>
              
              <div class="card-body all-icons">
                <div id="icons-wrapper">
                  <section>
                    <ul>
                      <?php foreach ($materi as $row) { ?>
                        <li > 
                        <i class="nc-icon nc-bullet-list-67"></i>
                        <em><a href="<?php echo base_url ().'admin/DetailMateri/'.$row->id_materi;?>" ><?php echo $row->nama_materi; ?></a></em>
                        <?php if(!empty($row->file_materi)){ ?>
                        <em><a href="<?php echo base_url().'file/materi/'.$row->id_kategori.'/'.$row->file_materi ?>" >Download Materi</a></em>
                        <?php } else{?>
                         <em></em>
                        <?php } ?>
                        <p><?php echo $row->Keterangan; ?></p></a>
                        <a href="<?php echo base_url ().'Admin/EditMateri/'.$row->id_materi;?>" title="Edit"><i class="fa fa-pencil"></i> </a>   |
                        <a href="<?php echo base_url ().'Admin/DeleteMateri/'.$row->id_materi;?>" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> </a>
                        </li>
                      <?php } ?>
                      
                      <!-- list of icons here with the proper class-->
                    </ul>
                  </section>
                </div>
              </div>
              <?php }else{?> 
              <div class="card-body all-icons">
                <div id="icons-wrapper">
                  <section>
                    <ul>
                      <?php foreach ($materi as $row) { ?>
                        <li > 
                        <i class="nc-icon nc-bullet-list-67"></i>
                        <em><a href="<?php echo base_url ().'admin/DetailMateri/'.$row->id_materi;?>" ><?php echo $row->nama_materi; ?></a></em>
                        <?php if(!empty($row->file_materi)){ ?>
                        <em><a href="<?php echo base_url().'file/materi/'.$row->id_kategori.'/'.$row->file_materi ?>" >Download Materi</a></em>
                        <?php } else{?>
                         <em></em>
                        <?php } ?>
                        <p><?php echo $row->Keterangan; ?></p></a>
                        
                        </li>
                      <?php } ?>
                      
                      <!-- list of icons here with the proper class-->
                    </ul>
                  </section>
                </div>
              </div>
              <?php } ?>
              </div>
            </div>