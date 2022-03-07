<?php include('tambah.php'); ?>



<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="5%">Foto</th>
			<th width="20%">Nama</th>
			<th width="20%">Jabatan</th>
			<th width="30%">Kontak</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($lecture as $lecture) { ?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php if ($lecture['gambar'] == "") {
						echo '-';
					} else { ?>
						<img src="<?php echo base_url('assets/upload/lecture/thumbs/' . $lecture['gambar']) ?>" class="img img-thumbnail">
					<?php } ?>
				</td>
				<td><?php echo $lecture['nama'] ?>
					<small>
						<br><i class="fa fa-sitemap"></i> Jenis: <?php echo $lecture['nama_kategori_lecture'] ?>
						<br><i class="fa fa-home"></i> Fungsional: <?php echo $lecture['fungsional'] ?>
					</small>
				</td>
				<td><?php echo $lecture['jabatan'] ?></td>
				<td><small><i class="fa fa-phone"></i> <?php echo $lecture['telepon'] ?>
						<br><i class="fa fa-envelope"></i> <?php echo $lecture['email'] ?>
						<br><i class="fa fa-globe"></i> <?php echo $lecture['sekofaku'] ?>
						<br><i class="fas fa-user-graduate"></i> <?php echo $lecture['pendidikan'] ?>
					</small>
				</td>
				<td>
					<a href="<?php echo base_url('admin/lecture/edit/' . $lecture['id_lecture']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/lecture/delete/' . $lecture['id_lecture']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>