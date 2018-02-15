<!doctype html>
<html>
	<head>
		<title>Admin Page | View Invoice Detail</title>
		<!-- Load JQuery dari CDN -->
		<script src="<?php echo base_url() ?>aset/js/jquery.min.js"></script>
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="<?php base_url()?>aset/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php base_url()?>aset/datatables/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" href="<?php echo base_url() ?>aset/bootstrap/css/bootstrap.min.css" />

		<link rel="stylesheet" type="text/css" href="<?php base_url()?>aset/datatables/dataTables.bootstrap.css">
	</head>
	<body>
		<?php $this->load->view('backend/admin_menu')?>
		<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			
                <h3>Items Ordered in Invoice #<?=$invoice->id?></h3>
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Product ID</th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
						<?php 
                            $total = 0;
                            foreach($orders as $order) : 
                            $subtotal = $order->qty * $order->price;
                            $total += $subtotal;
                        ?>
						<tr>
							<td><?=$order->product_id?></td>
							<td><?=$order->product_name?></td>
							<td><?=$order->qty?></td>
							<td><?=$order->price?></td>
							<td><?=$subtotal?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" align="right">Total</td>
                            <td><?=$total?></td>
                        </tr>
                    </tfoot>
				</table>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>
