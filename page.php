<?php get_header() ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<?php echo the_post_thumbnail(); ?>

  <h1><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a> </h1>
  <div class="container">
    <div class="row">
      <div class="col">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

  <?php endwhile; endif; ?>

<?php get_footer() ?>
