<!DOCTYPE html>
<html>
    <head>
        <?php
            echo $js;
            echo $css;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="jquery-3.4.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#employees').DataTable();
            } );
        </script>
    </head>
    <body>
        <?php
            echo $header;
        ?>
        <div class="container">
            <h1>Manage Products <span style="font-size:25px; color:grey;">Northwind Traders</span> <a style="float:right;" class="btn btn-primary" href="<?php echo site_url('Insert'); ?>"><i class="fa fa-plus"></i> Product</a>
            </h1>
            <hr>
            <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Qty per unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>ID Supplier</th>
                            <th>ID Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($product as $row){
                            $id_product = $row['id_product'];
                            $product_name = $row['product_name'];
                            $qty_per_unit = $row['qty_per_unit'];
                            $price = $row['price'];
                            $stock = $row['stock'];
                            $id_supplier = $row['id_supplier'];
                            $id_category = $row['id_category'];
                            echo"
                            <tr>
                                <td>".$id_product."</td>
                                <td>".$product_name."</td>
                                <td>".$qty_per_unit."</td>
                                <td>".$price."</td>
                                <td>".$stock."</td>
                                <td>".$id_supplier."</td>
                                <td>".$id_category."</td>
                            </tr>
                            ";
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Qty per unit</th>
                            <th>Price</th>
                            <th>Available Stock</th>
                            <th>ID Supplier</th>
                            <th>ID Category</th>
                        </tr>
                    </tfoot>
            </table>
        </div>
        <?php
            echo $footer;
        ?>
    </body>
</html>