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
      <a class="navbar-brand" href="<?php echo base_url('/user'); ?>">
        <span><b>E-PEMILOS</b></span>
      </a>

      <!-- user dropdown starts -->
      <div class="btn-group pull-right">
        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          <a href="<?php echo base_url(); ?>index.php/user/logout"><span class="glyphicon glyphicon-log-out"></span><b>&nbsp;&nbsp;KELUAR/LOGOUT</b></a>
        </button>
      </div>
      <!-- user dropdown ends -->
    </div>
  </div>
  <!-- topbar ends -->
<?php } ?>