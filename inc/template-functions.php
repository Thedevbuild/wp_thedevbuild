<?php

if ( ! function_exists( 'thedevbuild_custom_excerpt' ) ) {
  /*
   * Implement solution from stackoverflow
   * @link https://stackoverflow.com/a/16594217 
   */
  function thedevbuild_custom_excerpt() {
    if (has_excerpt()) {
      return the_excerpt();
    } else {}
    $content = get_the_content();
    // get the first number of words set by thedevbuild_excerpt_limit from the content and added to the $abstract variable
    preg_match('/^([^.!?\s]*[\.!?\s]+){0,'. thedevbuild_excerpt_limit() .'}/', strip_tags($content), $abstract);
    // pregmatch will return an array and the first 80 chars will be in the first element 
    return $abstract[0] . '...';
  }
}