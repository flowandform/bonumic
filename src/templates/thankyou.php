<?php
/*
Template Name: ThankYou Page
*/
?>
<?php
get_header()
?>

<main class="about-main">
  <div class="header container">
    <div class="title-wrapper">
      <div class="title"> <span style='color:#2d13e3'>Thank you</span> for</br>getting in touch.</div>
      <p class="block__description home-wrapper">
        We will get back to you soon.
      </p>
      <div class= "home-wrapper">
        <button>HOMEPAGE</button>
      </div>
    </div>
</div>
</main>
<section class="blog" id="blog">
  <section class="container">
    <section class="blog__posts posts posts--front-page">
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
</section>
<?php
get_footer();
?>