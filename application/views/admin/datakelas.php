<div class="row">
	<div class="col-lg-8">
		<div class="box">
			<div class="box-inner">
				<div class="box-header well">
					<h2>KELAS</h2>
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<th width="20">No</th>
							<th>Nama Kelas</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($datakelas as $load) {
							?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $load['nm_kelas']; ?></td>
									<td width="100"><a href="<?php echo base_url('index.php/admin/hapuskelas'); ?>/<?php echo $load['kd_kelas']; ?>"><button type="button" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-floppy-remove"></span>&nbsp;&nbsp;Hapus</button></a></td>
								</tr>
							<?php
							}
							?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="box">
			<div class="box-inner">
				<div class="box-header well">
					<h2>TAMBAH KELAS</h2>
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
					echo form_open('admin/simpankelas', $form_attribute);
					?>
					<label class=" label-control">Nama Kelas</label>
					<?php
					$form_attribute = array(
						'type'		=> 'text',
						'class'		=> 'form-control',
						'name'		=> 'nm_kelas'
					);
					echo form_input($form_attribute);
					?>
					<br />
					<button type="submit" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;&nbsp;SIMPAN DATA</button>
					<?php
					echo form_close();
					?>
				</div>
			</div>
		</div>
	</div>
</div>