<?php
echo form_open(base_url('admin/kategori_lecture/edit/' . $kategori_lecture['id_kategori_lecture']));
echo csrf_field();
?>

<div class="form-group row">
	<label class="col-3">Nama Kategori lecture</label>
	<div class="col-9">
		<input type="text" name="nama_kategori_lecture" class="form-control" placeholder="Nama kategori_lecture" value="<?php echo $kategori_lecture['nama_kategori_lecture'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Nomor urut Kategori lecture</label>
	<div class="col-9">
		<input type="number" name="urutan" class="form-control" placeholder="Nomor urut kategori_lecture" value="<?php echo $kategori_lecture['urutan'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>
</div>

<?php echo form_close(); ?>