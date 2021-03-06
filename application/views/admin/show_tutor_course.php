<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Tutor Course</h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Categories Name</th>
                                <th>Course Name</th>
                                <th>date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($course as $key => $value){?>
                                <tr>
                                    <td><?php echo $key;?></td>
                                    <td><?php echo $value->categoriesname;?></td>
                                    <td><?php echo $value->name?></td>
                                    <td><?php echo $value->created_At;?></td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/updatesubscription/'.$value->id);?>"><span class="glyphicon glyphicon-pencil"></span> </a>
                                        <a  onclick="return confirm('Are you sure?');" class="btn btn-xs btn-danger" href="<?php echo base_url('admin/deletecoursesss/'.$value->id);?>"><span class="glyphicon glyphicon-trash"></span> </a>
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