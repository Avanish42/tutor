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
                   <!--  <div class="header">
                        <h2>Question Add</h2>
                        
                    </div> -->
                    <div class="body">
                        <form enctype="multipart/form-data" action="" method="POST">



                                           
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Question
                             
                            </h2>
                           
                        </div>
                        <div class="body">
                            <textarea id="ckeditor" name="question">
                              
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>




                            <div class="row">
                                <div class="col-xs-4">
                                    <input type="hidden" name="material_id" value="<?php echo $id;?>">
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



