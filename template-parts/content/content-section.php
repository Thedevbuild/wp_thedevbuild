<div id="post-<?= the_ID(); ?>" class="card border-0 bg-transparent mb-4">
  <div class="card-body h-100">
    <a href="<?= esc_url(get_permalink()); ?>" class="link-dark">
      <?php the_title( '<h3 class="fw-bold h3 mb-3">', '</h3>' ) ?>
    </a>
    <p class="small text-dark">
      <?php thedevbuild_meta_date(); ?>
      Posted by
      <span class="fw-bold text-orange">
        <?php thedevbuild_meta_author(); ?>
      </span>
    </p>
    <div>
      <div class="text-secondary">
        <?php 
          $content = get_the_content();
          // get the first 80 words from the content and added to the $abstract variable
          preg_match('/^([^.!?\s]*[\.!?\s]+){0,'. thedevbuild_excerpt_limit() .'}/', strip_tags($content), $abstract);
          // pregmatch will return an array and the first 80 chars will be in the first element 
          echo '<p>' . $abstract[0] . '...' . '</p>';
          ?>
        <a href="<?= esc_url(get_permalink()); ?>" class="small link-orange">Continue reading</a>
      </div>
    </div>
  </div>
</div>