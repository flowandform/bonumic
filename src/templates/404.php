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
<section class="blog">
  <section class="container">
    <h2 class="blog__title">Start reading</h2>
    <section class="blog__posts posts">
      <?php
      $args = array(
        'post_type' => 'post',
        'post__not_in' => array($activePostId),
        'orderby'    => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'ignore_sticky_posts' => 1,
        'posts_per_page' => 2
      );
      $result = new WP_Query($args);
      if ($result->have_posts()) : ?>
        <?php while ($result->have_posts()) : $result->the_post(); ?>
          <section class="posts__post post">
            <a href=<?php echo get_permalink(); ?>>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" class="post__image">
            </a>
            <section class="info">
              <a href=<?php echo get_permalink(); ?> class="post__title">
                <?php the_title(); ?>
              </a>
              <p class="post__date">
                <?php echo get_the_date(); ?>
              </p>
            </section>
          </section>
        <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>
    </section>
  </section>
  <section class="bonumic-info">
    <div>
      <p class="bonumic-info__description"><span>Bonumic</span> is the first open source platform for sharing </br> ML models and datasets in the Proptech industry.</p>
      <p class="bonumic-info__provider">Bonumic is brought to you by Flow and Form.</p>
    </div>
    <a href="/about" class="bonumic-info__button">LEARN MORE</a>
  </section>
</section>
<?php
get_footer();
?>