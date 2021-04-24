<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
	<head>
		<title>Week 11</title>
		<?php
		echo $js;
		echo $css;
		?>
	</head>
	<body>
		<?php echo $header; ?>
		<br><br><br><br>
		<div class="container">
			<h1>Add Product <span style="font-size:25px; color:grey;">Northwind Traders</span></h1>
			<hr>
			<form method="post" action="<?php echo site_url('Insert/insert_action') ?>">
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Product Name</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="product_name" name="product_name" placeholder="product_name">
					</div>
				</div>
				<div class="form-group row">
					<label for="suppliers" class="col-sm-2 col-form-label">Supplier</label>
					<div class="col-sm-5">
						<select class="form-control" id="id_supplier" name="id_supplier">
							<?php foreach ($suppliers as $row) {
								$company_name = $row['company_name'];
								$id_supplier = $row['id_supplier'];
								echo "<option value='$id_supplier'>" . $id_supplier . "</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="category" class="col-sm-2 col-form-label">Category</label>
					<div class="col-sm-5">
						<select class="form-control" id="id_category" name="id_category">
							<?php foreach ($categories as $row) {
								$categoryname = $row['category_name'];
								$id_category = $row['id_category'];
								echo "<option value='$id_category'>" . $categoryname . "</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="QuantityPerUnit" class="col-sm-2 col-form-label">Quantity Per Unit</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="qty_per_unit" name="qty_per_unit" placeholder="Quantity Per Unit">
					</div>
				</div>
				<div class="form-group row">
					<label for="price" class="col-sm-2 col-form-label">Price</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="price" name="price" placeholder="Price">
					</div>
				</div>
				<div class="form-group row">
					<label for="stock" class="col-sm-2 col-form-label">Stock</label>
					<div class ="col-sm-5">
						<input type="text" class="form-control" id="stock" name="stock" placeholder="Stock">
				<div style="margin-left:290px;">
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					<a class="btn btn-danger" href="<?= site_url('Home') ?>">Cancel</a>
				</div>
			</form>
		</div>
		<?php echo $footer; ?>
	</body>
</html>