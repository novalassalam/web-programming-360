	<div class="col-lg-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover tabel_jadwal">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">id</th>
						<th class="text-center">Nama</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$no = 1;
					if ($isi) {
						foreach ($isi as $jam) {
					?>
							<tr>
								<td align="center"><?php echo $no++; ?></td>
								<td align="center"><?php echo $jam->id_kota; ?></td>
								<td align="center"><?php echo $jam->nama_kota; ?></td>
							</tr>
					<?php }
					} else {
						echo 'data kosong';
					} ?>
				</tbody>
			</table>
		</div>

	
	</div>

