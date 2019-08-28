<?php $this->load->view('partial/header'); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>LOGIN PAGE</h1>
                    <span class="subheading">A Blog for Human</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="offset-2 col-lg-8 col-md-8">

            <?php echo $this->session->flashdata("message"); ?>
            <?php echo form_open(); ?>

            <div class="form-group">
                <label for="username">Username</label><br>
                <?php echo form_input('username', set_value('username'), 'class="form-control"') ?>
            </div>
            <div class="form-group">
                <label for="password">Username</label><br>
                <input type="password" name="password" id="" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

            </form>

        </div>
    </div>
</div>



<?php $this->load->view('partial/footer'); ?>