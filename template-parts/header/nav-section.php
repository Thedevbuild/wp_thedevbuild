<?php $dateHour = date('H'); ?>

<nav class="navbar navbar-expand-md transition-0-3 sticky-top bg-white navbar-light py-4">
  <div class="container-lg">
    <a href="https://blog.thedevbuild.com" class="navbar-brand">
      <img src="<?= get_template_directory_uri() . '/assets/images/logo_.svg'; ?>" class="px-3 align-middle"
        alt="Thedevbuild">
    </a>
    <span class="navbar-toggler nvb-toggler border-0" type="button" aria-label="Toggle navigation">
      <img src="<?= get_template_directory_uri() . '/assets/images/menu.svg'; ?>" height="25" alt="Toggle menu open">
    </span>
    <div class="collapse navbar-collapse">
      <div class="navbar-nav small ms-auto">
        <a href="https://thedevbuild.com/" class="nav-link px-3">Home</a>
        <a href="https://thedevbuild.com/about-us" class="nav-link px-3">About Us</a>
        <a href="https://thedevbuild.com/our-services" class="nav-link px-3">Services</a>
        <a href="https://thedevbuild.com/our-works" class="nav-link px-3">Our Work</a>
        <a href="https://blog.thedevbuild.com" class="nav-link px-3 fw-bold active">Blog</a>
        <a href="https://thedevbuild.com/contact-us" class="nav-link px-3">Contact</a>
      </div>
      <div class="navbar-nav ms-auto">
        <div class="d-block small text-end">
          <span class="d-block text-black-50">
            <?php if ($dateHour > 9 && $dateHour < 18) : ?>
            Open now until 6pm (GMT)
            <?php else : ?>
            Opens tomorrow by 9am (GMT)
            <?php endif; ?>
          </span>
          <span class="lead fw-bold">
            <a href="tel:+233245183621" class="nav-link text-orange p-0">+2332 4518 3621</a>
          </span>
        </div>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="mobileNav position-fixed">
      <div class="position-relative flex-column justify-content-between toggleNav h-100 p-3">
        <div id="navID" class="d-flex align-items-center justify-content-end pt-3">
          <span class="navbar-toggler nvb-toggler border-0" type="button" aria-label="Toggle navigation">
            <img src="<?= get_template_directory_uri() . '/assets/images/close.svg'; ?>" height="25"
              alt="Toggle menu close">
          </span>
        </div>
        <div class="navbar-nav header-font">
          <a href="https://thedevbuild.com/" class="nav-link text-body @if ($request === " /") fw-bold active
            @endif">Home</a>
          <a href="https://thedevbuild.com/about-us" class="nav-link text-body @if ($request === " /about-us") fw-bold
            active @endif">About Us</a>
          <a href="https://thedevbuild.com/our-services" class="nav-link text-body @if ($request === " /our-services")
            fw-bold active @endif">Services</a>
          <a href="https://thedevbuild.com/our-works" class="nav-link text-body @if ($request === " /our-works") fw-bold
            active @endif">Our Work</a>
          <a href="https://blog.thedevbuild.com" class="nav-link text-body">Blog</a>
          <a href="https://thedevbuild.com/contact-us" class="nav-link px-3 @if ($request === " /contact-us") fw-bold
            active @endif">Contact</a>
        </div>
        <div class="d-block text-center">
          <span class="text-black-50">
            <?php if ($dateHour > 9 && $dateHour < 18) : ?>
            Open now until 6pm (GMT)
            <?php else : ?>
            Opens tomorrow by 9am (GMT)
            <?php endif; ?>
          </span>
          <span class="lead fw-bold">
            <a href="tel:+233245183621" class="nav-link p-0 link-dark">+2332 4518 3621</a>
          </span>
        </div>

        <div class="d-block">
          <figure class="text-center">
            <blockquote class="blockquote">
              <p class="small">Opportunities don't happen. You create them.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              <span class="">Chris Grosser</span>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>
</nav>