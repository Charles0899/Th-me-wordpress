<?php echo the_post_thumbnail(); ?>

<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>


<!-- <p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p> -->


<p><?php the_content(); ?></p>


<!-- <p class="postmetadata">Filed in: <?php the_category(); ?> | Tagged: <?php the_tags(); ?> | <a href="<?php comments_link(); ?>" title="Leave a comment">Comments</a></p> -->
<!--<body class="uno post-template-default single single-post postid-29 single-format-standard logged-in admin-bar no-customize-support"> -->
