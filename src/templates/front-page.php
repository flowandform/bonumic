<?php
get_header()
?>
<main class="landing">
  <div class="landing__banner banner">
    <section class="banner__description description">
      <h1 class="description__title">Building a <span class="break break--1">better world</h1>
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
<div class="container">
  <div class="landing__information information">
    <h2 class="information__text">
      Discovering the path to advanced artificial <span class="break"></span> intelligence
      in the real estate industry.
    </h2>
    <div class="eu-badge"></div>
    <!-- <div class="information__links links">
      <a class="links__item" href="https://www.facebook.com/flownform/">Facebook</a>
      <a class="links__item" href="https://twitter.com/flownform?lang=en">Twitter</a>
      <a class="links__item" href="https://www.linkedin.com/company/flowandform/">Linkedin</a>
    </div> -->
  </div>
  <div class="information__border"></div>
</div>
<section class="studies" id="featured">
  <div class="studies__title title">
    <h2 class="title__text">Exploring possibilities</h2>
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
<!-- Begin Mailchimp Signup Form -->
<section class="newsletter-section">
  <div class="container">
    <section class="newsletter">
      <div class="column column--first">
        <h2 class="column__title">Newsletter</h2>
        <div class="column__text">Get up to date on the newest information from the PropTech world.</div>
      </div>
      <div class="column column--second">
        <div id="mc_embed_signup">
          <form action="https://flownform.us10.list-manage.com/subscribe/post?u=657d5e4797948b82a9a6a5e12&amp;id=467f1cfd57" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate column__form" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <div class="mc-field-group">
                <input type="email" value="" name="EMAIL" class="required email form__input" id="mce-EMAIL" placeholder="Email">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
              </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_657d5e4797948b82a9a6a5e12_467f1cfd57" tabindex="-1" value=""></div>
              <div class="flex">
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button form__button"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</section>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>
  (function($) {
    window.fnames = new Array();
    window.ftypes = new Array();
    fnames[0] = 'EMAIL';
    ftypes[0] = 'email';
  }(jQuery));
  var $mcj = jQuery.noConflict(true);
</script>
<!--End mc_embed_signup-->
<?php
get_footer();
?>