        </div>

        <!-- Login Modal -->
        <div class="modal fade hide custom-modal-w" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content cp-login-modal cp-modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="cp-modal-body">
                        <div class="cp-modal-header">Login below</div>
                        <div class="login-form">
                            <form id="loginForm" action="" method="post">
                                <div class="form-group">
                                    <input type="text" id="mLoginFormUsername" name="loginUsername" class="form-control" placeholder="Email address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="mLoginPassword" name="loginPassword" class="form-control" placeholder="Password" value="">
                                </div>
                                <div class="form-group">
                                    <div class="login-remember">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="remember_me" id="defaultUnchecked">
                                            <label class="custom-control-label" for="defaultUnchecked">Remember Me</label>
                                        </div>
                                        <div class="forgetPassCl">
                                            <a href="# " data-toggle="modal" data-target="#ForgetPassword" id="forgetPass">Forget Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="cp-btn box-btn" value="Sign in">
                                </div>
                            </form>
                        </div>
                        <div class="social-login">
                            <div class="social-login-title">or sign in with:</div>
                            <div class="social-login-icon">
                                <a href="#" class="gray-btn"><i class="fab fa-facebook-f"></i>Facebook</a>
                                <a href="#" class="gray-btn"><i class="fab fa-google"></i>Google</a>
                                <a href="#" class="gray-btn"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                            </div>
                        </div>
                        <div class="not-register">
                            <p class="member-check">Not a member?<a href="#" data-toggle="modal" data-target="#registerModal" data-dismiss="modal" aria-label="Close" class="register_modal">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Register Modal -->
        <div class="modal fade custom-modal-w" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content cp-register-modal cp-modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="cp-modal-body">
                        <div class="cp-modal-header">Register below</div>
                        <div class="login-form">
                            <form id="registerForm" action="" method="post">
                                <div class="row">
                                    <div class="col pr-7px">
                                        <div class="form-group">
                                            <input type="text" name="firstName" id="mRegisterFormUsername" class="form-control" placeholder="First name" value="">
                                        </div>
                                    </div>
                                    <div class="col plr-7px">
                                        <div class="form-group">
                                            <input type="text" name="middleName" id="mRegisterFormMiddleName" class="form-control" placeholder="Middle name" value="">
                                        </div>
                                    </div>
                                    <div class="col pl-7px">
                                        <div class="form-group">
                                            <input type="text" name="lastName" id="mRegisterFormLastName" class="form-control" placeholder="Last name" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="mRegisterFormEmail" class="form-control" placeholder="Email address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="mRegisterFormPassword" class="form-control" value="" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirmPassword" id="mRegisterFormConfirm-Password" class="form-control" value="" placeholder="Confirm password">
                                </div>

                                <div class="form-group">
                                    <div class="register-as-radio">
                                        <div class="form-title">Register as:</div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="seeker" name="role" value="seeker" checked="">
                                            <label class="custom-control-label" for="seeker">Jobseeker</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="recruiter" name="role" value="recruiter">
                                            <label class="custom-control-label" for="recruiter">Recruiter</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="cp-btn box-btn" value="Register now">
                                </div>
                            </form>
                        </div>
                        <div class="not-register">
                            <p class="member-check">Already have account?<a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal" aria-label="Close">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer>
            <div class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="footer-widget">
                                <div class="image-widget">
                                    <div class="site-logo">
                                        <a href="index.html" class="logo">
                                            <div class="title-logo">
                                                <div class="logo-icon">
                                                    <i class="fab fa-black-tie"></i>
                                                </div>
                                                <div class="logo-text">Cloud <span>Job</span></div>
                                            </div>
                                        </a>
                                    </div>
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullam aboris nisi ut aliquip.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="footer-widget">
                                        <h3>Useful links</h3>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Company History</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="footer-widget">
                                        <h3>Quick links</h3>
                                        <ul>
                                            <li><a href="job-search.php">Job Search</a></li>
                                            <li><a href="job-details.php">Job Details</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="footer-widget">
                                        <h3>Quick links</h3>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Company History</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-left wow fadeInUp" data-wow-delay="0.2s">
                            <p>Copyright &copy; 2019 <a href="#">Cloud Job</a> All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="assets/js/jquery-1.12.4.min.js"></script>
        <script src="assets/js/moment.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-material-datetimepicker.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/dropify.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html> 