<?php
foreach ($idsekolah as $load) {
}
?>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- content ends -->
    </div>
    <!--/#content.col-md-0-->
<?php } ?>
</div>
<!--/fluid-row-->
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <hr>
    <footer class="row">
        <b>
            <p class="col-md-4 col-sm-6 col-xs-6 copyright">&copy; <?php echo date('Y') ?>
                <a href="#" target="_blank">
                    <?php echo $load['nm_sekolah']; ?>
                </a>
            </p>
        </b>

    </footer>
<?php } ?>
<script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery-3.4.1.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/jquery/bootstrap-3.4.1.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/responsive-tables/responsive-tables.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
</body>

</html>
</body>

</html>