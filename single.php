<?php

get_header();

?>
<?php 
// loop posts
while (have_posts()) :
  the_post();

  get_template_part( 'template-parts/content/content-single' ); 

endwhile;

get_footer();