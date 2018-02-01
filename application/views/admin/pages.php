<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Content Pages</h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>Meta Title</th>
                                <th>Position</th>
                                <th>Page Order</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($pages as $page){?>
                                <tr>
                                    <td><?php echo $page->id;?></td>
                                    <td><?php echo $page->title;?></td>
                                    <td><?php echo $page->meta_title;?></td>
                                    <td><?php echo $page->position;?></td>
                                    <td><?php echo $page->sort_order;?></td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/updatepage/'.$page->id);?>"><span class="glyphicon glyphicon-pencil"></span> </a>
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url('admin/deletepage/'.$page->id);?>"><span class="glyphicon glyphicon-trash"></span> </a>
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