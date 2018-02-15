<!DOCTYPE html>
<html lang="en">
	<head>



		<title>Toko Kamera | Login</title>
		<link rel="stylesheet" href="<?php echo base_url() ?>aset/bootstrap/css/bootstrap.min.css" />
		<script src="<?php echo base_url() ?>aset/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>aset/bootstrap/js/bootstrap.min.js">
		</script>

	</head>
	<body>


		<?php $this->load->view('layout/top_menu') ?>
		<div class="container">
		<div class="col-md-6 col-sm-offset-2">
		<h1> Silahkan Login </h1>
		</br>
		</br>
		<div><?=validation_errors()?></div>
		<div><?=$this->session->flashdata('error')?></div>
		<?=form_open('login', ['class'=>'form-horizontal'])?>
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="username">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
			  <input type="password" class="form-control" name="password">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Remember me
				</label>
			  </div>
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Sign in</button>
			</div>
		  </div>
		</form>
		
				</div>

			</div>
		</div>
	</body>
</html>