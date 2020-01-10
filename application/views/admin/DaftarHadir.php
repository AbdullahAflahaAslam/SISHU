<div class="card demo-icons">
  <div class="card-header">
    <h5 class="card-title">Daftar Kehadiran </h5>
    <p class="card-category">Per Jadwal Kegiatan 
      <a href="https://shubaitullahrubaiyat.id">SHU Baitullah</a>
    </p>
  </div>
   <div class="card-body all-icons">
     <div id="icons-wrapper">
     
 <div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
    <thead class=" text-primary">
    <tr>
    <th>ID</th>
    <th>Materi</th>
    <th>Tempat</th>
    <th>Tanggal Pelaksanaan</th>
    </tr>
    </thead>
    <tbody>
          
      <?php foreach ($jadwal as $row) { ?>
      <tr>
        <td>
          <?php echo $row->id_jadwal;?>
        </td>
        <td>
          <a href="<?php echo base_url ().'admin/Absensi/'.$row->id_jadwal;?>">
            <?php echo $row->nama_materi;?>
          </a>
        </td>
        <td>
          Di Kota  <?php echo $row->City;?>
        </td>
        <td>
          <?php echo $row->tanggal;?> - <?php echo $row->jam;?>
        </td>
      </tr>
     <?php } ?>
    </tbody>
  </table>
  </div>
     <!-- <?php foreach ($jadwal as $row) { ?>
      <a href="<?php echo base_url ().'admin/Absensi/'.$row->id_jadwal;?>">
       <div class="col-lg-6">
         <div class="card mb-4 py-3 border-left-primary">
           <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $row->id_jadwal;?>  | Di Kota  <?php echo $row->City;?>
                  </div>
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tanggal Pelaksanaan : <?php echo $row->tanggal;?> - <?php echo $row->jam;?></div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row->nama_materi;?></div>
                </div>
              </div>
             
           </div>
         </div>
       </div>
       </a>
     
     <?php } ?> -->

     </div>
   </div>
</div>