<?php

/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<?php
get_header();
?>
<main class="not-found-container container">
  <section class="not-found">
    <p class="not-found__description--left">We have <a href="/">no idea</a><br class="break" /> how you got here.</p>
    <p class="not-found__description--right">404</p>
  </section>
</main>
<section class="action">
  <p class="action__description">The page you are trying to <br class="break"> view does not exist.</p>
  <a href="/" class="action__button">HOMEPAGE</a>
</section>
<section class="action-mobile">
  <p class="action-mobile__text">404</p>
  <a href="/" class="action-mobile__button">HOMEPAGE</a>
</section>
<?php
get_template_part('template-parts/blog');
get_footer();
?>