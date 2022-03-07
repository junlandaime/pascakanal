<?php include('tambah.php'); ?>
<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="25%">Nama</th>
			<th width="25%">Slug</th>
			<th width="25%">Urutan</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($kategori_kurikulum as $kategori_kurikulum) { ?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $kategori_kurikulum['nama_kategori_kurikulum'] ?></td>
				<td><?php echo $kategori_kurikulum['slug_kategori_kurikulum'] ?></td>
				<td><?php echo $kategori_kurikulum['urutan'] ?></td>
				<td>
					<a href="<?php echo base_url('admin/kategori_kurikulum/edit/' . $kategori_kurikulum['id_kategori_kurikulum']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/kategori_kurikulum/delete/' . $kategori_kurikulum['id_kategori_kurikulum']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>