<?php $dateHour = date('H'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
  <!-- meta -->
  <meta name="revisit-after" content="7 days">

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>

  <div id="loader-grid" class="container-fluid transition p-0 bg-offorange vh-100 w-100 d-flex justify-content-center align-items-center">
    <div>
      <span class="loader">
        <span class="loader-inner"></span>
      </span>
      <span class="d-inline-block text-orange fw-bold ms-2"> Loading</span>
    </div>
  </div>

  <div class="main-body d-none transition animate__animated" style="display: initial">

  <?php get_template_part( 'template-parts/header/nav-section' ); ?>