<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                 <?php  error_reporting(0);
     $msg = message();
   if(!empty($msg)){ ?>
       <?php echo message(); ?>
    <?php } ?>
                <div class="card">
                    <div class="header">
                        <h2>Material</h2>
                        
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" action="" method="POST">


                              <div class="form-group focused">
                                <input class="form-control course" placeholder="Name" name="name" required >
                                    
                            </div> 

                                  <div class="form-group ">
                                <select class="form-control course" name="categories_id" required="" >
                                    <option value="">-- Select Categories --</option>
                                    <?php foreach( $categories as $key =>$value) {   ?>
                                                                            <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?> </option>
                                                                            
                                                    <?php  }?>
                                        </select>
                            </div>

                             <div class="form-group focused">
                                <select class="form-control addcourse" name="course_id" required="" >
                                    <option value="">-- Select Categories --</option>
                                    <?php foreach( $categories as $key =>$value) {   ?>
                                                                            <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?> </option>
                                                                            
                                                    <?php  }?>
                                        </select>
                            </div>



                                           
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Content
                             
                            </h2>
                          
                        </div>
                        <div class="body">
                            <textarea id="ckeditor" name="description">
                              
                            </textarea>
                        </div>
                    </div>
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

var base = "<?php echo base_url(); ?>";
    </script>



