<!doctype html>
<html>
	<head>
		<title>Admin Page | View All Invoices</title>
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
			
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Invoice ID</th>
                            <th>Date</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($invoices as $invoice) : ?>
						<tr>
							<td><?=$invoice->id?></td>
							<td><?=$invoice->date?></td>
							<td><?=$invoice->due_date?></td>
							<td><?=$invoice->status?></td>
                            <td>
                                <?=anchor(	'admin/invoices/detail/' . $invoice->id, 
											'Details',
											['class'=>'btn btn-default btn-sm'])
								?> 
                            </td>
						</tr>
						<?php endforeach; ?>
					</tbody>
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
