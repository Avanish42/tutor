<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Categories</h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" action="<?php echo base_url('admin/updatecategory/'.$ucategory->id); ?>" method="POST">
                            <div class="text-danger"><?php echo validation_errors(); ?></div>
                            <div class="text-danger"><?php echo $this->session->flashdata('error_message');?></div>
                            <div class="form-group">
                                <select class="form-control" name="parent_id">
                                    <option value="">Select</option>
                                    <?php foreach($categories as $category){?>
                                        <option value="<?php echo $category->id;?>" <?php echo ($category->id == $ucategory->parent_id)?"selected":"";?>><?php echo $category->category_name;?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="input-group">
                               <div class="form-line">
                                    <input type="text" class="form-control" value="<?php echo $ucategory->category_name;?>" name="name" placeholder="Category name" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                               <div class="form-line">
                                   <input type="file" class="form-control" name="image" placeholder="Category image">
                                   <?php if($ucategory->image != ''){?>
                                       <img src="<?php echo base_url('assets/'.$ucategory->image);?>" width="100">
                                   <?php }?>
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