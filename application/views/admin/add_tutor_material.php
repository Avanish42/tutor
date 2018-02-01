<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Material</h2>
                        
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" action="<?php echo base_url('admin/newcategory') ?>" method="POST">

                                  <div class="form-group focused">
                                <select class="form-control course" name="categories_id" required="" require>
                                    <option value="">-- Select Categories --</option>
                                    <?php foreach( $categories as $key =>$value) {   ?>
                                                                            <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?> </option>
                                                                            
                                                    <?php  }?>
                                        </select>
                            </div>

                             <div class="form-group focused">
                                <select class="form-control addcourse" name="categories_id" required="" require>
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
                                CKEDITOR
                                <small>CKEditor is a ready-for-use HTML text editor designed to simplify web content creation. Taken from <a href="http://ckeditor.com/" target="_blank">ckeditor.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <textarea id="ckeditor">
                              
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



