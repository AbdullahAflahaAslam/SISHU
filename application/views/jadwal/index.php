
            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Jadwal Pembelajaran </h4>
              </div>
              <div class="card-body">

              <div class="col-lg-6 mb-4">
              <?php if ($_SESSION['status']==3){?>
                 <a href="<?php echo base_url ().'admin/InputJadwal';?>" ><button type="button" class="btn btn-success">Tambahkan Jadwal</button></a>
              <?php }?>
              </div>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                    <thead class=" text-primary">
                      <tr>
                      <th >
                        ID 
                      </th>  
                      

                      <th>
                        Materi
                      </th>
                      <th>
                        Tanggal
                      </th>
                      <th>
                        Jam
                      </th>
                      <th>
                        Kota
                      </th>
                      <th>
                        Alamat
                      </th>
                      <th>
                        Pengajar
                      </th>
                      <!-- View jika admin dan User -->
                      <?php if($_SESSION['status']==1){
                          ?>
                      <th class="text-right" width="20%">
                        Keterangan
                      </th>
                      <?php
                      }else{ ?>
                      <th >
                        Keterangan
                      </th>  
                       <?php if($_SESSION['status']==3){?>
                       <th class="text-right">
                        Action
                      </th>  
                      <?php }
                      }
                      ?>

                    </tr></thead>
                    <tbody>
                      <?php foreach ($jadwal as $row) { 
                        //jika jadwal sudah terlewati
                         if( $row->tanggal > $now){ 
                        ?>
                        <tr>
                        <td>
                            <?php echo $row->id_jadwal; ; ?>
                        </td>
                      <?php if($_SESSION['status']==3){ ?>
                        <td >
                          <a href="<?php echo base_url ().'Admin/DetailJadwal/'.$row->id_jadwal;?>" title="Detail">
                          <?php echo $row->nama_materi; ?></a>
                        </td>
                      <?php }else{ ?>
                        <td > 
                          <a href="<?php echo base_url ().'User/DetailJadwal/'.$row->id_jadwal;?>" title="Detail">
                          <?php echo $row->nama_materi; ?></a>
                        </td> 
                      <?php }?>
                        </td>
                        <td>
                          <?php echo $row->tanggal; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->jam; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->City; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->add_line; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->FName; ?>
                        </td>
                        

                          <!-- View jika admin dan User -->
                          <?php if($_SESSION['status']==1){
                          ?>
                          <td class="text-right">
                           <a href="<?php echo base_url ().'user/Konfirmasi/'.$row->id_jadwal;?>" style="color: white" class="btn btn-success btn-sm">Konfirmasi</a> | 
                           <a href="<?php echo base_url ().'user/Cancel/'.$row->id_jadwal;?>" style="color: white" class="btn btn-danger btn-sm">Cancel</a>
                          </td>
                          <?php
                          }else{ ?>
                          <td>
                             <?php echo $row->keterangan; ?>
                          </td>
                          <?php if($_SESSION['status']==3){?>
                            <td class="text-right">
                              <a href="<?php echo base_url ().'Admin/EditJadwal/'.$row->id_jadwal;?>" title="Edit"><i class="fa fa-pencil"></i> </a>   |
                              <a href="<?php echo base_url ().'Admin/DeleteJadwal/'.$row->id_jadwal;?>" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> </a>
                            </td>
                          <?php }
                          }
                           ?>
                       
                      </tr>
                      <?php }
                      } ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
