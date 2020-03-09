
<div class="breadcrumbs">
	<div class="breadcrumbs-inner">
		<div class="row m-0">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Dashboard</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="<?php echo base_url();?>">Dashboard</a></li>
							<li><a href="#">Jobs</a></li>
							<li class="active">Add Job</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content">
	<div class="animated fadeIn">


		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						Add New Job Post
					</div>
					<div class="card-body card-block">
						<form action="<?php echo base_url(); ?>index.php/post-job/add" method="post"  class="form-horizontal">
							<div class="row form-group">
								<div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Title</label></div>
								<div class="col-12 col-md-9"><input type="text" id="jtitle" name="jtitle" placeholder="Job Title" class="form-control"></div>
							</div>
							 <div class="row form-group">
								<div class="col col-md-3"><label for="salary" class=" form-control-label">Salary</label></div>
								<div class="col-12 col-md-9"><input type="number" step="0.1" id="salary" name="salary" placeholder="$Amount" class="form-control"></div>
							</div> 
							
							<div class="row form-group">
								<div class="col col-md-3"><label for="select" class=" form-control-label">Job Type</label></div>
								<div class="col-12 col-md-9">
									<select name="jobtype" id="jobtype" class="form-control">
										<option value="0">Job Type</option>
										<option value="part-time">Part-Time</option>
										<option value="full-time">Full-Time</option>
									</select>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col col-md-3"><label for="skill" class=" form-control-label">Skills Required</label></div>
								<div class="col-12 col-md-9"><input type="text" id="skillreq" name="skillreq" placeholder="Skills" class="form-control"></div>
							</div> 

							<div class="row form-group">
								<div class="col col-md-3"><label for="State" class=" form-control-label">State</label></div>
								<div class="col-12 col-md-9"><input type="text" id="state" name="state" placeholder="state" class="form-control"></div>
							</div> 
							<div class="row form-group">
								<div class="col col-md-3"><label for="district" class=" form-control-label">city</label></div>
								<div class="col-12 col-md-9"><input type="text" id="city" name="city" placeholder="district" class="form-control"></div>
							</div> 
							<div class="row form-group">
								<div class="col col-md-3"><label class=" form-control-label">Language Required</label></div>
								<div class="col col-md-9">
									<div class="form-check">
										<div class="checkbox">
											<label for="checkbox1" class="form-check-label ">
												<input type="checkbox" id="English" name="lang[]" value="en" class="form-check-input">English
											</label>
										</div>
										<div class="checkbox">
											<label for="checkbox2" class="form-check-label ">
												<input type="checkbox" id="french" name="lang[]" value="fr" class="form-check-input">French
											</label>
										</div>
											</label>
										</div>
									</div>
								</div>

								<div class="row form-group">
								<div class="col col-md-3"><label for="job description" class=" form-control-label">job description(like role,skils, responsibilities, qualification required etc.</label></div>
								<div class="col-12 col-md-9"><textarea name="description" id="description" rows="9" placeholder="description..." class="form-control"></textarea></div>
								</div>

							</div>
							<div class="card-footer">
						<input type="submit" class="btn btn-primary btn-sm" name="form">
						<input type="reset" class="btn btn-danger btn-sm" name="Reset">
					</div>
					
						</form>
					</div>
					
				</div>
				
			</div>

		</div> 

	


</div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>
