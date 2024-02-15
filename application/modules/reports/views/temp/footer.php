</div>
<!-- core js file -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/dataTables.bundle.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable')
            .addClass('nowrap')
            .dataTable({
                responsive: true,
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
    });
</script>
<!-- page js file -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<script src="../js/pages/index.js"></script>
</body>