<!doctype html>
<html>
	<head>
		<title>Admin Page | Add New Product</title>
		<!-- Load JQuery dari CDN -->
			<!-- Load JQuery dari CDN -->
		<script src="<?php echo base_url() ?>aset/js/jquery.min.js"></script>
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="<?php base_url()?>aset/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php base_url()?>aset/datatables/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" href="<?php echo base_url() ?>aset/bootstrap/css/bootstrap.min.css" />

		<link rel="stylesheet" type="text/css" href="<?php base_url()?>aset/datatables/dataTables.bootstrap.css">
	</head>
	<body>
		<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h1>Add New Product</h1>
				<div><?= validation_errors() ?></div>
				<?= form_open_multipart('admin/products/create', ['class'=>'form-horizontal']) ?>
					
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="name" placeholder="" value="<?= set_value('name') ?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
						  <textarea class="form-control" name="description"><?= set_value('description') ?></textarea>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Price</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="price" placeholder="" value="<?= set_value('price') ?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Available Stock</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="stock" placeholder="" value="<?= set_value('stock') ?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Product Image</label>
						<div class="col-sm-10">
						  <input type="file" class="form-control" name="userfile" >
						</div>
					  </div>
					  
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" class="btn btn-default">Save</button>
						</div>
					  </div>
					
				<?= form_close() ?>
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