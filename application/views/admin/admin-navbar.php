<body>
    <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
        <!-- topbar starts -->
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-inner">
                <button type="button" class="navbar-toggle pull-left animated flip">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('/admin'); ?>">
                    <span><b>E-PEMILOS</b></span>
                </a>

                <!-- user dropdown starts -->
                <div class="btn-group pull-right">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-sm">&nbsp;&nbsp;ADMIN</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url("/admin/gantipassword"); ?>">UBAH PASSWORD</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url("/admin/logout"); ?>">KELUAR</a></li>
                    </ul>
                </div>
                <!-- user dropdown ends -->

            </div>
        </div>
        <!-- topbar ends -->
    <?php } ?>
    <div class="ch-container">
        <div class="row">
            <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
                <!-- left menu starts -->
                <div class="col-sm-3 col-lg-3">
                    <div class="sidebar-nav">
                        <div class="nav-canvas">
                            <div class="nav-sm nav nav-stacked">
                            </div>
                            <ul class="nav nav-pills nav-stacked main-menu">
                                </br>
                                <li class="nav-header">
                                    <b>MAIN PENGATURAN UMUM</b>
                                </li>
                                <li><a class="ajax-link" href="<?php echo base_url('/admin'); ?>"><i class="glyphicon glyphicon-sort"></i><span>&nbsp;&nbsp;<b>DASHBOARD</b></span></a>
                                </li>
                                <!-- <li><a class="ajax-link" href="<?php echo base_url('/admin/idsekolah'); ?>"><i class="glyphicon glyphicon-home"></i><span>&nbsp;&nbsp;<b>PROFIL SEKOLAH</b></span></a></li> -->
                                <li><a class="ajax-link" href="<?php echo base_url('/admin/datakelas'); ?>"><i class="glyphicon glyphicon-list-alt"></i><span>&nbsp;&nbsp;<b>DATA KELAS</b></span></a></li>
                                <br>
                                <li class="nav-header hidden-md"><b>KANDIDAT & DPT</b></li>
                                <!-- <li><a class="ajax-link" href="<?php echo base_url('/admin/tambahcalon'); ?>"><i class="glyphicon glyphicon-th"></i><span>&nbsp;&nbsp;<b>TAMBAH KANDIDAT</b></span></a></li> -->
                                <!-- <li><a class="ajax-link" href="<?php echo base_url('/admin/tambahdpt'); ?>"><i class="glyphicon glyphicon-th-list"></i><span>&nbsp;&nbsp;<b>TAMBAH DPT</b></span></a></li> -->
                                <li><a class="ajax-link" href="<?php echo base_url('/admin/datacalon'); ?>"><i class="glyphicon glyphicon-user"></i><span>&nbsp;&nbsp;<b>DATA KANDIDAT</b></span></a></li>
                                <li><a class="ajax-link" href="<?php echo base_url('/admin/datadpt'); ?>"><i class="glyphicon glyphicon-th-list"></i><span>&nbsp;&nbsp;<b>DATA DPT</b></span></a></li>
                                <br>
                                <li class="nav-header hidden-md"><b>HASIL & LAPORAN</b></li>
                                <li><a class="ajax-link" href="<?php echo base_url('/admin/hasilvote') ?>"><i class="glyphicon glyphicon-random"></i><span>&nbsp;&nbsp;<b>HASIL PEMILIHAN</b></span></a></li>
                                <li><a class="ajax-link" href="<?php echo base_url('/admin/daftarhadir') ?>"><i class="glyphicon glyphicon-list"></i><span>&nbsp;&nbsp;<b>DAFTAR HADIR</b></span></a></li>
                                <li><a class="ajax-link" href="<?php echo base_url('/admin/laporan') ?>"><i class="glyphicon glyphicon-print"></i><span>&nbsp;&nbsp;<b>CETAK LAPORAN</b></span></a></li>
                                </br>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/span-->
                <!-- left menu ends -->

                <noscript>
                    <div class="alert alert-block col-md-12">
                        <h4 class="alert-heading">Warning!</h4>
                    </div>
                </noscript>

                <div id="content" class="col-lg-9 col-sm-9">
                    <!-- content starts -->
                <?php } ?>