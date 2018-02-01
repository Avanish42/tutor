<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><?php echo $heading;?></h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>Date Added</th>
                                <th>Action</th>
                                <?php

                                if($users[0]->user_type==1)
                                {
                                    echo " <th>Action</th>";
                                }

                                ?>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($users as $user){?>
                                <tr>
                                    <td><?php echo $user->id;?></td>
                                    <td><?php echo $user->fullname;?></td>
                                    <td><?php echo $user->email;?></td>
                                    <td><?php echo $user->date_added;?></td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/tutorreview/'.$user->id);?>"><span class="glyphicon glyphicon-stats"></span> </a>
                                        <a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/updateuser/'.$user->id);?>"><span class="glyphicon glyphicon-pencil"></span> </a>
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url('admin/deleteuser/'.$user->user_type.'/'.$user->id);?>"><span class="glyphicon glyphicon-trash"></span> </a>
                                    </td>

                                    <?php

                                if($user->user_type==1)
                                {?>
                                    <td>
                                     <a class="btn btn-xs btn-info" href="<?php echo base_url('admin/showApplication/'.$user->user_type.'/'.$user->id);?>"> <span> Application</span> </a>
                                     <a class="btn btn-xs btn-info" href="<?php echo base_url('admin/showApplication/'.$user->user_type.'/'.$user->id);?>"> <span> Profile</span> </a>
                                 </td>
                                <?php
                                    }

                                ?>

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
