<div class="card demo-icons">
  <div class="card-header">
    <h5 class="card-title">Daftar Kelas </h5>
    <p class="card-category">Kurikulum 
     <a href="https://shubaitullahrubaiyat.id">SHU Baitullah</a>
    </p>
  </div>
  <!-- admin menu -->
  <div class="card-body all-icons">
<?php if ($_SESSION['status']==3 || $_SESSION['status']==2){?>
    <div class="col-lg-6 mb-4">
      <a href="<?php echo base_url ().'admin/InputKelas';?>" ><button type="button" class="btn btn-success">Tambahkan Kelas</button></a>
    </div>
   
    <?php foreach ($lokasi as $lok) { ?>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Daftar Kelas Kota <?php echo $lok->City; ?> <?php echo $lok->add_line; ?> </h6>
        </div>
        <div class="card-body">
          <section>
            <ul>
              <?php foreach ($kelas as $row) { 
                  if($row->City == $lok->City){?>
              <li > 
              <i class="nc-icon nc-bullet-list-67"></i>
              <em><a href="<?php echo base_url ().'admin/DetailKelas/'.$row->id_kelas;?>" ><?php echo $row->nama_kelas; ?></em>
              <p><?php echo $row->angkatan; ?></p></a>
                <a href="<?php echo base_url ().'Admin/EditKelas/'.$row->id_kelas;?>" title="Edit"><i class="fa fa-pencil"></i> </a>   |
                <a href="<?php echo base_url ().'Admin/DeleteKelas/'.$row->id_kelas;?>" title="Delete" onclick="return confirm('Apakah anda yakin menghapus data kelas?');"><i class="fa fa-trash"></i> </a>
              </li>
              <?php }
              } ?>
            </ul>
          </section>
        </div>
      </div>
      <?php } ?>
 
<?php } else{?> 
    <div class="card-body">
          <section>
            <ul>
              <?php foreach ($kelas as $row) { 
                  if($row->City == $lok->City){?>
              <li > 
              <i class="nc-icon nc-bullet-list-67"></i>
              <em><a href="<?php echo base_url ().'admin/DetailKelas/'.$row->id_kelas;?>" ><?php echo $row->nama_kelas; ?></em>
              <p><?php echo $row->angkatan; ?></p></a>
                <a href="<?php echo base_url ().'Admin/EditKelas/'.$row->id_kelas;?>" title="Edit"><i class="fa fa-pencil"></i> </a>   |
                <a href="<?php echo base_url ().'Admin/DeleteKelas/'.$row->id_kelas;?>" title="Delete" onclick="return confirm('Apakah anda yakin menghapus data kelas?');"><i class="fa fa-trash"></i> </a>
              </li>
              <?php }
              } ?>
            </ul>
          </section>
        </div>
    </div>
    </div>
<?php } ?>    
