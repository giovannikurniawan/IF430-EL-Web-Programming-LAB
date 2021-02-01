<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
 <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">[IF635] Web Programming</a>
  </div>
  <div>
     <ul class="nav navbar-nav navbar-right">
             <li class="active"><a href="#">Product</a></li>
         </ul>
        </div>
       </div>
</div>
</nav>

<div class="container">
		<table id="products" class="table table-stripped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>#</th>
					<th>Product Name</th>
					<th>Quantity per Unit</th>
					<th>Price</th>
					<th>Stock</th>
				</tr>
			</thead>
		</tbody>
			<?php
				$products = array(
					"Chai"=> array(
						"quantity" => "10 boxes x 20 bags",
						"price" => "18.0000",
						"stock" => "39"
					),
					"Chang" => array(
						"quantity" => "24 - 12 oz bottles",
						"price" => "19.0000",
						"stock" => "17"
					),
					"Anissed Syrup" => array(
						"quantity" => "12 - 550 ml bottles",
						"price" => "10.0000",
						"stock" => "13"
					),
					"Chef Anton's Cajun Seasoning" => array(
						"quantity" => "48 - 6 oz jars",
						"price" => "22.0000",
						"stock" => "53"
					),
					"Chef Anton's Gumbo Mix" => array(
						"quantity" => "36 boxes",
						"price" => "21.3500",
						"stock" => "0"
					),
					"Grandma's Boysenberry Spread" => array(
						"quantity" => "12 - 8 oz jars",
						"price" => "25.000",
						"stock" => "120"
					),
					"Uncle Bob's Organic Dried Pears" => array(
						"quantity" => "12 - 12 oz jars",
						"price" => "40.0000",
						"stock" => "6"
					),
					"Northwoods Cranberry Sauce" => array(
						"quantity" => "12 - 12 oz jars",
						"price" => "40.0000",
						"stock" => "6"
					),
					"Mishi Kobe Niku" => array(
						"quantity" => "18 - 500 g pkgs.",
						"price" => "97.0000",
						"stock" => "29"
					),
					"Ikura" => array(
						"quantity" => "12 - 200 ml jars",
						"price" => "31.0000",
						"stock" => "31"
					),
					"Queso Cabrales" => array(
						"quantity" => "1 kg pkg.",
						"price" => "21.0000",
						"stock" => "22"
					),
					"Queso Manchego La Pastora" => array(
						"quantity" => "10 - 500 g pkgs.",
						"price" => "38.0000",
						"stock" => "86"
					)
				);

				$idx = 1;
				foreach($products as $name => $data){
					echo "
					<tr>
						<td>$idx</td>
						<td>$name</td>
						<td>$data[quantity]</td>
						<td>$data[price]</td>
						<td>$data[stock]</td>
					</tr>
					";
					$idx++;
				}
			?>
		</tbody>
		<tfoot>
			<tr>
				<th>#</th>
				<th>Product Name</th>
				<th>Quantity per Unit</th>
				<th>Price</th>
				<th>Stock</th>
			</tr>
		</tfoot>
	</table>
</div>

</body>
</html>