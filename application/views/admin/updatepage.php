<script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<style>
    .ck-editor__editable {
        min-height: 400px;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Update Page Content</h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" action="<?php echo base_url('admin/updatepage/'.$content->id); ?>" method="POST">
                            <div class="text-danger"><?php echo validation_errors(); ?></div>
                            <div class="text-danger"><?php echo $this->session->flashdata('error_message');?></div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="<?php echo $content->title;?>" class="form-control" name="title" placeholder="Page title" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <textarea class="form-control" name="page_text" placeholder="Page content" required><?php echo $content->page_text;?></textarea>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="<?php echo $content->meta_title;?>"  class="form-control" name="meta_title" placeholder="Page meta title" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" value="<?php echo $content->meta_description;?>"  class="form-control" name="meta_description" placeholder="Page meta description">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" value="<?php echo $content->meta_keyword;?>"  name="meta_keyword" placeholder="Page meta keyword">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <select class="form-control" name="position" required>
                                        <option value="">Select Page Location</option>
                                        <option value="header" <?php echo ($content->position == "header")?"selected":"";?>>Header</option>
                                        <option value="footer" <?php echo ($content->position == "footer")?"selected":"";?>>Footer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="number" class="form-control" value="<?php echo $content->sort_order;?>" name="sort_order" placeholder="Page sort order" required>
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
<script>
    CKEDITOR.replace( 'page_text' );
</script>