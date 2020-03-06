
    <div class="main">

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form action="<?php echo base_url();?>index.php/register-user" method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="r_fname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="r_fname" id="r_fname" placeholder="Your First Name"/>
                    </div>
                    <div class="form-group">
                        <label for="r_lname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="r_lname" id="r_lname" placeholder="Your Last Name"/>
                    </div>
                    <div class="form-group">
                        <label for="r_email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="r_email" id="r_email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="r_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="r_pass" id="r_pass" placeholder="Password"/>
                    </div>
                    <!-- <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                    </div> -->
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="<?php echo base_url();?>images/signup-image.jpg" alt="sing up image"></figure>
                <a href="<?php echo base_url();?>index.php/login" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>


</div>
