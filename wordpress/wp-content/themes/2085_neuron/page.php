<?php get_header() ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post();?>


<!-- Home Section -->

<section id="home" class="main-single-post parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1><?php the_title() ?></h1>
            </div>

        </div>
        
    </div>
</section>

<!-- Blog Single Post Section -->
<section id="blog-single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12">
            <div class="blog-post-image">
    <?php if(has_post_thumbnail()):?>
    <?php the_post_thumbnail('page-image')?>
    <?php else: ?>
        <a href="<?php the_permalink()?>">
            <img src="<?php echo get_template_directory_uri()?>/images/blog-image1.jpg" class="img-responsive" alt="Blog Image">
        </a>
<?php endif ?>
    </div>
                <div class="blog-single-post-thumb">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile?>
<?php else: ?>
<p>No Content Found</p>
<?php endif ?>
<?php get_footer() ?>