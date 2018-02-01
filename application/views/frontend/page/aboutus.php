<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('include/header'); ?>
    <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="name-author">
                    <h2 class="big"><?php echo $content->title;?></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PROFILE FEATURE -->

    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">
            <div class="message-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="message-ct"><br>
                            <?php echo $content->page_text;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $this->load->view('include/footer'); ?>