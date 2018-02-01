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
            <div class="col-xs-12 col-lg-4 pull-right">
                <div class="form-login">
                    <form method="post">
                        <h2 class="text-uppercase">sign in</h2>
                        <div class="text-danger"><?php echo validation_errors(); ?></div>
                        <div class="text-danger"><?php echo $this->session->flashdata('error_message');?></div>
                        <div class="form-email">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-password">
                            <input type="password" placeholder="Password" name="password" required>
                        </div>

                        <div style="margin-top:26px;">&nbsp;</div>
                        <div class="form-check">
                            <input type="checkbox" id="check">
                            <label for="check">
                                <i class="icon md-check-2"></i>
                                Remember me</label>
                            <a href="<?php echo base_url('user/forgot_password');?>">Forget password?</a>
                        </div>
                        <div class="form-submit-1">
                            <input type="submit" value="Sign In" class="mc-btn btn-style-1">
                        </div>
                        <div class="link">
                            <a href="<?php echo base_url('user/register');?>">
                                <i class="icon md-arrow-right"></i>Don’t have account yet ? Join Us
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END / FORM -->

            <div class="col-xs-12 col-lg-8 pull-left" style="min-height:462px;">
                <h4 style="color:#fff;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
            </div>
        </div>
    </div>
</section>
<!-- END / LOGIN -->