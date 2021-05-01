<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css'); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<?php foreach($crud['css_files'] as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>"/>
<?php endforeach;?>