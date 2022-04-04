<?php include('tambah.php'); ?>



<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="5%">File</th>
			<th width="20%">Nama</th>
			<th width="20%">Kode Matkul</th>
			<th width="30%">Penyelenggara</th>
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
						<br><i class="fa fa-flag-usa"></i> <?php echo $kurikulum['naming'] ?>
						<!-- <br><i class="fa fa-sitemap"></i> Jenis: <?php echo $kurikulum['nama_kategori_kurikulum'] ?> -->
					</small>
				</td>
				<td><?php echo $kurikulum['kodem'] ?></td>
				<td><small><?= $kurikulum['kodep'] ?> - <?= $kurikulum['namap'] ?> / <?= $kurikulum['fakul'] ?>
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