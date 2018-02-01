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
                    <form>
                        <h2 class="text-uppercase">forgot password</h2>
                        <div class="form-email">
                            <input type="text" placeholder="Email">
                        </div>

                        <div style="margin-top:26px;">&nbsp;</div>
                        <div class="form-submit-1">
                            <input type="submit" value="Sign In" class="mc-btn btn-style-1">
                        </div>
                        <div class="link">
                            <a href="<?php echo base_url('user/login');?>">
                                <i class="icon md-arrow-right"></i>Sign In
                            </a>
                        </div>
                        <div class="link" style="margin-top:10px;">
                            <a href="<?php echo base_url('user/register');?>">
                                <i class="icon md-arrow-right"></i>Don’t have account yet ? Join Us
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
                <p>&nbsp;</p>
                <h4 style="color:#fff;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
            </div>
        </div>
    </div>
</section>
<!-- END / LOGIN -->