<?php
echo form_open(base_url('admin/kategori_kurikulum/edit/' . $kategori_kurikulum['id_kategori_kurikulum']));
echo csrf_field();
?>

<div class="form-group row">
	<label class="col-3">Nama Kategori kurikulum</label>
	<div class="col-9">
		<input type="text" name="nama_kategori_kurikulum" class="form-control" placeholder="Nama kategori_kurikulum" value="<?php echo $kategori_kurikulum['nama_kategori_kurikulum'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Nomor urut Kategori kurikulum</label>
	<div class="col-9">
		<input type="number" name="urutan" class="form-control" placeholder="Nomor urut kategori_kurikulum" value="<?php echo $kategori_kurikulum['urutan'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>
</div>

<?php echo form_close(); ?>