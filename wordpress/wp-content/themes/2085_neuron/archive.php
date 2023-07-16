<?php get_header() ?>
<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
               <h2 class="mb-3">
               Filtered by
               <?php 
               if(is_category()){
                   single_cat_title();
               }
               elseif (is_tag()) {
                   single_tag_title();
               }
               elseif (is_author()) {
                the_post();
                echo get_the_author();
                rewind_posts();
            }
            elseif (is_day()) {
                echo get_the_date();
            }
            elseif (is_month()) {
                echo get_the_date('F Y');
            }
            elseif (is_year()) {
                echo get_the_date('Y');
            }
            else{
                single_cat_title();
            }
            ?>
            </h2>
                    <h1>Hello! This is Neuron.</h1>
                    <h4>Responsive Blog HTML CSS Website Template</h4>
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