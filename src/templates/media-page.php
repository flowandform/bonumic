<?php
/*
Template Name: Media Page
*/
?>
<?php
get_header()
?>
<main class="media container">
  <h1 class="media__title">Media Assets</h1>
  <section class="logo">
    <h2 class="logo__title">
      Logo
    </h2>
    <div class="columns">
      <div class="column column--first">
        <img class="column__image" src="/wp-content/themes/bonumic/assets/images/logo-white.svg">
      </div>
      <div class="column column--second">
        <div class="column__text">
          Available as .png in four colourways <span class="permanent-break"></span> and transparent .png or .svg.
        </div>
        <div class="column__subtext">
          Downloading requires following <span class="break"></span> our brand guidelines.
        </div>
        <a class="column__button" href="/wp-content/themes/bonumic/assets/archives/bonumic-logo.zip" download>DOWNLOAD</a>
      </div>
    </div>
  </section>
  <section class="photos">
    <h2 class="photos__title">
      Photos
    </h2>
    <div class="photos__text">
      Photography which reflects <span class="break"></span> our brand values.
    </div>
    <div class="photos__images images">
      <div class="images__image image image--first">
        <img srcset="/wp-content/themes/bonumic/assets/images/city.jpg 1x, /wp-content/themes/bonumic/assets/images/city@2x.jpg 2x,  /wp-content/themes/bonumic/assets/images/city@3x.jpg 3x" src="/wp-content/themes/bonumic/assets/images/city.jpg" alt="city" class="image__main">
        <a class="image__button" href="/wp-content/themes/bonumic/assets/archives/city.zip" download></a>
      </div>
      <div class="images__image image">
        <img srcset="/wp-content/themes/bonumic/assets/images/office.jpg 1x, /wp-content/themes/bonumic/assets/images/office@2x.jpg 2x,  /wp-content/themes/bonumic/assets/images/office@3x.jpg 3x" src="/wp-content/themes/bonumic/assets/images/office.jpg" alt="office" class="image__main">
        <a class="image__button" href="/wp-content/themes/bonumic/assets/archives/office.zip" download></a>
      </div>
      <div class="images__image image">
        <img srcset="/wp-content/themes/bonumic/assets/images/laptop-lady.jpg 1x, /wp-content/themes/bonumic/assets/images/laptop-lady@2x.jpg 2x,  /wp-content/themes/bonumic/assets/images/laptop-lady@3x.jpg 3x" src="/wp-content/themes/bonumic/assets/images/laptop-lady.jpg" alt="laptop-lady" class="image__main">
        <a class="image__button" href="/wp-content/themes/bonumic/assets/archives/laptop-lady.zip" download></a>
      </div>
      <div class="images__image image">
        <img srcset="/wp-content/themes/bonumic/assets/images/team.jpg 1x, /wp-content/themes/bonumic/assets/images/team@2x.jpg 2x, /wp-content/themes/bonumic/assets/images/team@3x.jpg 3x" src="/wp-content/themes/bonumic/assets/images/team.jpg" alt="team" class="image__main">
        <a class="image__button" href="/wp-content/themes/bonumic/assets/archives/team.zip" download></a>
      </div>
    </div>
  </section>
  <section class="website">
    <h2 class="website__title">
      Website screenshots
    </h2>
    <div class="website__text">
      Branded shots of the Bonumic <span class="break"></span> website being browsed.
    </div>
    <div class="website__images images">
      <div class="images__image image image--first">
        <img srcset="/wp-content/themes/bonumic/assets/images/macbook.jpg 1x, /wp-content/themes/bonumic/assets/images/macbook@2x.jpg 2x, /wp-content/themes/bonumic/assets/images/macbook@3x.jpg 3x" src="/wp-content/themes/bonumic/assets/images/macbook.jpg" alt="macbook bonumic" class="image__main">
        <a class="image__button" href="/wp-content/themes/bonumic/assets/archives/macbook.zip" download></a>
      </div>
      <div class="images__image image">
        <img srcset="/wp-content/themes/bonumic/assets/images/iphone.jpg 1x, /wp-content/themes/bonumic/assets/images/iphone@2x.jpg 2x, /wp-content/themes/bonumic/assets/images/iphone@3x.jpg 3x" src="/wp-content/themes/bonumic/assets/images/team.jpg" alt="iphone bonumic" class="image__main">
        <a class="image__button" href="/wp-content/themes/bonumic/assets/archives/iphone.zip" download></a>
      </div>
    </div>
  </section>
</main>
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