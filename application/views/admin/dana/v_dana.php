<?php
	$menu = $this->uri->segment(2);
?>
<div class="col-md-12">
	<div class="card">
		<div class="header">
			<a href="<?=base_url("admin/$judul/form/tambah")?>" class="btn btn-success btn-fill pull-right">Tambah</a>
			<h4 class="title" style="text-transform:capitalize;">Data <?=$judul?></h4>
			<!-- <p class="category">Last Campaign Performance</p> -->
		</div>
		<div class="content">
			<div class="content table-responsive table-full-width">
				<table class="table table-hover table-striped table-responsive" id="tbl_kegiatan">
					<thead>
						<th>No</th>
						<th>Kode</th>
						<th>Dana</th>
						<th>Jumlah</th>
						<th>Tahun</th>
						<th>Tindakan</th>
					</thead>
					<tbody>
						<?php $i=1; foreach ($hasil as $w): ?>
							<tr>
								<td><?=$i++?></td>
								<td><?=$w->kode?></td>
								<td><?=$w->nama?></td>
								<td><?=$w->jumlah?></td>
								<td><?=$w->tahun?></td>
								<td class="tindakan">
									<!-- <a href="<?=base_url("admin/$menu/detail/$w->kode")?>" class="btn btn-info" title="Lihat">Lihat</a> -->
									<a href="<?=base_url("admin/$menu/form/ubah/$w->kode")?>" class="btn btn-success" title="Ubah">Ubah</a>
									<button onclick="proses('<?=base_url("admin/$menu/hapus/$w->kode")?>')" class="btn btn-danger" title="Hapus">Hapus</button>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('#tbl_kegiatan').DataTable();
} );
</script>
