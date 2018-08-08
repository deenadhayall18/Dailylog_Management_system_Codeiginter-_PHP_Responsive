		<script type="text/javascript">

			function delrecord(id){
				var yes = confirm("Are you Sure ?");
				if(yes){
					frmList.deleteid.value=id;
					frmList.submit();
					return true;
				}else{
					frmList.deleteid.value=null;
					return false;
				}
			}
		</script>
		<section class="content">
			<div class="container-fluid">
				<!-- Exportable Table -->
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<div class="align-right"><a type="button" class="btn btn-info btn-sm" href="<?php echo base_url().'AddLog' ?>"> + Add Log</a></div>
								<h2>
									Daily Log Details
								</h2>
								<div class="text-center" style="padding-bottom:10px" id="err_hide">
									<span class="errStyle"><?php echo $this->session->flashdata('Succ'); ?></span >
									<span class="errStyle1"><?php echo $this->session->flashdata('DelSucc'); ?></span >
								</div>  
							</div>
							<!-- <form method="post" name="frmList" id="frmList"> -->
								<?php $attr = array('method'=>'post','name'=>'frmList','id'=>'frmList');
								echo form_open('',$attr);
								?>
								<div class="body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-hover dataTable js-exportable">
											<thead>
												<tr>
													<th>Sl.No</th>
													<th>Date</th>
													<th>Project</th>
													<th>Daily Log</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $i = 0; foreach ($dbLogData as $value) {$i++;	?>
												<tr>
													<td><?php echo $i; ?></td>
													<td><?php echo date('d-m-Y',strtotime($value['date'])); ?></td>
													<td><?php echo $value['project']; ?></td>
													<td><?php echo $value['logdetails']; ?></td>
													<td>
														<input type="hidden" name="deleteid" id="deleteid" value="<?php echo $value['lid'];?>">
														<button  type="submit" class="btn btn-xs btn-danger" onclick="delrecord(<?php echo $value['lid'];?>)">
															<i class="material-icons" title="Delete Log" >delete_forever</i>
														</button>
														&nbsp;
														&nbsp;
														<a class="btn btn-xs btn-warning" href="<?php echo base_url().'edit-log?id='.($value["lid"]); ?>"> 
															<i class="material-icons" title="">mode_edit</i>
															<!-- <input type="hidden" name="editid" id="editid" value="<?php echo $value['lid'];?>"> -->
														</a>
													</td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
								<?php echo form_close();?>
								<!-- </form> -->
							</div>
						</div>
					</div>
					<!-- #END# Exportable Table -->
				</div>
			</section>
