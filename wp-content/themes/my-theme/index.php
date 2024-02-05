<?php get_header() ?>

<?php get_template_part('templates/posts','loop') ?>
<!-- <h1>The Gigachad</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ab labore velit dolorem! Dignissimos earum beatae delectus nesciunt itaque commodi consequatur illo minus. Maiores delectus incidunt illum est laboriosam voluptates?</p>
    </div> -->

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