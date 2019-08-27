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
            <form method="POST" class="form-group">
                <label for="">Title</label><br>
                <input type="text" name="title" class="form-control"><br>

                <label for="">Content</label><br>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea><br>

                <label for="">URL</label><br>
                <input type="text" name="url" class="form-control"><br>

                <br>
                <button type="submit" class="btn btn-success float-right">ADD</button>
            </form>
        </div>
    </div>
</div>


<?php $this->load->view('partial/footer'); ?>