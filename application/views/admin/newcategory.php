<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Categories</h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" action="<?php echo base_url('admin/newcategory') ?>" method="POST">
                            <div class="text-danger"><?php echo validation_errors(); ?></div>
                            <div class="text-danger"><?php echo $this->session->flashdata('error_message');?></div>
                            <div class="form-group">
                                <select class="form-control" name="parent_id">
                                    <option value="">Select</option>
                                    <?php foreach($categories as $category){?>
                                        <option value="<?php echo $category->id;?>"><?php echo $category->category_name;?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="input-group">
                               <div class="form-line">
                                    <input type="text" class="form-control" name="name" placeholder="Category name" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                               <div class="form-line">
                                    <input type="file" class="form-control" name="image" placeholder="Category image">
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