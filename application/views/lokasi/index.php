<div class="card demo-icons">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Lokasi </h4>
              </div>
              <?php if ($_SESSION['status']==3){?>
              <ul>    
                <li> 
                <a href="<?php echo base_url ().'admin/InputLokasi';?>" ><button type="button" class="btn btn-success">Tambahkan Lokasi</button></a>
                 </li>
              </ul>
              <?php }?> 
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class=" text-primary">
                      <tr><th>
                        Alamat
                      </th>
                      <th>
                        Kota
                      </th>
                      <th>
                        Provinsi
                      </th>
                      <!-- View jika admin dan User -->
                      <?php if($_SESSION['status']==3){
                          ?>
                       <th class="text-right">
                        Action
                      </th> 
                      <?php } ?>
                      <!-- <th class="text-right">
                        Salary
                      </th> -->
                    </tr></thead>
                    <tbody>
                      <?php foreach ($lokasi as $row) { ?>
                      <tr>
                        <td>
                          <?php echo $row->add_line; ?>
                        </td>
                        <td>
                          <?php echo $row->City; ?>
                        </td>
                        <td>
                          <?php echo $row->province; ?>
                        </td>
                          <?php if($_SESSION['status']==3){
                          ?>
                        <td class="text-right">
                          <a href="<?php echo base_url ().'Admin/EditLokasi/'.$row->id_lokasi;?>" title="Edit"><i class="fa fa-pencil"></i> </a>   |
                          <a href="<?php echo base_url ().'Admin/DeleteLokasi/'.$row->id_lokasi;?>" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> </a>
                        </td> 
                          <?php } ?>
                        <?php } ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
</div>