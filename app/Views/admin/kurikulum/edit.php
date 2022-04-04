<form action="<?php echo base_url('admin/kurikulum/edit/' . $kurikulum['id_kurikulum']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<?php
	echo csrf_field();
	?>
	<div class="form-group row">
		<label class="col-3">Mata Kuliah</label>
		<div class="col-2">
			<input type="text" name="kodem" class="form-control" placeholder="Kode Mata Kuliah" value="<?php echo $kurikulum['kodem'] ?>">
		</div>
		<div class="col-3">
			<input type="text" name="namam" class="form-control" placeholder="Nama Mata Kuliah" value="<?php echo $kurikulum['namam'] ?>" required>
		</div>
		<div class="col-2">
			<input type="text" name="naming" class="form-control" placeholder="English" value="<?php echo $kurikulum['naming'] ?>">
		</div>
		<div class="col-2">
			<input type="number" name="jumsks" class="form-control" placeholder="Jumlah SKS" value="<?php echo $kurikulum['jumsks'] ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Penyelenggara</label>
		<div class="col-2">
			<input type="number" name="kodep" class="form-control" placeholder="Kode Penyelenggara" value="<?php echo $kurikulum['kodep'] ?>">
		</div>
		<div class="col-4">
			<input type="text" name="namap" class="form-control" placeholder="Penyelenggara" value="<?php echo $kurikulum['namap'] ?>">
		</div>
		<div class="col-3">
			<input type="text" name="fakul" class="form-control" placeholder="Fakultas" value="<?php echo $kurikulum['fakul'] ?>">
		</div>
	</div>


	<div class="form-group row">
		<label class="col-3">Jenis, Status kurikulum</label>
		<div class="col-3">
			<select name="id_kategori_kurikulum" class="form-control">
				<?php foreach ($kategori_kurikulum as $kategori_kurikulum) { ?>
					<option value="<?php echo $kategori_kurikulum['id_kategori_kurikulum'] ?>" <?php if ($kurikulum['id_kategori_kurikulum'] == $kategori_kurikulum['id_kategori_kurikulum']) {
																									echo 'selected';
																								} ?>><?php echo $kategori_kurikulum['nama_kategori_kurikulum'] ?></option>
				<?php } ?>
			</select>
			<small class="text-secondary">Jenis kurikulum</small>
		</div>
		<div class="col-3">
			<select name="status_kurikulum" class="form-control">
				<option value="Publish">Publish</option>
				<option value="Draft" <?php if ($kurikulum['status_kurikulum'] == "Draft") {
											echo 'selected';
										} ?>>Draft</option>
			</select>
			<small class="text-secondary">Status kurikulum</small>
		</div>
	</div>


	<div class="form-group row">
		<label class="col-3">File</label>
		<div class="col-5">
			<input type="file" name="gambar" class="form-control" placeholder="gambar" value="<?php echo $kurikulum['gambar'] ?>">
		</div>
		<div class="col-3">
			<input type="number" name="tahun" class="form-control" placeholder="Tahun Silabus" value="<?php echo $kurikulum['tahun'] ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Silabus Ringkas</label>
		<div class="col-5">
			<textarea name="silring" placeholder="Silabus Ringkas" class="form-control"><?php echo $kurikulum['silring'] ?></textarea>
		</div>
		<div class="col-4">
			<textarea name="silriing" placeholder="English" class="form-control"><?php echo $kurikulum['silriing'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Silabus Lengkap</label>
		<div class="col-5">
			<textarea name="silleng" placeholder="Silabus Lengkap" class="form-control"><?php echo $kurikulum['silleng'] ?></textarea>
		</div>
		<div class="col-4">
			<textarea name="silling" placeholder="English" class="form-control"><?php echo $kurikulum['silling'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Luaran</label>
		<div class="col-9">
			<textarea name="luaran" placeholder="Luaran Mata Kuliah" class="form-control konten"><?php echo $kurikulum['luaran'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Mata Kuliah Terkait</label>
		<div class="col-9">
			<textarea name="matkulit" placeholder="Mata Kuliah Terkait" class="form-control"><?php echo $kurikulum['matkulit'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Kegiatan Penunjang</label>
		<div class="col-9">
			<textarea name="penunjang" placeholder="Kegiatan Penunjang" class="form-control"><?php echo $kurikulum['penunjang'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Pustaka</label>
		<div class="col-9">
			<textarea name="pustaka" placeholder="Pustaka" class="form-control konten"><?php echo $kurikulum['pustaka'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Panduan Penilaian</label>
		<div class="col-9">
			<textarea name="penilaian" placeholder="Panduan Penilaian" class="form-control"><?php echo $kurikulum['penilaian'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Catatan Tambahan</label>
		<div class="col-9">
			<textarea name="tambahan" placeholder="Catatan Tambahan" class="form-control"><?php echo $kurikulum['tambahan'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Satuan Acara Perkuliahan</label>
		<div class="col-9">
			<textarea name="satuanacara" placeholder="Satuan Acara Perkuliahan" class="form-control konten"><?php echo $kurikulum['satuanacara'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3"></label>
		<div class="col-9">
			<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
		</div>
	</div>


	<?php echo form_close(); ?>