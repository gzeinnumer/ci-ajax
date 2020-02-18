    <script src="<?php base_url();?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php base_url();?>assets/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?php base_url();?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="<?php base_url();?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?php base_url();?>assets/dist/js/demo.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_data_dummy').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url" : "<?php echo base_url();?>Person/fetch",
                    "type" : "POST"
                },
                "columnDefs":[{
                    "targets" : [-1],
                    "orderable" : false,
                }]
            });
        } );
    </script>
</body>
</html>