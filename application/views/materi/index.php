<div class="card demo-icons">
  <div class="card-header">
    <h5 class="card-title">Daftar Materi </h5>
    <p class="card-category">Kurikulum 
     <a href="https://shubaitullahrubaiyat.id">SHU Baitullah</a>
    </p>
  </div>
  <!-- admin menu -->
  <div class="card-body all-icons">
<?php if ($_SESSION['status']==3 || $_SESSION['status']==2){?>
    <div class="col-lg-6 mb-4">
      <a href="<?php echo base_url ().'admin/InputKategori';?>" ><button type="button" class="btn btn-success">Tambahkan Materi</button></a>
    </div>
   <!--  <div class="col-lg-6 mb-4">
      <a href="<?php echo base_url ().'admin/InputMateri';?>" ><button type="button" class="btn btn-success">Tambahkan Materi</button></a>
    </div> -->
    <div id="icons-wrapper">
    <section>
      <ul>
        <?php foreach ($ketegori as $row) { ?>
        <li > 
        <i class="nc-icon nc-bullet-list-67"></i>
        <em><a href="<?php echo base_url ().'admin/Materi/'.$row->id_kategori;?>" ><?php echo $row->Kategori; ?></em>
        <p><?php echo $row->keterangan; ?></p></a>
        <a href="<?php echo base_url ().'Admin/EditKategori/'.$row->id_kategori;?>" title="Edit"><i class="fa fa-pencil"></i> </a>   |
        <a href="<?php echo base_url ().'Admin/DeleteKategori/'.$row->id_kategori;?>" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> </a>
        </li>
        <?php } ?>
      </ul>
    </section>
    </div>
    </div>
    </div>
<?php } else{?> 
    <div id="icons-wrapper">
    <section>
      <ul>
        <?php foreach ($ketegori as $row) { ?>
        <li > 
        <i class="nc-icon nc-bullet-list-67"></i>
        <em><a href="<?php echo base_url ().'user/Materi/'.$row->id_kategori;?>" ><?php echo $row->Kategori; ?></em>
        <p><?php echo $row->keterangan; ?></p></a>
        </li>
        <?php } ?>
      </ul>
    </section>
    </div>
    </div>
    </div>
<?php } ?>    
