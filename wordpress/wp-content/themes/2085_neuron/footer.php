<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

               

               <div class="col-md-12 col-sm-12">
                    <?php dynamic_sidebar('sidebar1');?> 
               </div>
               
          </div>
     </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script src="<?php echo get_template_directory_uri()?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/particles.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/app.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.parallax.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/smoothscroll.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/custom.js"></script>
<?php   wp_footer();?>
</body>
</html>