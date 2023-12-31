<?php
	$menu = $this->uri->segment(2);
?>
<section id="get-started" class="padd-section text-center wow fadeInUp">
	<div class="container">
		<div class="section-title text-center">
			<h2>Data UMKM</h2>
			<p class="separator" style="">Berikut data UMKM Batang Kuis.</p>
		</div>
<div class="col-md-12">
	<div class="">
		<div class="header">
			<!-- <p class="category">Last Campaign Performance</p> -->
		</div>
		<div class="content">
			<div class="content table-responsive">
				<table class="table table-hover table-striped" id="tbl_kegiatan">
					<thead>
						<th>No</th>
						<th>Nama</th>
						<th>Bidang</th>
						<th>Pemilik</th>
						<th>Tgl Berdiri</th>
						<th>Alamat</th>
						<th>No Telp</th>
						<th>Logo</th>
						<!-- <th>Tindakan</th> -->
					</thead>
					<tbody>
						<?php $i=1; foreach ($hasil as $w): ?>
							<tr>
								<td><?=$i++?></td>
								<td><a href="<?=base_url("potensi/detail_umkm/$w->id_umkm")?>" target="_blank"><?=$w->nama?></a></td>
								<td><?=$w->bidang?></td>
								<td><?=$w->pemilik?></td>
								<td><?=$w->tgl_berdiri?></td>
								<td><?=$w->alamat?></td>
								<td><?=$w->no_telp?></td>
								<td><img width="100" src="<?=$w->logo_file?>"></td>
								<!-- <td class="tindakan">
									<a href="<?=base_url("potensi/detail_umkm/$w->id_umkm")?>" target="_blank" class="btn btn-info" title="Lihat">Lihat</a>
								</td> -->
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<script type="text/javascript">
$(document).ready(function() {
	$('#tbl_kegiatan').DataTable();
} );
</script>
