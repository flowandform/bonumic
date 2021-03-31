<?php
get_header()
?>
<main class="landing">
  <div class="landing__banner banner">
    <section class="banner__description description">
      <h1 class="description__title"><span class="description__title--light">Real Estate</span><span class="break break--1">AI research</h1>
      <a href="/about" class="description__button">LEARN MORE</a>
    </section>
    <section class="banner__image image">
      <a href="/about" class="image__button">LEARN MORE</a>
      <img class="image__original" srcset="/wp-content/themes/bonumic/assets/images/landing-original.jpg 1x, /wp-content/themes/bonumic/assets/images/landing-original@2x.jpg 2x" src="/wp-content/themes/bonumic/assets/images/landing-original.jpg" alt="landing">
      <img class="image__mobile" srcset="/wp-content/themes/bonumic/assets/images/landing-mobile.jpg 1x, /wp-content/themes/bonumic/assets/images/landing-mobile@2x.jpg 2x" src="/wp-content/themes/bonumic/assets/images/landing-mobile.jpg" alt="landing">
      <div class="image__mask">
        <svg viewBox="0 0 1320 496">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <path d="M0,496 L0,341 L660,341 L660,0 L780,0 L780,496 L0,496 Z" id="Combined-Shape" fill="#F7F7F7"></path>
          </g>
        </svg>
      </div>
    </section>
  </div>
</main>
<div class="container container-landing">
  <div class="landing__information information">
    <a href="/eu-project" class="eu-badge"></a>
    <h2 class="information__text">
      Discovering the path to the advanced<span class="break"></span>artificial intelligence in the real estate industry.
    </h2>
    <!-- <div class="information__links links">
      <a class="links__item" href="https://www.facebook.com/flownform/">Facebook</a>
      <a class="links__item" href="https://twitter.com/flownform?lang=en">Twitter</a>
      <a class="links__item" href="https://www.linkedin.com/company/flowandform/">Linkedin</a>
    </div> -->
  </div>
  <div class="information__border"></div>
</div>
<?php
$args_not_in_coming_soon = array(
  'post_type' => 'post',
  'post__not_in' => array($activePostId),
  'orderby'    => 'date&order=DESC',
  'post__not_in' => get_option('sticky_posts'),
  'post_status' => 'publish',
  'order'    => 'DESC',
  'posts_per_page' => -1,
  'category__not_in' => 3,
);
$args_coming_soon = array(
  'post_type' => 'post',
  'post__not_in' => array($activePostId),
  'orderby'    => 'date&order=DESC',
  'post__not_in' => get_option('sticky_posts'),
  'post_status' => 'publish',
  'order'    => 'DESC',
  'posts_per_page' => -1,
  'cat' => 3
);
$posts_not_in_coming_soon = new WP_Query($args_not_in_coming_soon);
$coming_soon_posts = new WP_Query($args_coming_soon)
?>
<?php
if ($posts_not_in_coming_soon->have_posts()) : ?>
  <section class="studies" id="featured">
    <div class="studies__title title">
      <h2 class="title__text">Our research</h2>
    </div>
    <?php
    $args = array(
      'posts_per_page' => 1,
      'post__in' => get_option('sticky_posts'),
      'ignore_sticky_posts' => 1
    );
    $query = new WP_Query($args);
    while ($query->have_posts()) {
      $query->the_post(); ?>
      <section class="studies__featured-post featured-post">
        <a href=<?php echo get_permalink(); ?>>
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" class="featured-post__image">
        </a>
        <section class="info container">
          <a class="featured-post__title" href=<?php echo get_permalink(); ?>>
            <?php the_title(); ?>
          </a>
          <p class="featured-post__date">
            <?php echo get_the_date(); ?>
          </p>
        </section>
      </section>
    <?php
    }
    wp_reset_postdata();
    ?>
  </section>
  <section class="blog" id="blog">
    <section class="container">
      <section class="blog__posts posts posts--front-page">
        <?php
        if ($posts_not_in_coming_soon->have_posts()) : ?>
          <?php while ($posts_not_in_coming_soon->have_posts()) : $posts_not_in_coming_soon->the_post(); ?>
            <?php get_template_part('template-parts/single-post-thumbnail'); ?>
          <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>
        <?php
        if ($coming_soon_posts->have_posts()) : ?>
          <?php while ($coming_soon_posts->have_posts()) : $coming_soon_posts->the_post(); ?>
            <?php get_template_part('template-parts/single-post-thumbnail'); ?>
          <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>
      </section>
    </section>
  </section>
<?php endif;
?>
<?php
get_template_part('template-parts/newsletter');
get_footer();
?>
