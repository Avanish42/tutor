<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- LOGIN -->
<section id="login-content" class="login-content">
    <div class="awe-parallax bg-login-content"></div>
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="row">
            <!-- FORM -->
            <div class="col-lg-4 pull-right">
                <div class="form-login">
                    <form method="post">
                        <h2 class="text-uppercase">sign up <small>as</small> <?php echo ($type==1)?"Tutor":"Student";?></h2>
                        <div class="text-danger"><?php echo validation_errors(); ?></div>
                        <div class="form-fullname">
                            <input class="first-name" name="fname" type="text" placeholder="First name" required>
                            <input class="last-name" name="lname" type="text" placeholder="Last name">
                        </div>
                       
                        <div class="form-email">
                            <input type="text" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-password">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-password">
                            <input type="password" name="cpassword" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-submit-1">
                            <input type="submit" value="Become a member" class="mc-btn btn-style-1">
                        </div>
                        <div class="link">
                            <a href="<?php echo base_url('user/login');?>">
                                <i class="icon md-arrow-right"></i>Already have account ? Log in
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END / FORM -->

            <div class="col-xs-12 col-lg-8 pull-left">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <h4 style="color:#fff;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
            </div>
        </div>
    </div>
</section>
<!-- END / LOGIN -->