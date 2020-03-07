<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i
                    class="fa fa-bars"></i></button>
            <div class="navbar-header"><a class="navbar-brand" href="index-2.html"><img src="<?php echo base_url() ?>assets/img/logo-white.png"
                                                                                        class="logo logo-display"
                                                                                        alt=""><img
                    src="<?php echo base_url() ?>assets/img/logo-white.png" class="logo logo-scrolled" alt=""></a></div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <?php if($this->session->userdata('user'))
                {
                    ?>
                    <li><a href="<?php echo base_url();?>index.php/login/logout"><i class="fa fa-pencil" aria-hidden="true"></i>logout</a></li>
                    <?php 
                    }else{?>
                        
                        <li><a href="<?php echo base_url();?>index.php/login/"><i class="fa fa-pencil" aria-hidden="true"></i>login</a></li>
                    <?php }?>
                    <li><a href="pricing.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Pricing</a></li>
                    <!-- <li class="left-br"><a href="javascript:void(0)" data-toggle="modal" data-target="#signup"
                                           class="signin">Sign In Now</a></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse..</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Jobs</h6>

                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                                <li><a href="#">Manage Jobs</a></li>
                                                <li><a href="company-detail.html">Company Detail</a></li>
                                                <!-- <li><a href="index-2.html">Home Page 1</a></li>
                                                <li><a href="index-3.html">Home Page 2</a></li>
                                                <li><a href="index-4.html">Home Page 3</a></li>
                                                <li><a href="index-5.html">Home Page 4</a></li>
                                                <li><a href="index-6.html">Home Page 5</a></li>
                                                <li><a href="freelancing.html">Freelancing</a></li>
                                                <li><a href="signin-signup.html">Sign In / Sign Up</a></li>
                                                <li><a href="search-job.html">Search Job</a></li>
                                                <li><a href="accordion.html">Accordion</a></li>
                                                <li><a href="tab.html">Tab Style</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <!-- <h6 class="title">profile</h6> -->

                                        <div class="content">
                                            <ul class="menu-col">
                                                
                                                <li><a href="job-detail.html">Job Detail</a></li>
                                                <li><a href="browse-jobs-grid.html">Job In Grid</a></li>
                                                <li><a href="browse-company.html">Browse Companies</a></li>
                                                <!-- <li><a href="create-job.html">Create Job</a></li>
                                                <li><a href="create-company.html">Create Company</a></li>
                                                <li><a href="manage-company.html">Manage Company</a></li>
                                                <li><a href="manage-candidate.html">Manage Candidate</a></li>
                                                <li><a href="manage-employee.html">Manage Employee</a></li>
                                                <li><a href="browse-resume.html">Browse Resume</a></li>
                                                <li><a href="search-new.html">New Search Job</a></li>
                                                <li><a href="employer-profile.html">Employer Profile</a></li>
                                                <li><a href="manage-resume.html">Manage Resume</a></li>
                                                <li><a href="new-job-detail.html">New Job Detail</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Profile</h6>

                                        <div class="content">
                                            <ul class="menu-col">                                                
                                                <li><a href="create-resume.html">Create Resume</a></li>
                                                <li><a href="resume-detail.html">Resume Detail</a></li>
                                                <li><a href="candidate-profile.html">Candidate Profile</a></li>
                                                <li><a href="manage-resume-2.html">Manage Resume 2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                   <div class="col-menu col-md-3">
                                        <h6 class="title">Extra Pages <span class="new-offer">New</span></h6>

                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="job-apply-detail.html">FAQ</a></li>
                                                 <!-- <li><a href="freelancer-detail.html">Freelancer detail</a></li>
                                                <li><a href="payment-methode.html">Payment Methode</a></li>
                                                <li><a href="new-login-signup.html">New LogIn / SignUp</a></li>
                                                <li><a href="freelancing-jobs.html">Freelancing Jobs</a></li>
                                                <li><a href="freelancers.html">Freelancers</a></li>
                                                <li><a href="freelancers-2.html">Freelancers 2</a></li>
                                                <li><a href="premium-candidate.html">Premium Candidate</a></li>
                                                <li><a href="premium-candidate-detail.html">Premium Candidate Detail</a>
                                                </li>
                                                <li><a href="blog-detail.html">Blog detail</a></li>-->
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- <li><a href="blog.html">Blog</a></li> -->
                </ul>
            </div>
        </div>
    </nav>