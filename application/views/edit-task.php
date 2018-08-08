
<section class="content">
	<div class="container-fluid">
		<div class="text-center" style="padding-bottom:10px" id="err_hide">
			<span class="errStyle"><?php echo $this->session->flashdata('Succ'); ?></span >
		</div> 
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<div class="align-right"><a type="button" class="btn btn-warning btn-sm" href="<?php echo base_url().'dailyTaskList' ?>">View Daily Task List</a></div>
						<h2>
							Add Task
						</h2>
					</div>
					<div class="body">
						<!-- <form method="post" name="FrmTask" id='FrmTask'> -->
							<?php
							$attr = array('method'=>'post','name'=>'FrmTask','id'=>'FrmTask');
							echo form_open("",$attr);  	?>
							<input type="hidden" name="tid" id="tid" value="<?php echo $tid; ?>">
							<label for="email_address">Date </label>
							<div class="form-group">
								<div class="form-line">
									<input type="date" name="taskdate" id="taskdate" class="form-control" placeholder="Enter date" value="<?php echo date("Y-m-d");?>"	value="<?php echo (!empty($dbTaskData[0]['date'])?$dbTaskData[0]['date'] :" ") ?>">
								</div>
							</div>
							<label for="task">Task </label>
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="task" name="task" class="form-control" placeholder="Enter Task" value="<?php echo (!empty($dbTaskData[0]['task'])?$dbTaskData[0]['task'] :" ") ?>">
								</div>
							</div>
							<label for="task">Status </label>
							<div class="demo-switch">
								<div class="switch">
									<label>Inactive<input type="checkbox" <?php echo (!empty($dbTaskData[0]['status']==1)?'checked':" ") ?> name="status" id="status"><span class="lever"></span>Active</label>
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
