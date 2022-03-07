<?php include('tambah.php'); ?>



<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="5%">File</th>
			<th width="20%">Nama</th>
			<th width="20%">Jabatan</th>
			<th width="30%">Kontak</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($kurikulum as $kurikulum) { ?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php if ($kurikulum['gambar'] == "") {
						echo '-';
					} else { ?>
						<a target="_blank" href="<?php echo base_url('assets/upload/kurikulum/' . $kurikulum['gambar']) ?>" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Unduh</a>
					<?php } ?>
				</td>
				<td><?php echo $kurikulum['namam'] ?>
					<small>
						<br><i class="fa fa-sitemap"></i> Jenis: <?php echo $kurikulum['nama_kategori_kurikulum'] ?>
						<br><i class="fa fa-home"></i> Fungsional: <?php echo $kurikulum['naming'] ?>
					</small>
				</td>
				<td><?php echo $kurikulum['fakul'] ?></td>
				<td><small><i class="fa fa-phone"></i> <?php echo $kurikulum['silring'] ?>
						<br><i class="fa fa-envelope"></i> <?php echo $kurikulum['silriing'] ?>
						<br><i class="fa fa-globe"></i> <?php echo $kurikulum['silleng'] ?>
						<br><i class="fas fa-user-graduate"></i> <?php echo $kurikulum['silling'] ?>
					</small>
				</td>
				<td>
					<a href="<?php echo base_url('admin/kurikulum/edit/' . $kurikulum['id_kurikulum']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url('admin/kurikulum/delete/' . $kurikulum['id_kurikulum']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</tbody>
</table>