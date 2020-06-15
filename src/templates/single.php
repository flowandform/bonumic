<?php
get_header();
if (have_posts()) {
  while (have_posts()) {
    the_post(); ?>
    <main class="single-post">
      <h1 class="single-post__title container"><?php single_post_title(); ?></h1>
      <section class="single-post__info info container">
        <p class="info__left"><?php the_date(); ?> <span class="dot">&#8226;</span> by <span><?php the_author(); ?></span></p>
        <section class="info__right info__right--upper right-list container">
          <p class="right-list__text">Share to &nbsp;</p>
          <p>
            <a class="right-list__link" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>">Facebook</a>
          </p>
          <p>
            <span>&#8226;</span>
            <a class="right-list__link" href="http://twitter.com/share?text=&url=<?php echo get_permalink(); ?>">Twitter</a>
          </p>
          <p>
            <span>&#8226;</span>
            <a class="right-list__link" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink(); ?>">Linkedin</a>
          </p>
          <p>
            <span>&#8226;</span>
            <a class="right-list__link copy-link" href="#">Get link</a>
          </p>
          <p class="right-list__permalink"><?php echo get_permalink(); ?></p>
        </section>
      </section>
      <div class="single-post__featured-image"><?php the_post_thumbnail(); ?></div>
      <section class="info__right info__right--mobile right-list container">
        <p class="right-list__text">Share to &nbsp;</p>
        <p>
          <a class="right-list__link" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>">Facebook</a>
        </p>
        <p>
          <span>&#8226;</span>
          <a class="right-list__link" href="http://twitter.com/share?text=&url=<?php echo get_permalink(); ?>">Twitter</a>
        </p>
        <p>
          <span>&#8226;</span>
          <a class="right-list__link" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink(); ?>">Linkedin</a>
        </p>
        <p>
          <span>&#8226;</span>
          <a class="right-list__link copy-link" href="#">Get link</a>
        </p>
        <p class="right-list__permalink"><?php echo get_permalink(); ?></p>
      </section>
      <article class="single-post__content container">
        <?php the_content(); ?>
        <section class="info__right info__right--bottom right-list">
          <p class="right-list__text">Share to &nbsp;</p>
          <p>
            <a class="right-list__link" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>">Facebook</a>
          </p>
          <p>
            <span>&#8226;</span>
            <a class="right-list__link" href="http://twitter.com/share?text=&url=<?php echo get_permalink(); ?>">Twitter</a>
          </p>
          <p>
            <span>&#8226;</span>
            <a class="right-list__link" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink(); ?>">Linkedin</a>
          </p>
          <p>
            <span>&#8226;</span>
            <a class="right-list__link copy-link" href="#">Get link</a>
          </p>
          <p class="right-list__permalink"><?php echo get_permalink(); ?></p>
        </section>
      </article>
    </main>
<?php
    $activePostId = get_the_ID();
  }
}
?>
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