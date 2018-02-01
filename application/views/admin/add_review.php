<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Add New Review</h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" action="<?php echo base_url('admin/add_review/'.$tutor_id) ?>" method="POST">
                            <div class="text-danger"><?php echo validation_errors(); ?></div>
                            <div class="text-danger"><?php echo $this->session->flashdata('error_message');?></div>
                            <div class="input-group">
                               <div class="form-line">
                                    <input type="date" class="form-control" name="review_date" placeholder="Date of Review" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <textarea class="form-control" name="question" placeholder="Give question line" required></textarea>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <textarea class="form-control" name="review" placeholder="Email Address" required></textarea>
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
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>