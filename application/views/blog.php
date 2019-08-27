<?php $this->load->view('partial/header'); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>BlogCI</h1>
                    <span class="subheading">A Blog for Human</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content -->
<div class="container">
    <form action="">
        <input type="text" name="search">
        <button type="submit">Search</button>
    </form>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php foreach ($blogs as $key => $value) : ?>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        <a href="<?php echo site_url('blog/detail/' . $value['url']); ?>">
                            <?php echo $value['title']; ?></a>
                    </h2>
                </a>
                <p class="post-meta">
                    <a href="<?php echo site_url('blog/edit/' . $value['id']); ?>">Edit</a>
                    <a href="<?php echo site_url('blog/delete/' . $value['id']); ?>">Delete</a>
                    Posted on <?php echo $value['time']; ?>
                </p>
                <?php echo $value['content']; ?>
            </div>
            <hr>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<hr>
<?php $this->load->view('partial/footer'); ?>