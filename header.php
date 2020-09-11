<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <?php wp_head() ?>
        <style>
        .banner{
          background-image: url('<?php header_image() ?>');
          }
        </style>
      </head>

      <body>
        <header class="site__header">
        <a class="logo" href="<?php echo home_url( '/' ); ?>">
          <img class="logo1"src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" alt="Logo">
        </a>
      </header>
       <?php the_custom_logo() ?>
        <div class="container">
         <nav class="navbar navbar-expand-lg ">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>
         <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="supernav">
       <li class="bar2"><a class="bar3"> <?php echo wp_nav_menu( array( 'theme_location' => 'header-menu' ) ) ?> </a>
      </li>
      </ul>
      </div>
      </nav>
    </div>
        <img class="paille" src="<?php echo header_image() ?>">

  </body>
</html>
