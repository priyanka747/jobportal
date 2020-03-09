
			<!-- Title Header Start -->
			<section class="signup-screen-sec">
				<div class="container">
					<div class="signup-screen">
						<a href="index-2.html"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
						<form action="<?php echo base_url();?>index.php/candidate/signup" method="POST">
							<input type="text" class="form-control" placeholder="first Name" name="r_fname" id="r_fname" >
							<input type="text" class="form-control" placeholder="last Name" name="r_lname" id="r_lname" >
							<input type="email" class="form-control" placeholder="email" name="r_email" id="r_email" >
							<input type="password" class="form-control" placeholder="Password" name="r_pass" id="r_pass" >
							<button class="btn btn-login" type="submit" >Sign Up</button>
							<span>Have You Account? <a href="<?php echo base_url();?>index.php/candidate/login"> Login</a></span>	
						</form>
					</div>
				</div>
			</section>
			<!-- <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
			<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
				<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
				<ul id="styleOptions" title="switch styling">
					<li>
						<a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
					</li>
				</ul>
			</div> -->