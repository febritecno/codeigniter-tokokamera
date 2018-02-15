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
		<div class="container">
		<div class="jumbotron">
				<h1>Terima Kasih, Pesanan Anda Segera di Proses</h1>
				<p>Silahkan Lanjutkan Berbelanja Pada Toko Kamera Kami, @TOKOKAMERAFEBRI</p>
				<?=anchor(base_url(), 'Kembali', ['class'=>'btn btn-primary'])?>
		</div>
		</div>


	</body>
</html>