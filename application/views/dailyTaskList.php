<script type="text/javascript">
	function delrecord(id){
		var yes = confirm("Are you sure ?");
		if(yes){
			frmTaskList.deleteid.value = id;
			frmTaskList.submit();
		}else{
			frmTaskList.deleteid.value =null;
		}
	}
</script>	
<section class="content">
	<div class="container-fluid">
		<div class="text-center" style="padding-bottom:10px" id="err_hide">
			<span class="errStyle"><?php echo $this->session->flashdata('Succ'); ?></span >
			<span class="errStyle1"><?php echo $this->session->flashdata('DelSucc'); ?></span >
		</div> 
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<div id="delButtonPopUp" style="display:none;margin-right:60px" class="text-right">
							<div class="row clearfix js-sweetalert">
								<button class="btn btn-xs btn-danger" ><i class="material-icons" title="Delete Log" >delete_forever</i>Delete Selected  </button>
							</div>
						</div>
						<div class="align-right"><a type="button" class="btn btn-info btn-sm" href="<?php echo base_url().'AddTask' ?>"> + Add Task </a></div>
						<h2>
							Daily Task List

						</h2>

					</div>
					<div class="body">
						<div class="table-responsive">
							<!-- <form name="frmTaskList" id="frmTaskList" method="post" > -->
								<?php $attr = array('name'=>'frmTaskList','method'=>'post','id'=>'frmTaskList'); 
								echo form_open('',$attr);
								?>
								<table class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>

											<th>Sl.No</th>
											<th>Date</th>
											<th>Task Name</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i =0;
										foreach ($dbTaskData as $value) {$i++
											?>
											<tr>

												<td><?php echo $i; ?></td>
												<td><?php echo date('d-m-Y',strtotime($value['date'])); ?></td>
												<td><?php echo ucwords($value['task']); ?></td>
												<td><?php echo (($value['status']=='0')?'<span class=" btn btn-xs btn-success">Completed </span>':"<span class=' btn btn-xs btn-warning'>Not Completed</span>");  ?></td>
												<td>
													<input type="hidden" name="deleteid" id="deleteid" value="<?php echo $value['tid'];?>">
													<button class="btn btn-xs btn-danger" onclick="delrecord(<?php echo $value['tid'];?>)">
														<i class="material-icons" title="Delete Log" >delete_forever</i>
														
													</button>
													&nbsp;
													<a class="btn btn-xs btn-warning" href="<?php echo base_url().'edit-task?id='.($value["tid"]); ?>"> 
														<i class="material-icons" title="">mode_edit</i>
														<input type="hidden" name="editid" id="editid" value="<?php echo $value['tid'];?>">
													</a>
												</td>
											</td>
											<?php } ?>
										</tbody>
									</table>
									<?php echo form_close(); ?>
									<!-- </form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- #END# Exportable Table -->
			</div>
		</section>
