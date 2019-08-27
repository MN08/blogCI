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
            <?php echo form_open_multipart() ?>
            <div class="form-group">
                <label for="">Title</label><br>
                <?php echo form_input('title', null, 'class="form-control"') ?>

                <label for="">Content</label><br>
                <?php echo form_textarea('content', null, 'class="form-control"') ?>

                <label for="">URL</label><br>
                <?php echo form_input('url', null, 'class="form-control"') ?>

                <label for="">cover</label><br>
                <?php echo form_upload('cover', null, 'class="form-control"') ?>

                <br>
                <button type="submit" class="btn btn-success float-right">ADD</button>
            </div>
            </form>
        </div>
    </div>
</div>


<?php $this->load->view('partial/footer'); ?>