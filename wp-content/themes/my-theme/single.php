<?php /* Template Name : Page With Sidebar*/ ?>
<?php get_header() ?>

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
      <p>
        <?php get_template_part('templates/comments', '') ?>
      </p>
  <?php
    endwhile;
    the_posts_pagination();
  endif;
  ?>
</div>

<div class="col-3 col-s-12">
  <div class="aside">
    <?php
    dynamic_sidebar('sidebar');
    ?>
    <h2>What?</h2>
    <p>Yes why not and if then else...</p>
    <h2>Where?</h2>
    <p>Whatever you like whatever you go...</p>
    <h2>How?</h2>
    <p>Please don't ask me how or why... just because...</p>
  </div>
</div>
</div>

<?php get_footer() ?>