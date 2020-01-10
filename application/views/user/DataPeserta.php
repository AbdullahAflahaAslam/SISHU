
            <div class="card demo-icons">
              <div class="card-header">
                <h4 class="card-title"> Daftar Peserta </h4>
              </div>
              <div class="card-body">
                <div class="col-lg-6 mb-4">
                <?php if ($_SESSION['status']==3){?>
                <a href="<?php echo base_url ().'admin/InputPeserta';?>" ><button type="button" class="btn btn-success">Tambahkan Peserta</button></a> 
                <?php }?>
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class=" text-primary">
                      <tr><th>
                        Nama
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
                        Wilayah
                      </th><th>
                        Penanggung Jawab
                      </th>
                      <th>
                        Capaian Materi
                      </th>
                      <th class="text-right">
                        Keterangan
                      </th>
                    </tr></thead>
                    <tbody>
                      <?php 
                      $i=0;
                      foreach ($peserta as $row) { ?>
                        <tr>
                        <td>
                          <a href="<?php echo base_url ().'Admin/DetailPeserta/'.$row->id_user;?>" title="Detail"><?php echo $row->FName; ?> <?php echo $row->MName; ?>  <?php echo $row->LName; ?> </a>
                        </td>
                        <td>
                          <?php echo $row->AddLine; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->city; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->province; ?>
                        </td>
                         <td class="time">
                          <?php echo $row->wilayah_shu; ?>
                        </td> <td class="time">
                          <?php echo $row->penanggung_jawab; ?>
                        </td>
                        <td class="time">
                           <a href="<?php echo base_url ().'admin/DetailMateriPeserta/'. $row->id_user;?>" ><?php echo $total[$i];  $i+=1;?> Kajian</a>
                          
                        </td>
                        <td class="text-right">
                        <a href="<?php echo base_url ().'Admin/DetailPeserta/'.$row->id_user;?>" title="Detail"><i class="fa fa-tasks"></i> </a>  |
                        <a href="<?php echo base_url ().'Admin/EditPeserta/'.$row->id_user;?>" title="Edit"><i class="fa fa-pencil"></i> </a>   |
                        <a href="<?php echo base_url ().'Admin/DeletePeserta/'.$row->id_user;?>" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                      <?php } ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
