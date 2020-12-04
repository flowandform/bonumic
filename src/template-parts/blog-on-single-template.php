<section class="blog">
  <?php
  $args = array(
    'post_type' => 'post',
    'post__not_in' => array($activePostId),
    'orderby'    => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => 2,
    'category__not_in' => 3,
  );
  $result = new WP_Query($args);
  if ($result->have_posts()) : ?>
    <section class="container">
      <h2 class="blog__title">Continue reading</h2>
      <section class="blog__posts posts">
        <?php while ($result->have_posts()) : $result->the_post(); ?>
          <?php get_template_part('template-parts/single-post-thumbnail'); ?>
        <?php endwhile; ?>
      </section>
    </section>
  <?php endif;
  wp_reset_postdata(); ?>
  <section class="bonumic-info">
    <div>
      <p class="bonumic-info__description">Bonumic is an AI development and research project based in Europe, Croatia. Our mission is to advance the real estate industry by leveraging aritficial intelligence.</p>
      <p class="bonumic-info__provider">Bonumic is brought to you by Flow and Form.</p>
    </div>
    <a href="/about" class="bonumic-info__button">LEARN MORE</a>
  </section>
</section>