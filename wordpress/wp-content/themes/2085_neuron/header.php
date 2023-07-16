<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Neuron HTML CSS Template</title>
<!--

Template 2085 Neuron

http://www.tooplate.com/view/2085-neuron

-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
<?php   wp_head();?>
</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>
<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
<div class="hd-search">
<?php 
get_search_form();
?>

</div>
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="<?php bloginfo('url')?>" class="navbar-brand">Gyumry-Blog</a>
          </div>
          <div class="collapse navbar-collapse">
          <?php
          wp_nav_menu( array(
          'theme_location' => 'primary',
          'depth' => 2,
          'container' => 'div',
          'container_class' => 'navbar-collapse',
          'container_id' => 'bs-example-navbar-collapse-1',
          'menu_class' => 'nav navbar-nav',
          'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
          'walker' => new WP_Bootstrap_Navwalker(),
) );
?>
          </div>

  </div>
</div>