
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
							<li><a href="#">Dashboard</a></li>
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
						<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
							<!-- <div class="row form-group">
								<div class="col col-md-3"><label class=" form-control-label">Static</label></div>
								<div class="col-12 col-md-9">
									<p class="form-control-static">Username</p>
								</div>
							</div> -->
							<div class="row form-group">
								<div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Title</label></div>
								<div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Job Title" class="form-control"></div>
							</div>
							 <div class="row form-group">
								<div class="col col-md-3"><label for="salary" class=" form-control-label">Salary</label></div>
								<div class="col-12 col-md-9"><input type="text" id="salary" name="salary" placeholder="$Amount" class="form-control"></div>
							</div> 
							<!-- <div class="row form-group">
								<div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
								<div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control"><small class="help-block form-text">Please enter a complex password</small></div>
							</div> -->
							
							

							<div class="row form-group">
								<div class="col col-md-3"><label for="select" class=" form-control-label">Job Type</label></div>
								<div class="col-12 col-md-9">
									<select name="Job Type" id="jobtype" class="form-control">
										<option value="0">Job Type</option>
										<option value="1">Part-Time</option>
										<option value="2">Full-Time</option>
									</select>
								</div>
							</div>

							
							<!-- <div class="row form-group">
								<div class="col col-md-3"><label for="selectLg" class=" form-control-label">Select Large</label></div>
								<div class="col-12 col-md-9">
									<select name="selectLg" id="selectLg" class="form-control-lg form-control">
										<option value="0">Please select</option>
										<option value="1">Option #1</option>
										<option value="2">Option #2</option>
										<option value="3">Option #3</option>
									</select>
								</div>
							</div> -->

							
							
							<div class="row form-group">
								<div class="col col-md-3"><label for="skill" class=" form-control-label">Skills Required</label></div>
								<div class="col-12 col-md-9"><input type="text" id="skill require" name="skillreq" placeholder="Skills" class="form-control"></div>
							</div> 

							<div class="row form-group">
								<div class="col col-md-3"><label for="State" class=" form-control-label">State</label></div>
								<div class="col-12 col-md-9"><input type="text" id="state" name="state" placeholder="state" class="form-control"></div>
							</div> 

							

							<div class="row form-group">
								<div class="col col-md-3"><label for="district" class=" form-control-label">district</label></div>
								<div class="col-12 col-md-9"><input type="text" id="district" name="district" placeholder="district" class="form-control"></div>
							</div> 

							

							<div class="row form-group">
								<div class="col col-md-3"><label class=" form-control-label">Language Required</label></div>
								<div class="col col-md-9">
									<div class="form-check">
										<div class="checkbox">
											<label for="checkbox1" class="form-check-label ">
												<input type="checkbox" id="English" name="english" value="english" class="form-check-input">English
											</label>
										</div>
										<div class="checkbox">
											<label for="checkbox2" class="form-check-label ">
												<input type="checkbox" id="french" name="french" value="french" class="form-check-input">French
											</label>
										</div>
											</label>
										</div>
									</div>
								</div>

								<div class="row form-group">
								<div class="col col-md-3"><label for="cmpdetail" class=" form-control-label">Company Detail</label></div>
								<div class="col-12 col-md-9"><textarea name="cmpdetail" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
								</div>

							</div>

							
						 
							
							<!-- <div class="row form-group">
								<div class="col col-md-3"><label class=" form-control-label">Radios</label></div>
								<div class="col col-md-9">
									<div class="form-check">
										<div class="radio">
											<label for="radio1" class="form-check-label ">
												<input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
											</label>
										</div>
										<div class="radio">
											<label for="radio2" class="form-check-label ">
												<input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
											</label>
										</div>
										<div class="radio">
											<label for="radio3" class="form-check-label ">
												<input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
											</label>
										</div>
									</div>
								</div>
							</div> -->
							<!-- <div class="row form-group">
								<div class="col col-md-3"><label class=" form-control-label">Inline Radios</label></div>
								<div class="col col-md-9">
									<div class="form-check-inline form-check">
										<label for="inline-radio1" class="form-check-label ">
											<input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
										</label>
										<label for="inline-radio2" class="form-check-label ">
											<input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
										</label>
										<label for="inline-radio3" class="form-check-label ">
											<input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
										</label>
									</div>
								</div>
							</div> -->
							
							<!-- <div class="row form-group">
								<div class="col col-md-3"><label class=" form-control-label">Inline Checkboxes</label></div>
								<div class="col col-md-9">
									<div class="form-check-inline form-check">
										<label for="inline-checkbox1" class="form-check-label ">
											<input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
										</label>
										<label for="inline-checkbox2" class="form-check-label ">
											<input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
										</label>
										<label for="inline-checkbox3" class="form-check-label ">
											<input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
										</label>
									</div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
								<div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
								<div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
							</div> -->
						</form>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary btn-sm">
							<i class="fa fa-dot-circle-o"></i> Submit
						</button>
						<button type="reset" class="btn btn-danger btn-sm">
							<i class="fa fa-ban"></i> Reset
						</button>
					</div>
				</div>
				
			</div>

	</div>


</div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>
