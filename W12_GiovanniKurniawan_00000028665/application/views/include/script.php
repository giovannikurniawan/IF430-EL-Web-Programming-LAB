<script src="<?php echo base_url('assets/js/jquery-1.12.4.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>

<!--<script>
	$(document).ready(function(){
		$('table').DataTable();
	});
</script>-->

<?php foreach($crud['js_files'] as $file): ?>
		<script src="<?php echo $file; ?>" ></script>
<?php endforeach; ?>