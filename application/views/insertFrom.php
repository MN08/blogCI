<?php $this->load->view('partial/header'); ?>

<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Add New Article</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="alret alert-warning">
                <?php echo validation_errors() ?>
            </div>

            <?php echo form_open_multipart() ?>
            <div class="form-group">
                <label for="">Title</label><br>
                <?php echo form_input('title', set_value('title'), 'class="form-control"') ?>

                <label for="">Content</label><br>
                <?php echo form_textarea('content', set_value('content'), 'class="form-control"') ?>

                <label for="">URL</label><br>
                <?php echo form_input('url', set_value('url'), 'class="form-control"') ?>

                <label for="">cover</label><br>
                <?php echo form_upload('cover', set_value('cover'), 'class="form-control"') ?>

                <br>
                <button type="submit" class="btn btn-success float-right">ADD</button>
            </div>
            </form>
        </div>
    </div>
</div>


<?php $this->load->view('partial/footer'); ?>