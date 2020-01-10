<div class="card demo-icons">
	<div class="card-header">
    	<h4 class="card-title"> Capaian Materi Siswa </h4>
        <p class="card-category">
        	<a href="<?php echo base_url();?>Admin/DetailPeserta/<?php echo $peserta[0]->id_user?>"> <?php echo $peserta[0]->FName?></a>
        </p>
	</div>
	<div class="card-body">
		<div class="col-lg-6 mb-4">
			<h5 class="card-title"> Materi yang sudah di ikuti </h5>
    	</div>
       	<div class="table-responsive">
			<?php foreach ($materi as $row) { ?>
			<div class="card mb-2 py-3 border-left-warning">
				<div class="card-body">
					<div class="text-xs font-weight-bold text-primary text-uppercase ">ID Kategori : <?php echo $row->id_kategori?>
                	</div>
					<?php echo $row->nama_materi?>
					<p class="mb-0 small">
						<?php echo $row->Keterangan?>
					</p>
				</div>
			</div>
			<?php } ?>
		</div>
		<br>
		<div class="col-lg-6 mb-4">
			<h5 class="card-title"> Materi yang belum di ikuti </h5>
    	</div>
		<div class="table-responsive">
			<?php foreach ($materi_belum as $not) { ?>
			<div class="card mb-2 py-3 border-left-danger">
				<div class="card-body">
					<div class="text-xs font-weight-bold text-primary text-uppercase ">ID Kategori : <?php echo $not->id_kategori?>
                	</div>
					<?php echo $not->nama_materi?>
					<p class="mb-0 small">
						<?php echo $not->Keterangan?>
					</p>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
