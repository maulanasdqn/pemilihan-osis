<div class="container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header" style="height:80px; padding:13px;">
				<p>DAFTAR CALON KETUA & WAKIL OSIS<br>MAN 2 SITUBONDO</p>
			</div>
			<div class="box-content">

				<div class="row">
					<?php
					foreach ($datacalon as $loaddata) {
					?>
						<div class="col-lg-4">
							<div class="box">
								<div class="box-inner">
									<div class="box-header well">
										<h2 class="text-center bold" style="color:#555555; text-align:center; font-size:12px;"><?php echo $loaddata['no']; ?> - <?php echo $loaddata['nama']; ?> </h2>
									</div>
									<div class="box-content">
										<img width="100%" src="<?php echo base_url(); ?>asset/img/<?php echo $loaddata['photo']; ?>" /></br /><br />
										<?php
										$form_attribute	= array(
											'methode'	=> 'post',
											'class'		=> 'form-horizontal'
										);
										echo form_open('user/vote', $form_attribute);
										?>
										<?php
										$form_attribute	= array(
											'type'		=> 'hidden',
											'name'		=> 'nisn',
											'class'		=> 'form-control',
											'value'		=> $loaddata['nisn']
										);
										echo form_input($form_attribute);
										?>
										<?php
										$form_attribute	= array(
											'type'		=> 'hidden',
											'name'		=> 'username',
											'class'		=> 'form-control',
											'value'		=> $username
										);
										echo form_input($form_attribute);
										?>
										<button class="btn btn-success" style="width: 100%;"><b>(klik/pilih) - PASANGAN NO <?php echo $loaddata['no']; ?></b></button>
										<?php
										echo form_close();
										?>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>