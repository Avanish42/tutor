<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Subscription Plans</h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($categories as $subscription){?>
                                <tr>
                                    <td><?php echo $subscription->id;?></td>
                                    <td><?php echo $subscription->name;?></td>
                                    <td><?php echo $subscription->description?></td>
                                    <td><?php echo $subscription->created_at;?></td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/updatesubscription/'.$subscription->id);?>"><span class="glyphicon glyphicon-pencil"></span> </a>
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url('admin/deletesubscription/'.$subscription->id);?>"><span class="glyphicon glyphicon-trash"></span> </a>
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