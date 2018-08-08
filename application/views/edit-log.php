<section class="content">
	<div class="container-fluid">
		<div class="text-center" style="padding-bottom:10px" id="err_hide">
			<span class="errStyle"><?php echo $this->session->flashdata('Succ'); ?></span >
		</div>  
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<div class="align-right"><a type="button" class="btn btn-warning btn-sm" href="<?php echo base_url().'dailyLogList' ?>">View Daily Log List</a></div>
						<h2>
							Add Daily Log
						</h2>

					</div>
					<div class="body">
						<!-- <form method="post" name="FrmLogDetails" id="FrmLogDetails"> -->
							<?php $attr = array('id'=>'FrmLogDetails','name'=>'FrmLogDetails');
							echo form_open('',$attr); ?>

							<label for="email_address">Date </label>
							<div class="form-group">
								<div class="form-line">
									<input type="date"  name="date"  id="date" class="form-control" placeholder="Enter date" value="<?php echo date("Y-m-d");?>">
								</div>
							</div>
							<label for="password">Project </label>
							<div class="form-group">
								<div class="form-line">

									<datalist>
										<?php foreach($dbLogdata as $value){  ?>
										<option>
											<?php $value['project']; ?>
										</option>	
										<?php } ?>
									</datalist>
									<input type="text" id="project"  name="project"  class="form-control" placeholder="Enter Project Name" value="<?php echo (!empty($dbLogData[0]['project'])?$dbLogData[0]['project']:" ") ?>" >
									<label id="project" class="error" for="project">
										<?php echo (!empty(form_error('project')))?form_error('project'):""; ?></label>
									</div>
								</div>
								<label for="password">Daily Log</label>
								<input type="hidden" name="id" value="<?php echo $lid; ?>">


								<div class="form-group">
									<div class="form-line">
										<input type="text" id="dailylog"  name="dailylog" class="form-control" placeholder="Enter Log Details"  value="<?php echo (!empty($dbLogData[0]['logdetails'])?$dbLogData[0]['logdetails']:" ") ?>">
										<label id="dailylog" class="error" for="dailylog">
											<?php echo (!empty(form_error('dailylog')))?form_error('dailylog'):""; ?></label>
										</div>
									</div>
									<input type="submit" name="submit" class="btn btn-success m-t-15 waves-effect" value="Submit">
									<!-- </form> -->
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<script>

			</script>

			