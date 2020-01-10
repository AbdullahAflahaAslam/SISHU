
            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Daftar Pengajar </h4>
              </div>           
              <div class="card-body">
              <div class="col-lg-6 mb-4">
                <?php if ($_SESSION['status']==3){?>
                <a href="<?php echo base_url ().'admin/InputPengajar';?>" ><button type="button" class="btn btn-success">Tambah Pengajar</button></a>
                <?php }?>
              </div>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                    <thead class=" text-primary">
                      <tr><th>
                        Nama Lengkap
                      </th>
                      <th>
                        Alamat
                      </th>
                      <th>
                        Kota
                      </th>
                      <th>
                        Provinsi
                      </th>
                      <th>
                        Email
                      </th>
                      <?php if ($_SESSION['status']==3){?>
                      <th class="text-center">
                        Keterangan
                      </th>

                      <?php } ?>
                    </tr></thead>
                    <tbody>
                      <?php foreach ($pengajar as $row) { ?>
                        <tr>
                        <td>
                          <?php if ($_SESSION['status']==3){?>
                           <a href="<?php echo base_url ().'Admin/DetailPengajar/'.$row->id_user;?>" title="Detail">
                          <?php echo $row->FName; ?> <?php echo $row->MName; ?>  <?php echo $row->LName; ?> </a> 
                          <?php }else{ ?>
                            <a href="<?php echo base_url ().'User/DetailPengajar/'.$row->id_user;?>" title="Detail">
                          <?php echo $row->FName; ?> <?php echo $row->MName; ?>  <?php echo $row->LName; ?> </a>  
                          <?php }?>
                        </td>
                        <td>
                          <?php echo $row->AddLine; ?>
                        </td>
                        <td >
                          <?php echo $row->city; ?>
                        </td>
                        <td >
                          <?php echo $row->province; ?>
                        </td>
                        <td >
                          <?php echo $row->email; ?>
                        </td>
                        <?php if ($_SESSION['status']==3){?>
                        <td class="text-center">
                        
                        <a href="<?php echo base_url ().'Admin/EditPengajar/'.$row->id_user;?>" title="Edit"><i class="fa fa-pencil"></i> </a>   |
                        <a href="<?php echo base_url ().'Admin/DeletePengajar/'.$row->id_user;?>" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> </a>
                        </td>
                         <?php } ?>
                      </tr>
                      <?php } ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
