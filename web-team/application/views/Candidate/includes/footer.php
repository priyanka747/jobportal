    <div class="clearfix"></div>
    <footer class="footer">
        <div class="row lg-menu">
            <div class="container">
                <div class="col-md-4 col-sm-4"><img src="<?php echo base_url() ?>assets/img/footer-logo.png" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-8 co-sm-8 pull-right">
                    <ul>
                        <li><a href="<?php echo base_url();?>" title="">Home</a></li>
                        <!-- <li><a href="blog.html" title="">Blog</a></li>
                        <li><a href="404.html" title="">404</a></li> -->
                        <li><a href="<?php echo base_url('index.php/candidate/info/faq');?>" title="">FAQ</a></li>
                        <li><a href="<?php echo base_url('index.php/candidate/info/contact');?>" title="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-padding">
            <div class="container">
                <div class="col-md-3 col-sm-12">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">About MyCvOnline</h3>

                        <div class="textwidget">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                            <p>7860 North Park Place<br>San Francisco, CA 94120</p>

                            <p><strong>Email:</strong> Support@careerdesk</p>

                            <p><strong>Call:</strong> <a href="tel:+15555555555">555-555-1234</a></p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">All links</h3>

                        <div class="textwidget">
                            <div class="textwidget">
                                <ul class="footer-navigation">
                                    <!-- <li><a href="manage-company.html" title="">Front-end Design</a></li>
                                    <li><a href="manage-company.html" title="">Android Developer</a></li>
                                    <li><a href="manage-company.html" title="">CMS Development</a></li>
                                    <li><a href="manage-company.html" title="">PHP Development</a></li>
                                    <li><a href="manage-company.html" title="">IOS Developer</a></li>
                                    <li><a href="manage-company.html" title="">Iphone Developer</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">All Pages</h3>

                        <div class="textwidget">
                            <ul class="footer-navigation">
                                <!-- <li><a href="manage-company.html" title="">Front-end Design</a></li>
                                <li><a href="manage-company.html" title="">Android Developer</a></li>
                                <li><a href="manage-company.html" title="">CMS Development</a></li>
                                <li><a href="manage-company.html" title="">PHP Development</a></li>
                                <li><a href="manage-company.html" title="">IOS Developer</a></li>
                                <li><a href="manage-company.html" title="">Iphone Developer</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">Connect Us</h3>

                        <div class="textwidget">
                            <form class="footer-form"><input type="text" class="form-control" placeholder="Your Name">
                                <input type="text" class="form-control" placeholder="Email"><textarea
                                        class="form-control" placeholder="Message"></textarea>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="container">
                <p><a target="_blank" href="<?php echo base_url();?>">MyCVOnline</a></p>
            </div>
        </div>
    </footer>
    <div class="clearfix"></div>
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign
                                In</a></li>
                            <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
                        </ul>
                        <div class="tab-content" id="myModalLabel2">
                            <div role="tabpanel" class="tab-pane fade in active" id="login">
                                <img src="<?php echo base_url() ?>assets/img/logo.png" class="img-responsive" alt=""/>

                                <div class="subscribe wow fadeInUp">
                                    <form class="form-inline" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                       placeholder="Username" required=""><input type="password"
                                                                                                 name="password"
                                                                                                 class="form-control"
                                                                                                 placeholder="Password"
                                                                                                 required="">

                                                <div class="center">
                                                    <button type="submit" id="login-btn" class="submit-btn"> Login
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="register">
                                <img src="<?php echo base_url() ?>assets/img/logo.png" class="img-responsive" alt=""/>

                                <form class="form-inline" method="post">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Your Name"
                                                   required=""><input type="email" name="email" class="form-control"
                                                                      placeholder="Your Email" required=""><input
                                                type="email" name="email" class="form-control" placeholder="Username"
                                                required=""><input type="password" name="password" class="form-control"
                                                                   placeholder="Password" required="">

                                            <div class="center">
                                                <button type="submit" id="subscribe" class="submit-btn"> Create
                                                    Account
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts==================================================-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/viewportchecker.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/bootsnav.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/datedropper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/dropzone.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/loader.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/gmap3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jQuery.style.switcher.js"></script>
    <script type="text/javascript">$(document).ready(function () {
        $('#styleOptions').styleSwitcher();
    });</script>
    <script>function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }</script>
</div>
</body>
</html>