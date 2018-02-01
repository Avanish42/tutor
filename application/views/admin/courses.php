<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Courses</h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Video</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Date Added</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($courses as $course){?>
                                <tr>
                                    <td><?php echo $course->id;?></td>
                                    <td><?php echo $course->name;?></td>
                                    <td><iframe src="<?php echo $course->video;?>" frameborder="0" width="200" height="150" allowfullscreen></iframe></td>
                                    <td><img src="<?php echo base_url('assets/'.$course->image);?>" width="150"></td>
                                    <td><?php echo $course->category_name;?></td>
                                    <td><?php echo $course->add_date;?></td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/updatecourse/'.$course->id);?>"><span class="glyphicon glyphicon-pencil"></span> </a>
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url('admin/deletecourse/'.$course->id);?>"><span class="glyphicon glyphicon-trash"></span> </a>
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