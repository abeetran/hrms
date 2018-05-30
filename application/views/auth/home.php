<!DOCTYPE html>
<html lang="en">
<base href="<?php echo base_url();?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo $site_name;?></title>
	<!-- Bootstrap core CSS-->
	<link href="assets/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="assets/plugin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template-->
	<link href="assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header"><?php echo $this->lang->line('login');?></div>
			<div class="card-body">
				<form method="post" action="<?php echo site_url('login');?>">
					<?php if(isset($msg)){?>
					<div class="form-group">
						<div class="alert alert-danger alert-dismissible fade show"" role="alert">
							<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
							<?php echo $msg?>
						</div>
					</div>
					<?php }?>
					<div class="form-group">
						<label for="exampleInputEmail1"><?php echo $this->lang->line('username_email');?></label>
						<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="<?php echo $this->lang->line('username_email');?>" name="user" required />
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1"><?php echo $this->lang->line('password');?></label>
						<input class="form-control" id="exampleInputPassword1" type="password" placeholder="<?php echo $this->lang->line('password');?>" name="password" required />
					</div>
					<input type="submit" name="formSubmit" class="btn btn-primary btn-block" value="<?php echo $this->lang->line('login');?>" >
				</form>
				<!-- <div class="text-center">
					<a class="d-block small mt-3" href="register.html">Register an Account</a>
					<a class="d-block small" href="forgot-password.html">Forgot Password?</a>
				</div> -->
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript-->
	<script src="assets/plugin/jquery/jquery.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="assets/plugin/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
