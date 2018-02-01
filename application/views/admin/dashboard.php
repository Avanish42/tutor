<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Categories</h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Sub-Category</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($categories as $category){?>
                                <tr>
                                    <td><?php echo $category->id;?></td>
                                    <td><?php echo $category->category_name;?></td>
                                    <td><img src="<?php echo base_url('assets/'.$category->image);?>" width="150"></td>
                                    <td><a href="<?php echo base_url('admin/dashboard/'.$category->id);?>">View Sub Categories</a> </td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/updatecategory/'.$category->id);?>"><span class="glyphicon glyphicon-pencil"></span> </a>
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url('admin/deletecategory/'.$category->id);?>"><span class="glyphicon glyphicon-trash"></span> </a>
                                    </td>
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