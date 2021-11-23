    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 well">
                <?php
                $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
                echo form_open("admin/search", $attr);
                ?>
                <div class="form-group">
                    <div class="col-md-6">
                        <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="CARI" />
                        <a href="<?php echo base_url() . "admin/coba"; ?>" class="btn btn-primary">SEMUA DATA</a>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" id="search_text" name="search_text" placeholder="Search for Book Name..." type="text" value="<?php echo set_value('search_text'); ?>" />
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2 bg-border">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>L/P</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($get_dpt); ++$i) { ?>
                            <tr>
                                <td><?php echo ($page + $i + 1); ?></td>
                                <td><?php echo $get_dpt[$i]->username; ?></td>
                                <td><?php echo $get_dpt[$i]->nm_siswa; ?></td>
                                <td><?php echo $get_dpt[$i]->jk; ?></td>
                                <td><?php echo $get_dpt[$i]->nm_kelas; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php echo $pagination; ?>
            </div>
        </div>
    </div>