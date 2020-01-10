<!-- DAFTAR HADIR SISWA -->
<div class="card demo-icons">
  <div class="card-header">
    <h4 class="card-title"> Daftar Hadir Pada Kegiatan </h4>
    <p class="card-category">
    <a href="<?php echo base_url();?>/Admin/DetailJadwal/<?php echo  $jadwal[0]->jam ?> "> 
      Kajian Materi <?php echo  $jadwal[0]->nama_materi?></a> <br>
      Pada Tanggal  <?php echo  $jadwal[0]->tanggal?>  <?php echo  $jadwal[0]->jam;?>  <br>
    </p>
  </div>
  <div class="card-body">
    <div class="col-lg-6 mb-4">
      <?php if ($_SESSION['status']==3){?>
      <a  href="<?php echo base_url ().'admin/InputAbsen/'.$idJadwal;?>"><button type="button" class="btn btn-success">Tambah Absensi</button></a>
      <?php }?>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class=" text-primary">
          <tr>
            <th>
              Nama  Peserta Didik
            </th>
            <th>
              Asal Kota
            </th>
            <th class="text-center">
              Aksi
            </th>
            <!-- <th class="text-right">
                        Keterangan
                      </th> -->
            </tr>
          </thead>
          <tbody>
          <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>/Admin/InputAbsensi">
            <?php foreach ($konfirmasi as $row) { 
              if ($row->absensi == 2) {
                # code...
              ?>

            <tr>
              <td>
                <a href="<?php echo base_url();?>/Admin/DetailPeserta/<?php echo $row->id_user;?> "><?php echo $row->FName;?> <?php echo $row->MName;?> <?php echo $row->LName;?> </a>
              </td>
              <td>
               <?php echo $row->city;?> 
              </td>
              <td class="text-center">
                <a href="<?php echo base_url ().'Admin/DeleteAbsensi/'.$row->id_konfirmasi.'/'.$jadwal[0]->id_jadwal;?>" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> | Delete </a>
              </td>
            </tr>
            <?php } 
            }?>
          </tbody>
        </table>
        <ul>
          <li> 
            <button type="submit" name ="save" class="btn btn-success pull-left">Save</button>
          </li>
        </ul>
        </form>
      </div>
    </div>
<hr>
  <!-- KONFIRMASI KEHADIRAN -->
  <div class="card-header">
    <h4 class="card-title"> Daftar Peserta Konfirmasi Pada Kegiatan </h4>
    <p class="card-category">
    <a href="<?php echo base_url();?>/Admin/DetailJadwal/<?php echo  $jadwal[0]->jam ?> "> 
      Kajian Materi <?php echo  $jadwal[0]->nama_materi?></a> <br>
      Pada Tanggal  <?php echo  $jadwal[0]->tanggal?>  <?php echo  $jadwal[0]->jam;?>  <br>
    </p>
  </div>
  <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class=" text-primary">
          <tr>
            <th>
              Nama  Peserta Didik
            </th>
            <th>
              Asal Kota
            </th>
            <th class="text-center">
              Penanggung Jawab
            </th>
            <!-- <th class="text-right">
                        Keterangan
                      </th> -->
            </tr>
          </thead>
          <tbody>
          
            <?php foreach ($konfirmasi as $row) { 
              if ($row->absensi >= 0) {
                # code...
              ?>

            <tr>
              <td>
                <a href="<?php echo base_url();?>/Admin/DetailPeserta/<?php echo $row->id_user;?> "><?php echo $row->FName;?> <?php echo $row->MName;?> <?php echo $row->LName;?> </a>
              </td>
              <td>
               <?php echo $row->city;?> 
              </td>
              <td class="text-center">
               <?php echo $row->penanggung_jawab;?> 
              </td>
             <!--  <td class="text-center">
                <a href="<?php echo base_url ().'Admin/DeleteAbsensi/'.$row->id_konfirmasi.'/'.$jadwal[0]->id_jadwal;?>" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> | Delete </a>
              </td> -->
            </tr>
            <?php } 
            }?>
          </tbody>
        </table>
        
        </div>
</div>
