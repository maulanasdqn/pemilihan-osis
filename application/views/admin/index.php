<?php
foreach ($jmlcalon as $jumlah) {
}
foreach ($jmlpemilih as $jumlahpemilih) {
}
foreach ($datapilketos as $loaddata) {
}
foreach ($idsekolah as $load) {
}
?>

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-inner">
                <div class="box-header well">
                    <h2> IDENTITAS LEMBAGA </h2>
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
                    <div>
                        <?php
                        $form_attribute = array(
                            'method'    => 'post',
                            'class'        => 'form-horizontal'
                        );
                        echo form_open("admin/updateidsekolah", $form_attribute);
                        ?>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="box">
                                    <div class="box-inner">
                                        <div class="box-content">
                                            <label class="label-control">NPSN</label>
                                            <?php
                                            $form_attribute = array(
                                                'type'        => 'text',
                                                'class'        => 'form-control',
                                                'name'        => 'npsn',
                                                'value'        => $load['npsn'],
                                            );
                                            echo form_input($form_attribute);
                                            ?>
                                            <label class="label-control">Nama Sekolah</label>
                                            <?php
                                            $form_attribute = array(
                                                'type'        => 'text',
                                                'class'        => 'form-control',
                                                'name'        => 'nm_sekolah',
                                                'value'        => $load['nm_sekolah']
                                            );
                                            echo form_input($form_attribute);
                                            ?>
                                            <label class="label-control">Nama Kelapa Sekolah</label>
                                            <?php
                                            $form_attribute = array(
                                                'type'        => 'text',
                                                'class'        => 'form-control',
                                                'name'        => 'kpl_sekolah',
                                                'value'        => $load['kpl_sekolah']
                                            );
                                            echo form_input($form_attribute);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box">
                                    <div class="box-inner">
                                        <div class="box-content">
                                            <label class="label-control">NIP</label>
                                            <?php
                                            $form_attribute = array(
                                                'type'        => 'text',
                                                'class'        => 'form-control',
                                                'name'        => 'nip',
                                                'value'        => $load['nip']
                                            );
                                            echo form_input($form_attribute);
                                            ?>
                                            <label class="label-control">Alamat Jalan</label>
                                            <?php
                                            $form_attribute = array(
                                                'type'        => 'text',
                                                'class'        => 'form-control',
                                                'name'        => 'jln',
                                                'value'        => $load['jln']
                                            );
                                            echo form_input($form_attribute);
                                            ?>
                                            <label class="label-control">Desa/Kelurahan</label>
                                            <?php
                                            $form_attribute = array(
                                                'type'        => 'text',
                                                'class'        => 'form-control',
                                                'name'        => 'desa',
                                                'value'        => $load['desa']
                                            );
                                            echo form_input($form_attribute);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box">
                                    <div class="box-inner">
                                        <div class="box-content">
                                            <label class="label-control">Kecamatan</label>
                                            <?php
                                            $form_attribute = array(
                                                'type'        => 'text',
                                                'class'        => 'form-control',
                                                'name'        => 'kec',
                                                'value'        => $load['kec']
                                            );
                                            echo form_input($form_attribute);
                                            ?>
                                            <label class="label-control">Kabupaten/Kota</label>
                                            <?php
                                            $form_attribute = array(
                                                'type'        => 'text',
                                                'class'        => 'form-control',
                                                'name'        => 'kab',
                                                'value'        => $load['kab']
                                            );
                                            echo form_input($form_attribute);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;&nbsp;UPDATE DATA</button>
                            </div>
                        </div>
                        <?php
                        echo form_close();
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="box">
            <div class="box-inner">
                <div class="box-header well">
                    <h2>PENGATURAN INFORMASI KEGIATAN</h2>
                </div>
                <div class="box-content">
                    <?php if ($this->session->flashdata('update')) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('update'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('updatefailed')) { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('updatefailed'); ?>
                        </div>
                    <?php } ?>
                    <?php
                    $form_attribute = array(
                        'method'    => 'post',
                        'class'     => 'form-horizontal'
                    );
                    echo form_open('admin/updatedatapilketos', $form_attribute);
                    ?>
                    <label class="label-control"> Tahun Pelajaran</label>
                    <?php
                    $form_attribute = array(
                        'type'      => 'text',
                        'class'     => 'form-control',
                        'name'      => 'tapel',
                        'value'     => $loaddata['tapel']
                    );
                    echo form_input($form_attribute);
                    ?>
                    <!-- <br> -->
                    <label class="label-control"> Tanggal Pelaksanaan</label>
                    <?php
                    $form_attribute = array(
                        'type'      => 'date',
                        'class'     => 'form-control',
                        'name'      => 'tgl',
                        'value'     => $loaddata['tgl']
                    );
                    echo form_input($form_attribute);
                    ?><br />
                    <button type="submit" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;&nbsp;SIMPAN DATA</button>
                    <?php
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="box">
            <div class="box-inner">
                <div class="box-header well">
                    <h2>RESET AKUN DPT</h2>
                </div>
                <div class="box-content">
                    <p><b>Fitur ini akan me-reset akun/user yang digunakan oleh orang lain</b></p>
                    <!-- <hr> -->
                    <?php if ($this->session->flashdata('reset_info')) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('reset_info'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('reset_failed')) { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('reset_failed'); ?>
                        </div>
                    <?php } ?>
                    <?php
                    $form_attribute = array(
                        'method'    => 'post',
                        'class'     => 'form-horizontal'
                    );
                    echo form_open('admin/resetuser', $form_attribute);
                    ?>
                    <label class="label-control"> NISN</label>
                    <?php
                    $form_attribute = array(
                        'type'      => 'text',
                        'class'     => 'form-control',
                        'name'      => 'username',
                        'required'  => ''
                    );
                    echo form_input($form_attribute);
                    ?>
                    <br />
                    <button type="submit" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-floppy-remove"></span>&nbsp;&nbsp;RESET USER</button>
                    <?php
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="box">
            <div class="box-inner">
                <div class="box-header well">
                    <h2>RESET DATA PEMILIH</h2>
                </div>
                <div class="box-content">
                    <p><b>Fitus Hapus Semua Data</b></p>
                    <!-- <hr> -->
                    <p>Fitur ini digunakan apabila telah selesai melakukan pemilihan dan telah mengunduh
                        <a class="text-danger" href="<?php echo base_url('/admin/cetakdaftarhadir'); ?>">Daftar Hadir</a> dan
                        <a class="text-danger" href="<?php echo base_url('/admin/laporan'); ?>">Laporan Pemilihan</a> dan ingin melakukan pemilihan di tahun berikutnya.
                    </p>
                    <?php if ($this->session->flashdata('reset')) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('reset'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('resetfailed')) { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('resetfailed'); ?>
                        </div>
                    <?php } ?>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#reset"><span class="glyphicon glyphicon-floppy-remove"></span>&nbsp;&nbsp;RESET DATA PEMILIH</button>
                    <div id="reset" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <b><span class="glyphicon glyphicon-success"></span> PERINGATAN</b>
                                </div>
                                <div class="modal-body">
                                    <p>Fitur ini akan menghapus semua data kecuali IDENTITAS SEKOLAH & DATA KELAS</p>
                                    <p>Apakah anda yakin ingin Me-Reset semua data? </p>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?php echo base_url('/admin/resetdata'); ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;&nbsp;YAKIN</button></a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-remove"></span>&nbsp;&nbsp;TIDAK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>