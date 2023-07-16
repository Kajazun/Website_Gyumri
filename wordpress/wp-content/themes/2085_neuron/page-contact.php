<?php get_header();?>

<!-- Contact Section -->

<section id="contact">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                     

                    <!-- <form action="#" method="post">
                         <div class="col-md-4 col-sm-4">
                              <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                         </div>
                         <div class="col-md-4 col-sm-4">
                              <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                      	 </div>
                         <div class="col-md-4 col-sm-4">
                              <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                      	 </div>
                         <div class="col-md-12 col-sm-12">
                              <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
                         </div>
                         <div class="col-md-3 col-sm-6">
                              <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                         </div>
                    </form> -->


                    <?php  echo do_shortcode('[contact-form-7 id="67" title="Контактная форма 1"]') ?>
               </div>

          </div>
     </div>
</section>

<?php get_footer();?>

