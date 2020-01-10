<!-- DAFTAR HADIR SISWA -->
<div class="card demo-icons">
  <div class="card-header">
    <h4 class="card-title"> Tambah Absensi  </h4>
      Kajian Materi <?php echo  $jadwal[0]->nama_materi?></a> <br>
      Pada Tanggal  <?php echo  $jadwal[0]->tanggal?>  <?php echo  $jadwal[0]->jam; 
      $i=0;?> 
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <?php echo form_open_multipart(base_url()."Admin/InputAbsen"); ?>
      <form method="post" action="<?php echo base_url()."Admin/InputAbsen";?>">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead class=" text-primary">
      <tr>
        <th>
          Nama
        </th>
        <th>
          Alamat
        </th>
        <th>
          Kota
        </th>
        <th>
          Email
        </th>
        <th>
          No.Hp
        </th>
        <th class="text-right">
          Tambah Absen
        </th>
        </tr></thead>
        <tbody>
          <?php foreach ($peserta as $row) {
            $i+=1; ?>
          <tr>
            <td>
              <a href="<?php echo base_url ().'Admin/DetailPeserta/'.$row->id_user;?>" title="Detail"><?php echo $row->FName; ?> </a>
            </td>
            <td>
              <?php echo $row->AddLine; ?>
            </td>
            <td class="time">
              <?php echo $row->city; ?>
            </td>
            <td class="time">
              <?php echo $row->email; ?>
            </td>
            <td class="time">
              <?php echo $row->phone; ?>
            </td>
            <td class="time">
              <center><input name="ceklist[]" id="cek" type="checkbox" value="<?php echo $row->id_user; ?>"></input></center>                         
            </td>
            </tr>
            <?php } ?>                      
          </tbody>
        </table>
        <input type="hidden" name="total" value="<?php echo $i ?> "></input>
        <input type="hidden" name="id_jadwal" value="<?php echo  $jadwal[0]->id_jadwal?>"></input>
        <input type="hidden" name="id_materi" value="<?php echo  $jadwal[0]->id_materi?>"></input>
        <div class="col-lg-6 mb-4">
        <?php if ($_SESSION['status']==3){?>
        <a href="" ><button type="submit" name="Simpan" class="btn btn-success">Simpan Absensi</button></a> 
        <?php }?>
      </form>
      </div>
    </div>
  </div>
</div>
