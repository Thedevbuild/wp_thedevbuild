<?php

get_header();

get_template_part( 'template-parts/header/blog-title' );

if (have_posts()) : ?>
<div class="container-fluid bg-white p-0 py-5">
  <div class="container border border-1 border-light w-md-70 py-3">
    <?php // loop posts
    while (have_posts()) :
      the_post();

      get_template_part( 'template-parts/content/content-section', get_post_format() );
    endwhile;
    ?>
  </div>
</div>
<div>
  <ul class="text-center mb-5">
    <?php thedevbuild_post_navigation(); ?>
  </ul>
</div>
<?php else : ?>
<div class="card-body text-center h-100">
  <h2 class="fw-bold h2 mb-3">No blog post yet!</h2>
  <p class="small text-black-50">Check back a few days</p>
</div>
<?php 

endif;
get_footer();

?>