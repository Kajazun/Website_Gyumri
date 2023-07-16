<?php get_header() ?>
<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
               <h2 class="mb-3">
              Search result for
               <?php 
              the_search_query();
            ?>
            </h2>
                    <h1><?php the_title() ?></h1>
                    
                    <a href="#blog" class="smoothScroll btn btn-default">Discover More</a>
               </div>

          </div>
     </div>
</section>

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