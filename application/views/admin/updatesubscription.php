<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Update Subscription Plan</h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" action="<?php echo base_url('admin/updatesubscription/'.$subscription->id); ?>" method="POST">
                            <div class="text-danger"><?php echo validation_errors(); ?></div>
                            <div class="text-danger"><?php echo $this->session->flashdata('error_message');?></div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" value="<?php echo $subscription->plan_name;?>" name="name" placeholder="Plan name" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="number" class="form-control" value="<?php echo $subscription->price;?>" name="price" placeholder="Plan price" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="number" class="form-control" value="<?php echo $subscription->period;?>" name="period" placeholder="Plan period" required>
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