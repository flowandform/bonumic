<?php
/*
Template Name: ThankYou Page
*/
?>
<?php
get_header()
?>
?>
<?php
get_header();
?>
<main class="not-found-container container thankyou">
  <section class="not-found">
    <p class="not-found__description--left"><a>Thank you</a> for<br class="break" /> getting in touch.</p>
  </section>
</main>
<section class="action">
  <p class="action__description">We will get back to you soon.</p>
  <a href="/" class="action__button action-button--lower">HOMEPAGE</a>
</section>
<section class="action-mobile action-thankyou">
  <a href="/" class="action-mobile__button action-mobile__button--lower">HOMEPAGE</a>
</section>
<?php
get_template_part('template-parts/blog');
get_footer();
?>