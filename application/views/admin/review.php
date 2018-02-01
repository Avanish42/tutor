<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row">
                            <div class="col-md-3"><h2>Reviews</h2></div>
                            <div class="col-md-9"><a href="<?php echo base_url('admin/add_review/'.$tutor_id);?>" class="btn btn-primary">Give Review</a></div>
                        </div>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date of Review</th>
                                <th>Question</th>
                                <th>Review</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($reviews as $review){?>
                                <tr>
                                    <td><?php echo $review->id;?></td>
                                    <td><?php echo $review->review_date;?></td>
                                    <td><?php echo $review->question;?></td>
                                    <td><?php echo $review->review;?></td>
                                </tr>
                            <?php }?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>