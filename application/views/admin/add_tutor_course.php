<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Course</h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" action="<?php echo base_url('admin/saveTutorCourse') ?>" method="POST">

                            <div class="form-group focused">
                                <select class="form-control" name="categories_id" required="" require>
                                    <option value="">-- Select Categories --</option>
                                    <?php foreach( $categories as $key =>$value) {   ?>
                                                                            <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?> </option>
                                                                            
                                                    <?php  }?>
                                        </select>
                            </div>

                            <div class="input-group">
                               <div class="form-line">
                                    <input type="text" class="form-control" name="name" placeholder="Course Name" required autofocus>
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
