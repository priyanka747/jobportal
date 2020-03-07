
			<!-- Title Header Start -->
			<section class="login-screen-sec">
				<div class="container">
					<div class="login-screen">
						<!-- <a href=""><img src="assets/img/logo.png" class="img-responsive" alt=""></a> -->
						<form action="<?php echo base_url();?>index.php/candidate/authenticate" method="post">
							<input type="text" class="form-control" placeholder="email" name='email'>
							<input type="password" class="form-control" placeholder="Password" name="password">
							<button class="btn btn-login" type="submit">Login</button>
							<span>You Have No Account? <a href="<?php echo base_url();?>index.php/create-account"> Create An Account</a></span>
							<span><a href="<?php echo base_url();?>index.php/candidate/lost-password"> Forget Password</a></span>
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