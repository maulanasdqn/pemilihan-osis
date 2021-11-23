<?php foreach ($jmlpemilih as $pemilih) ?>
<?php foreach ($jmlvote as $vote); ?>
<div class="box">
    <div class="box-inner">
        <div class="box-header well">
            <div class="row">
                <div class="col-lg-6">
                    <h2>DAFTAR HADIR PEMILIH</h2>
                </div>
                <div class="col-lg-6 text-right">
                    <a href="<?php echo base_url('index.php/admin/cetakdaftarhadir'); ?>"><button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-save"></span> DOWNLOAD DAFTAR HADIR</button></a>
                </div>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-sm table-striped table-bordered bootstrap-datatable datatable responsive">
                <thead class="thead-dark">
                    <tr class="">
                        <th scope="col">NO</th>
                        <th scope="col">JENIS DATA</th>
                        <th scope="col">ANGKA</th>
                    </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>JUMLAH TOTAL DPT</td>
                    <td><?php echo $pemilih['jumlah']; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>JUMLAH DPT HADIR</td>
                    <td><?php echo $vote['jumlah']; ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>JUMLAH DPT TIDAK HADIR</td>
                    <td>
                        <?php echo $pemilih['jumlah'] - $vote['jumlah']; ?>
                    </td>
                </tr>
            </table>
            <table class="table table-sm table-striped table-bordered bootstrap-datatable datatable responsive">
                <thead>
                    <th width="15" class="text-center">No</th>
                    <th class="text-center">Nisn</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Keterangan</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($daftarhadir as $loaddata) {
                    ?>
                        <tr>
                            <td> <?php echo $no++; ?></td>
                            <td> <?php echo $loaddata['username']; ?> </td>
                            <td> <?php echo $loaddata['nm_siswa']; ?> </td>
                            <td> <?php echo $loaddata['nm_kelas']; ?> </td>
                            <td> <?php echo $loaddata['hadir']; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php echo $pagination; ?>
        </div>
    </div>
</div>