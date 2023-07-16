<div class="blog-post-thumb">
    <div class="blog-post-image">
    <?php if(has_post_thumbnail()):?>
    <?php the_post_thumbnail('my-image')?>
    <?php else: ?>
        <a href="<?php the_permalink()?>">
            <img src="<?php echo get_template_directory_uri()?>/images/blog-image1.jpg" class="img-responsive" alt="Blog Image">
        </a>
<?php endif ?>
    </div>
    <div class="blog-post-title">
        <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
    </div>
    <div class="blog-post-format">
        <span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><img src="<?php echo get_template_directory_uri()?>/images/author-image1.jpg" class="img-responsive img-circle"> <?php the_author()?></a></span>
        <span><i class="fa fa-date" ><?php the_time("F,j,Y g:i a")?></i></span>
        <span><a href="#"><i class="fa fa-tags"></i> 
        <?php $category = get_the_category();

                               foreach ($category as $value):
                                 $link = get_category_link($value->term_id);?>
                                 <li><a href="<?php echo $link; ?>"><?php echo $value->name ?></a>,</li>
                               <?php endforeach ?>
        
        </a></span>
    </div>
    <div class="blog-post-des">
        <p><?php the_excerpt();  ?></p>
        <a href="<?php the_permalink()?>" class="btn btn-default">Շարունակել կարդալ</a>
    </div>
</div>