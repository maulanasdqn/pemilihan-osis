<div class="row">
	<div class="col-lg-8">
		<div class="box">
			<div class="box-inner">
				<div class="box-header well">
					<h2> TAMBAH DARTAR PEMILIH TETAP (DPT) </h2>
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
					echo form_open_multipart('admin/simpandpt', $form_attribute);
					?>
					<label class="label-control">NISN</label>
					<?php
					$form_attribute = array(
						'type'		=> 'text',
						'class'		=> 'form-control',
						'name'		=> 'nisn'
					);
					echo form_input($form_attribute);
					?>
					<label class="label-control">Nama</label>
					<?php
					$form_attribute = array(
						'type'		=> 'text',
						'class'		=> 'form-control',
						'name'		=> 'nm_siswa'
					);
					echo form_input($form_attribute);
					?>
					<label class="label-control">Jenis Kelamin</label>
					<select class="form-control" name="jk">
						<option selected value="L">L</option>
						<option value="P">P</option>
					</select>
					<label class="label-control">Kelas</label>
					<select class="form-control" name="kd_kelas">
						<?php foreach ($datakelas as $load) { ?>
							<option value="<?php echo $load['kd_kelas']; ?>"> <?php echo $load['nm_kelas']; ?> </option>
						<?php
						}
						?>
					</select>
					<br />
					<button type="submit" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;&nbsp;SIMPAN DATA</button>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="box">
			<div class="box-inner">
				<div class="box-header well">
					<h2> UPLOAD TEMPLATE EXCEL</h2>
				</div>
				<div class="box-content">
					<button class="btn btn-sm btn-success" style="width: 100%;"><span class="glyphicon glyphicon-cloud-download"></span>&nbsp;&nbsp;DOWNLOAD EXCEL</button> <br /> <br />
					<form action="" method="post">
						<input type="file" class="form-control" />
						<br>
						<button type="submit" class="btn btn-sm btn-warning" style="width: 100%;"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;UPLOAD DATA</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>