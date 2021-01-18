<?php get_template_part( 'template-parts/header/single-title' ); ?>

<div class="container-fluid bg-white p-0 py-5">
  <div class="container border border-1 border-light w-md-70 py-3">
    <div id="post-<?= the_ID(); ?>" class="card content-page border-0 bg-transparent mb-0">
      <div class="card-body h-100">
        <p class="small text-dark">
          <?php thedevbuild_meta_date(); ?>
          Posted by
          <span class="fw-bold text-orange">
            <?php thedevbuild_meta_author(); ?>
          </span>
        </p>
        <div class="text-dark">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>