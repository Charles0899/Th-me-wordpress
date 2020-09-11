<?php get_header() ?>

<h1 class="text-uppercase"><?php echo bloginfo('name'); ?></h1>
<h2 class="slogan"><?php echo bloginfo('description'); ?></h2>
<h3><center>Liste des Articles</center></h3>
<br><br>


<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mb-3">
    </div>
  </div>
</div>


    <?php
    if (have_posts()) :
      while ( have_posts() ) : the_post();
        ?>

            <div class="col-md-6">
              <?php echo the_post_thumbnail(); ?>
              <br>

              <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2><br>


              <!-- <p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p> -->          <!--Pour auteur + poste-->

              <?php the_content(); ?>
              <br>

              <!-- <p class="postmetadata">Filed in: <?php the_category(); ?> | Tagged: <?php the_tags(); ?> | <a href="<?php comments_link(); ?>" title="Leave a comment">Comments</a></p> -->                  <!--Pour la categorie -->

            </div>


        <?php

    // Stop the loop when all posts are displayed
 endwhile;

// If no posts were found
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>
</div>


<?php get_footer() ?>
