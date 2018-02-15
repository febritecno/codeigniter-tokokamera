<?php

// CREATE BY FEBRIAN DWI PUTRA
// FTI - B
// TUGAS SEMESTER 1 UAS

?>


<!DOCTYPE html>
<html lang="en">
	<head>


		<title>Toko Kamera</title>
		<link rel="stylesheet" href="<?php echo base_url() ?>aset/bootstrap/css/bootstrap.min.css" />
		<script src="<?php echo base_url() ?>aset/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?><?php echo base_url() ?>aset/bootstrap/js/bootstrap.min.js">
		</script>
	

	</head>
	<body>





		<?php $this->load->view('layout/top_menu') ?>
		
		<!-- Tampilkan semua produk -->
		<div class="row">
			<div class="container">
		<!-- looping products -->
		  <?php foreach($products as $product) : ?>
		  <div class="col-sm-3 col-md-3">
			<div class="thumbnail">
			  <?=img([
				'src'		=> 'uploads/' . $product->image,
				'style'		=> 'max-width: 100%; max-height:100%; height:100px'
			  ])?>
			  <div class="caption">
				<h3 style="min-height:60px;"><?=$product->name?></h3>
				<p><?=$product->description?></p>
				<p>
					<?=anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
						'class'	=> 'btn btn-primary',
						'role'	=> 'button'
					])?>
				</p>
			  </div>
			</div>
		  </div>
		  <?php endforeach; ?>
		<!-- end looping -->
			</div>
		</div>
		




	</body>
</html>