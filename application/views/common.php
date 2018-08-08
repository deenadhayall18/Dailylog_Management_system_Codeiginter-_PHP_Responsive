<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Daily Log Details</title>
	<!-- Favicon-->
	<!-- <link rel="icon" href="<?php base_url(); ?>packages/admin/favicon.ico" type="image/x-icon"> -->
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<!-- Bootstrap Core Css -->
	<link href="<?php base_url(); ?>packages/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- Waves Effect Css -->
	<link href="<?php base_url(); ?>packages/admin/plugins/node-waves/waves.css" rel="stylesheet" />
	<!-- Animation Css -->
	<link href="<?php base_url(); ?>packages/admin/plugins/animate-css/animate.css" rel="stylesheet" />
	<!-- JQuery DataTable Css -->
	<link href="<?php base_url(); ?>packages/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<!-- Custom Css -->
	<link href="<?php base_url(); ?>packages/admin/css/style.css" rel="stylesheet">
	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?php base_url(); ?>packages/admin/css/themes/all-themes.css" rel="stylesheet" />
	<style type="text/css">

	.errStyle{color:green;font-weight:bold;font-size:16px;}
	.errStyle1{color:red;font-weight:bold;font-size:16px;}
</style>
</head>

<body class="theme-red">
	<!-- Page Loader -->
	<div class="page-loader-wrapper">
		<div class="loader">
			<div class="preloader">
				<div class="spinner-layer pl-red">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
			<p>Please wait...</p>
		</div>
	</div>
	
	<div class="overlay"></div>
	
	<div class="search-bar">
		<div class="search-icon">
			<i class="material-icons">search</i>
		</div>
		<input type="text" placeholder="START TYPING...">
		<div class="close-search">
			<i class="material-icons">close</i>
		</div>
	</div>
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="dashboard">Daily Log Manager</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a  class="btn btn-primary" href="AdminCon/logout" >
							Log Out
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>

	<section>
		<aside id="leftsidebar" class="sidebar">
			<div class="menu">
				<ul class="list">
					<li class="<?php echo(($url=='dashboard')?'active':"");?>">
						<a href="dashboard">
							<i class="material-icons">home</i>
							<span>Home</span>
						</a>
					</li>
					<li  class="<?php echo(($url=='dailyLogList')?'active':"");?>">
						<a href="dailyLogList">
							<i class="material-icons">assignment</i>
							<span>Daily Log List</span>
						</a>
					</li>
					<li class="<?php echo(($url=='AddLog')?'active':"");?>">
						<a href="AddLog"> 
							<i class="material-icons">note_add</i>
							<span>Add Log</span>
						</a>
					</li>
					<li class="<?php echo(($url=='dailyTaskList')?'active':"");?>">
						<a href="dailyTaskList"> 
							<i class="material-icons">playlist_add_check</i>
							<span>Daily Task List</span>
						</a>
					</li>
					<li class="<?php echo(($url=='AddTask')?'active':"");?>">
						<a href="AddTask"> 
							<i class="material-icons">playlist_add</i>
							<span>Add Task</span>
						</a>
					</li>

				</ul>
			</div>

			<div class="legal">
				<div class="copyright">
					<a href="javascript:void(0);">Daily Log Manager	</a>
				</div>
				<div class="version">
					<b>Version: </b> 1.0.0
				</div>
			</div>

		</aside>

		

	</section>

	<?php  

	$this->load->view($url);

	?>
	<!-- Jquery Core Js -->
	<script src="<?php base_url(); ?>packages/admin/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?php base_url(); ?>packages/admin/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Select Plugin Js -->
	<script src="<?php base_url(); ?>packages/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<!-- Slimscroll Plugin Js -->
	<!-- <script src="<?php base_url(); ?>packages/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script> -->

	<!-- Waves Effect Plugin Js -->
	<script src="<?php base_url(); ?>packages/admin/plugins/node-waves/waves.js"></script>

	<!-- Jquery DataTable Plugin Js -->
	<script src="<?php base_url(); ?>packages/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
	<script src="<?php base_url(); ?>packages/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
	<script src="<?php base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<!-- <script src="<?php base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script> -->
	<script src="<?php base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="<?php base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="<?php base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="<?php base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="<?php base_url(); ?>packages/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<!-- Custom Js -->
	<script src="<?php base_url(); ?>packages/admin/js/admin.js"></script>
	<script src="<?php base_url(); ?>packages/admin/js/pages/tables/jquery-datatable.js"></script>

	<!--Validation -->
	<script src="<?php base_url();?>packages/admin/js/jquery.validate.min.js"> </script>
	<script src="<?php base_url();?>packages/admin/js/validate.js"></script>
	<script src="<?php base_url();?>packages/admin/js/jquery-ui.min.js"></script>


	<script type="text/javascript">
		// task
		$(function(){
			$('#FrmTask').validate({
				rules:{
					taskdate:{required:true},
					task:{required:true,minlength:5},
				},
				messages:{
					taskdate:{required:"Enter the date"},
					task:{required:"Enter task Name"},
				}
			})
		});
// log
$(function(){
	$('#FrmLogDetails').validate({
		rules:{
			date:{required:true},
			project:{required:true,minlength:5},
			dailylog:{required:true,minlength:5},
		},
		messages:{
			date:{required:"Enter the date"},
			project:{required:"Enter Project Name"},
			dailylog:{required:"Enter Daily Log"},
		}
	})
});

setTimeout(
	function(){
		$('#err_hide').fadeOut("slow");
	},1500);

$(document).ready(function(){
	$('#md_checkbox_40').change(function(){
		$('#delButtonPopUp').toggle();
	});
});




</script>


</body>

</html>