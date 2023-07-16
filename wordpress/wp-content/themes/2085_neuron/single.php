<?php get_header() ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post();?>


<!-- Home Section -->

<h2 style=" text-align:center;"> <?php the_title() ?> </h2> 

<!-- Blog Single Post Section -->
<section id="blog-single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12">
            <div class="blog-post-image">
    <?php if(has_post_thumbnail()):?>
    <?php the_post_thumbnail('my-image')?>
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
        <div class="row">
            <div class="blog-comment-form">
                <h3>Leave a Comment</h3>
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                    <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"
                        message="message" required="required"></textarea>
                    <div class="col-md-3 col-sm-4">
                        <input name="submit" type="submit" class="form-control" id="submit" value="Post Your Comment">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php endwhile?>
<?php else: ?>
<p>No Content Found</p>
<?php endif ?>
<?php get_footer() ?>