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
                        <h2>Tutor Subject Meterial</h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Categories Name</th>
                                <th>Course Name</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($result)) foreach($result as $key => $value){?>
                                <tr>
                                    <td><?php echo ++$key;?></td>
                                    <td><?php echo $value->name;?></td>
                                    <td><?php echo find_by("tbl_tutor_categories",array("id"=>$value->categories_id))->name; ?></td>
                                     <td><?php echo find_by("tbl_tutor_course",array("id"=>$value->course_id))->name; ?></td>
                                    <td><?php echo $value->created_at;?></td>
                                    <td>
                                         <a title="Add Question" class="btn btn-xs btn-primary" href="<?php echo base_url('admin/add_tutor_question/'.$value->id);?>"><span class="glyphicon glyphicon-plus"></span> </a> 
                                        <a onclick="return confirm('Are you sure?');" class="btn btn-xs btn-danger" href="<?php echo base_url('admin/deletesubject/'.$value->id);?>"><span class="glyphicon glyphicon-trash"></span> </a>
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