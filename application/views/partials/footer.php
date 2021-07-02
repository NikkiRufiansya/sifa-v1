
<script>
	var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/detect.js"></script>
<script src="<?php echo base_url()?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url()?>assets/js/waves.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/switchery/switchery.min.js"></script>

<!-- Counter js  -->
<script src="<?php echo base_url()?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/counterup/jquery.counterup.min.js"></script>

<!--Morris Chart-->
<script src="<?php echo base_url()?>assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="<?php echo base_url()?>assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="<?php echo base_url()?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.app.js"></script>

<!--data table-->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/pages/jquery.datatables.init.js"></script>
<script>
	$(document).ready(function () {
		$('#datatable').dataTable();
		$('#datatable-keytable').DataTable({keys: true});
		$('#datatable-responsive').DataTable();
		$('#datatable-colvid').DataTable({
			"dom": 'C<"clear">lfrtip',
			"colVis": {
				"buttonText": "Change columns"
			}
		});
		$('#datatable-scroller').DataTable({
			ajax: "<?php echo base_url()?>assets/plugins/datatables/json/scroller-demo.json",
			deferRender: true,
			scrollY: 380,
			scrollCollapse: true,
			scroller: true
		});
		var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
		var table = $('#datatable-fixed-col').DataTable({
			scrollY: "300px",
			scrollX: true,
			scrollCollapse: true,
			paging: false,
			fixedColumns: {
				leftColumns: 1,
				rightColumns: 1
			}
		});
	});
	TableManageButtons.init();

</script>


</body>
</html>
