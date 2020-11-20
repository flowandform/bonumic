<?php
/*
Template Name: Contact Page
*/
?>
<?php
get_header()
?>

<main class="about-main">
  <section class="info container">
    <div class="title">Contact</div>
  </section>
  <section class="info container">
    <article class="info__block block">
      <h3 class="block__title">Get in touch</h3>
      <p class="block__description">
        Have a question? Wondering about how Bonumic can help your project?
        <br/>
        Our team will get back to you as soon as possible.
      </p>
    </article>
    <article class="info__block block black">
    <div class="header-text">
      For any inquiry:
    </div>
    <div class="description-text">
      hi@flownform.com
    </div>
    </article>
  </section>
  <section class="info container">
  <div class="pipedriveWebForms" data-pd-webforms="https://webforms.pipedrive.com/f/2Xg3Uco2CVjGyb2xmyMWkRB7uXSiwU5VXId1Vs4CVVTdAQm7UlkCxNtVXhtMiHjLZ"><script src="https://webforms.pipedrive.com/f/loader"></script></div>
  </section>
</main>
<?php
get_template_part('template-parts/newsletter');
?>
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