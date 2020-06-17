<section class="blog">
  <section class="container">
    <h2 class="blog__title">Continue reading</h2>
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
      <p class="bonumic-info__description">Bonumic is an AI development and research project based in Europe, Croatia. Our mission is to advance the real estate industry by leveraging aritficial intelligence.</p>
      <p class="bonumic-info__provider">Bonumic is brought to you by Flow and Form.</p>
    </div>
    <a href="/about" class="bonumic-info__button">LEARN MORE</a>
  </section>
</section>