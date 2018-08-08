<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>DASHBOARD</h2>
		</div>
		<div class="row clearfix">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-orange hover-zoom-effect">
					<div class="icon">
						<i class="material-icons">person</i>
					</div>
					<div class="content">
						<div class="text" style="font-size:16px !important">Hi  <?php echo ucwords($dbTaskData['0']['user']).' !'; ?> </div>
						<div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-pink hover-zoom-effect">
					<div class="icon">
						<i class="material-icons">playlist_add_check</i>
					</div>
					<div class="content">
						<div class="text">Tasks to be Done</div>
						<div class="number count-to" data-from="0" data-to="125" data-speed="2000" data-fresh-interval="20"><?php echo count($dbTaskData); ?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-teal hover-zoom-effect">
					<div class="icon">
						<i class="material-icons">assignment</i>
					</div>
					<div class="content">
						<div class="text">Last Log Date</div>
						<div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo $last_log_date =date('d-m-Y',strtotime($last_log_date));?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-light-green hover-zoom-effect">
					<div class="icon">
						<i class="material-icons">forum</i>
					</div>
					<div class="content">
						<div class="text">Log Updates for Today</div>
						<div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php 
						if(empty($LogUpdatedToday)){
							echo "No Log Records";
						}elseif($LogUpdatedToday==1){
							echo "Done";
						}else{
							echo "Not Done";
						}
						?></div>
					</div>
				</div>
			</div>

		</div>
		<!-- #END# Widgets -->


	</div>
</section>