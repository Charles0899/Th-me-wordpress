<?php get_header() ?>

<h1 class="titre1 text-center">Bienvenue</h1>
<br>

<div class="container">
<img src="<?php echo get_template_directory_uri(); ?>/img/groupe.jpg" alt="gens" width=100%>
</div>
<br>

<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="site__heading">Accueil</h1>
          <ul class="bouge">
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
           </ul>
      </div>
     </div>
    </div>


<?php get_footer() ?>
