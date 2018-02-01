<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Add New <?php echo $heading;?></h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" action="<?php echo base_url('admin/newuser/'.$type) ?>" method="POST">
                            <div class="text-danger"><?php echo validation_errors(); ?></div>
                            <div class="text-danger"><?php echo $this->session->flashdata('error_message');?></div>
                            <div class="input-group">
                               <div class="form-line">
                                    <input type="text" class="form-control" name="fname" placeholder="First name" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="lname" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <button class="btn btn-block bg-pink waves-effect" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>

</section>