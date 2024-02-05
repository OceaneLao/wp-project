<div class="col-6 col-s-9">
  <?php
  if (have_posts()) : while (have_posts()) : the_post();
  ?>

      <h1><a href="<?php the_permalink(); ?>">
        <?php the_title(); ?></a>
      </h1>
      <p>
        <?php the_post_thumbnail(); ?>
      </p>
      <p>
        <?php the_content(); ?>
      </p>
  <?php
    endwhile;
    the_posts_pagination();
  endif;
  ?>

</div>