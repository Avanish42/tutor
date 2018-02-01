<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Questions</h2>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Question</th>
                                <th>Date Added</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($questions as $question){?>
                                <tr>
                                    <td><?php echo $question->id;?></td>
                                    <td><?php echo $question->fullname;?></td>
                                    <td><?php echo $question->question;?></td>
                                    <td><?php echo $question->date_added;?></td>
                                    <td>
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url('admin/deletequestion/'.$question->qid);?>"><span class="glyphicon glyphicon-trash"></span> </a>
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