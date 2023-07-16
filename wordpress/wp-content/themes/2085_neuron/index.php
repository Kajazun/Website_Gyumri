<?php get_header() ?>
<!-- Home Section -->

<!-- Blog Section -->

<section id="blog">
     <div class="container">
          <div class="row">

                <div class="col-md-offset-1 col-md-10 col-sm-12">
                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>
                  <?php get_template_part('content')?>
               <?php endwhile?>
               <?php else: ?>
               <p>No Content Found</p>
               <?php endif ?>
               </div>

          </div>
     </div>
</section>

<?php get_footer() ?>