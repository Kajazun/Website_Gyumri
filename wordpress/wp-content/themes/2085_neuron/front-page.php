<?php get_header() ?>
<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1><?php the_title() ?></h1>
                    
               </div>

          </div>
     </div>
</section>
<?php
echo do_shortcode('[smartslider3 slider="1"]');
?>
               

<?php get_footer() ?>