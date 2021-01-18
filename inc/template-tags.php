<?php

if ( ! function_exists( 'thedevbuild_meta_date' ) ) {
  function thedevbuild_meta_date() {
    printf(
      esc_html__( 'Date: %s | ', 'thedevbuild' ),
      esc_html( get_the_date() )
    );
  }
}

if ( ! function_exists( 'thedevbuild_meta_author' ) ) {
  function thedevbuild_meta_author() {
    printf(
      esc_html__('%s', 'thedevbuild'),
      esc_html( ucwords(get_the_author()) )
    );
  }
}

if ( ! function_exists( 'thedevbuild_post_navigation' ) ) {
  function thedevbuild_post_navigation() {
    previous_posts_link(
      sprintf(
        __(
          '<li class="btn btn-outline-orange hover:text-white rounded-pill px-3 mx-1">
            &laquo; Newer posts
          </li>', 'thedevbuild'
        )
      )
    );
    next_posts_link(
      sprintf(
        __(
          '<li class="btn btn-outline-orange hover:text-white rounded-pill px-3 mx-1">
            Older posts &raquo;
          </li>', 'thedevbuild'
        )
      )
    );
  }
}