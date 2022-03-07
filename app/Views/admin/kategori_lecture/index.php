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
		foreach ($kategori_lecture as $kategori_lecture) { ?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $kategori_lecture['nama_kategori_lecture'] ?></td>
				<td><?php echo $kategori_lecture['slug_kategori_lecture'] ?></td>
				<td><?php echo $kategori_lecture['urutan'] ?></td>
				<td>
					<a href="<?php echo base_url('admin/kategori_lecture/edit/' . $kategori_lecture['id_kategori_lecture']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/kategori_lecture/delete/' . $kategori_lecture['id_kategori_lecture']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>