<?php
/*
Template Name: Contact Page
*/
?>
<?php
get_header()
?>

<main class="about-main contact-main">
  <div class="container title">Contact</div>
  <section class="info container">
    <article class="info__block block">
      <h3 class="block__title">Get in touch</h3>
      <p class="block__description block__description--narrow">
        Have a question? Wondering about how Bonumic can help your project?
        <span>
          Our team will get back to you </br> as soon as possible.
        </span>
      </p>
    </article>
    <article class="info__block block black">
      <div>
        <div class="header-text">
          For any inquiry:
        </div>
        <div class="description-text">
          hi@flownform.com
        </div>
      </div>
    </article>
  </section>
  <section class="container container--contact">
    <div class="pipedriveWebForms" data-pd-webforms="https://webforms.pipedrive.com/f/2Xg3Uco2CVjGyb2xmyMWkRB7uXSiwU5VXId1Vs4CVVTdAQm7UlkCxNtVXhtMiHjLZ">
      <script src="https://webforms.pipedrive.com/f/loader"></script>
    </div>
  </section>
</main>
<?php
get_template_part('template-parts/newsletter');
?>
<?php
$args = array(
  'post_type' => 'post',
  'post__not_in' => array($activePostId),
  'orderby'    => 'date&order=DESC',
  'post__not_in' => get_option('sticky_posts'),
  'post_status' => 'publish',
  'order'    => 'DESC',
  'posts_per_page' => -1
);
$result = new WP_Query($args);
if ($result->have_posts()) : ?>
  <section class="blog" id="blog">
    <section class="container">
      <section class="blog__posts posts posts--front-page">
        <?php while ($result->have_posts()) : $result->the_post(); ?>
          <?php get_template_part('template-parts/single-post-thumbnail'); ?>
        <?php endwhile; ?>
      <?php endif;
    wp_reset_postdata(); ?>
      </section>
    </section>
  </section>
  <?php
  get_footer();
  ?>