<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Sign In</title>
	<!-- Favicon-->
	<link rel="icon" href="<?php base_url();?>packages/admin/favicon.ico" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<!-- Bootstrap Core Css -->
	<link href="<?php base_url();?>packages/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- Waves Effect Css -->
	<link href="<?php base_url();?>packages/admin/plugins/node-waves/waves.css" rel="stylesheet" />
	<!-- Animation Css -->
	<link href="<?php base_url();?>packages/admin/plugins/animate-css/animate.css" rel="stylesheet" />
	<!-- Custom Css -->
	<link href="<?php base_url();?>packages/admin/css/style.css" rel="stylesheet">
	<style type="text/css">
	.error{color:red;}
	.error1{color:red;text-align:center;font-weight:bold;font-size:19px;}
</style>
<script type="text/javascript">
	setTimeout(
		function(){
			$('#err_hide').fadeOut("slow");
		},1500);
	</script>
</head>

<body class="login-page">
	<div class="login-box">
		<div class="logo" style="text-align:center">
			<span style="font-size:28px;color:#fff;text-align:center"><b>Daily Log Management</b></span>
			<br>
		</div>
		
		<div class="card">
			<div class="body">
				<?php $attr = array('id'=>'FrmSignIn','name'=>'FrmSignIn','method'=>'post');
				echo form_open('',$attr); ?>
				<div class="error1" id="err_hide"><?php echo $this->session->flashdata("ErrMsg"); ?></div><br>
				<div class="msg">Sign in to start your session</div>

				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">person</i>
					</span>
					<div class="form-line">
						<input type="text" class="form-control" name="username" placeholder="Username"  autofocus>
						<label class="error"><?php echo (!empty(form_error('username'))?form_error('username') :" "); ?></label>
					</div>
				</div>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="material-icons">lock</i>
					</span>
					<div class="form-line">
						<input type="password" class="form-control" name="password" placeholder="Password" >
						<label class="error"><?php echo (!empty(form_error('password'))?form_error('password') :" "); ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-xs-offset-4">
						<input type="submit" name="submit" id="submit" class="btn btn-block bg-pink waves-effect" value="SIGN IN">
					</div>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
	<!-- Jquery Core Js -->
	<script src="<?php base_url();?>packages/admin/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap Core Js -->
	<script src="<?php base_url();?>packages/admin/plugins/bootstrap/js/bootstrap.js"></script>
	<!-- Waves Effect Plugin Js -->
	<script src="<?php base_url();?>packages/admin/plugins/node-waves/waves.js"></script>
	<script src="<?php base_url();?>packages/admin/js/jquery.validate.min.js"> </script>
	<script src="<?php base_url();?>packages/admin/js/validate.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#FrmSignIn').validate({
				rules:{
					username:{required:true,letterspaceonly:true},
					password:{required:true},
				},
				messages:{
					username:{required:"Enter the Username",letterspaceonly:"Enter Valid Username"},
					password:{required:"Enter Password"},
				}
			})
		});
	</script>
</body>
</html>