<form action="<?php echo base_url('admin/lecture/edit/' . $lecture['id_lecture']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<?php
	echo csrf_field();
	?>
	<div class="form-group row">
		<label class="col-3">Nama lecture</label>
		<div class="col-2">
			<input type="text" name="prenama" class="form-control" placeholder="Gelar Depan" value="<?php echo $lecture['prenama'] ?>">
		</div>
		<div class="col-5">
			<input type="text" name="nama" class="form-control" placeholder="Nama lecture" value="<?php echo $lecture['nama'] ?>" required>
		</div>
		<div class="col-2">
			<input type="text" name="postnama" class="form-control" placeholder="Gelar Belakang" value="<?php echo $lecture['postnama'] ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Jabatan &amp; Fungsional</label>
		<div class="col-5">
			<input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo $lecture['jabatan'] ?>">
		</div>
		<div class="col-4">
			<input type="text" name="fungsional" class="form-control" placeholder="Fungsional" value="<?php echo $lecture['fungsional'] ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Tempat, tanggal lahir</label>
		<div class="col-3">
			<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat lahir" value="<?php echo $lecture['tempat_lahir'] ?>">
		</div>
		<div class="col-3">
			<input type="text" name="tanggal_lahir" class="form-control" placeholder="dd-mm-yyyy" value="<?php echo tanggal_id($lecture['tanggal_lahir']) ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Jenis, Status lecture</label>
		<div class="col-3">
			<select name="id_kategori_lecture" class="form-control">
				<?php foreach ($kategori_lecture as $kategori_lecture) { ?>
					<option value="<?php echo $kategori_lecture['id_kategori_lecture'] ?>" <?php if ($lecture['id_kategori_lecture'] == $kategori_lecture['id_kategori_lecture']) {
																								echo 'selected';
																							} ?>><?php echo $kategori_lecture['nama_kategori_lecture'] ?></option>
				<?php } ?>
			</select>
			<small class="text-secondary">Jenis lecture</small>
		</div>
		<div class="col-3">
			<select name="status_lecture" class="form-control">
				<option value="Publish">Publish</option>
				<option value="Draft" <?php if ($lecture['status_lecture'] == "Draft") {
											echo 'selected';
										} ?>>Draft</option>
			</select>
			<small class="text-secondary">Status lecture</small>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Email dan Telepon</label>
		<div class="col-5">
			<input type="text" name="email" class="form-control" placeholder="Email lecture" value="<?php echo $lecture['email'] ?>">
		</div>
		<div class="col-4">
			<input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $lecture['telepon'] ?>">
		</div>

	</div>

	<div class="form-group row">
		<label class="col-3">Foto</label>
		<div class="col-5">
			<input type="file" name="gambar" class="form-control" placeholder="gambar" value="<?php echo $lecture['gambar'] ?>">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Pendidikan</label>
		<div class="col-9">
			<textarea name="pendidikan" placeholder="Pendidikan" class="form-control konten"><?php echo $lecture['pendidikan'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Kelompok Keahlian</label>
		<div class="col-9">
			<textarea name="keahlian" placeholder="Kelompok Keahlian" class="form-control"><?php echo $lecture['keahlian'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Sekolah atau Fakultas</label>
		<div class="col-9">
			<textarea name="sekofaku" placeholder="Sekolah atau Fakultas" class="form-control"><?php echo $lecture['sekofaku'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Project</label>
		<div class="col-9">
			<textarea name="project" placeholder="Project" class="form-control konten"><?php echo $lecture['project'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">Publication</label>
		<div class="col-9">
			<textarea name="publication" placeholder="Publication" class="form-control konten"><?php echo $lecture['publication'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3">HKI</label>
		<div class="col-9">
			<textarea name="hki" placeholder="HKI" class="form-control konten"><?php echo $lecture['hki'] ?></textarea>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3"></label>
		<div class="col-9">
			<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
		</div>
	</div>


	<?php echo form_close(); ?>