<?php
foreach ($jmlpemilih as $pemilih) {
}
foreach ($jmlvote as $votedata) {
}
?>
<meta http-equiv="refresh" content="5" />
<div class="box" id="data">
	<div class="box-inner">
		<div class="box-header well">
			<h2>HASIL PEROLEHAN SUARA</h2>
		</div>
		<div class="box-content">
			<div class="row">
				<?php
				foreach ($vote as $datavote) {
				?>
					<div class="col-lg-4">
						<div class="box">
							<div class="box-inner">
								<div class="box-content">
									<img width="100%" height="240" src="<?php echo base_url(); ?>asset/img/<?php echo $datavote['photo']; ?>" />
									<div class="box-header well bg-info">
										<center>
											<?php echo $datavote['nama']; ?>
										</center>
									</div>

									<div class="text-center">
										<p class="badge badge-warning"> PEROLEHAN SUARA </p>
										<h1 class="badge badge-warning"><?php echo $datavote['jumlah']; ?> </h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
			<table class="table table-sm table-striped table-bordered bootstrap-datatable datatable responsive">
				<thead class="thead-dark">
					<tr class="">
						<th scope="col">NO</th>
						<th scope="col">JENIS DATA</th>
						<th scope="col">ANGKA</th>
						<!-- <th scope="col">Handle</th> -->
					</tr>
				</thead>
				<tr>

					<td>1 </td>
					<td>JUMLAH TOTAL DPT </td>
					<td> <?php echo $pemilih['jumlah']; ?> </td>
				</tr>
				<tr>
					<td>2 </td>
					<td>JUMLAH DPT MEMILIH </td>
					<td> <?php echo $votedata['jumlah']; ?> </td>
				</tr>
				<tr>
					<td>3 </td>
					<td>JUMLAH DPT TIDAK MEMILIH </td>
					<td>
						<?php
						$pemilih = $pemilih['jumlah'];
						$vote	= $votedata['jumlah'];
						echo $pemilih - $vote;
						?>
					</td>
				</tr>
			</table>
		</div>

	</div>
</div>