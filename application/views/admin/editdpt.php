<?php foreach ($datakddpt as $load) {
} ?>
<div class="row">
	<div class="col-lg-4">
		<div class="box">
			<div class="box-inner">
				<div class="box-header well">
					<h2> UPDATE DATA DPT</h2>
				</div>
				<div class="box-content">
					<?php if ($this->session->flashdata('info')) { ?>
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $this->session->flashdata('info'); ?>
						</div>
					<?php } ?>
					<?php if ($this->session->flashdata('failed')) { ?>
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $this->session->flashdata('failed'); ?>
						</div>
					<?php } ?>
					<?php
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('admin/updatedpt', $form_attribute);
					?>
					<label class="label-control">NISN</label>
					<?php
					$form_attribute = array(
						'type'		=> 'text',
						'class'		=> 'form-control',
						'name'		=> 'nisn',
						'value'     => $load['username'],
						'readonly'  => ''
					);
					echo form_input($form_attribute);
					?>
					<label class="label-control">Nama</label>
					<?php
					$form_attribute = array(
						'type'		=> 'text',
						'class'		=> 'form-control',
						'name'		=> 'nm_siswa',
						'value'     => $load['nm_siswa']
					);
					echo form_input($form_attribute);
					?>
					<label class="label-control">Jenis Kelamin</label>
					<select class="form-control" name="jk">
						<option selected value="<?php echo $load['jk']; ?>"><?php echo $load['jk']; ?></option>

						<option value="">Pilih Jenis Kelamin</option>
						<option value="L">L</option>
						<option value="P">P</option>
					</select>
					<label class="label-control">Kelas</label>
					<select class="form-control" name="kd_kelas">
						<option selected value="<?php echo $load['kd_kelas']; ?>"> <?php echo $load['nm_kelas']; ?> </option>
						<option value="">Pilih Kelas</option>
						<?php foreach ($datakelas as $load) { ?>
							<option value="<?php echo $load['kd_kelas']; ?>"> <?php echo $load['nm_kelas']; ?> </option>
						<?php
						}
						?>
					</select>
					<br />
					<button type="submit" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;&nbsp;UPDATE DATA</button>
					<a href="<?php echo base_url('admin/datadpt'); ?>" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;KEMBALI</a>
					<?php
					echo form_close();
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-8">
		<div class="box">
			<div class="box-inner">
				<div class="box-header well">
					<h2>PROFIL DPT</h2>
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<th class="text-center">No</th>
							<th class="text-center">NISN</th>
							<th class="text-center">Nama Siswa</th>
							<th class="text-center">L/P</th>
							<th class="text-center">Kelas</th>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($datakddpt as $load) {
							?>
								<tr>
									<td class="text-center"><?php echo $no++; ?></td>
									<td class="text-center"><?php echo $load['username']; ?></td>
									<td><?php echo $load['nm_siswa']; ?></td>
									<td class="text-center"><?php echo $load['jk']; ?></td>
									<td><?php echo $load['nm_kelas']; ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>