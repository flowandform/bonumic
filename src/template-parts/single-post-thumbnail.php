<?php $coming_soon = in_category('coming-soon') ?>
<section class="posts__post post <?php if ($coming_soon) : ?>coming-soon<?php endif ?>">
  <a href=<?php echo get_permalink(); ?>>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" class="post__image">
  </a>
  <section class="info">
    <a href=<?php echo get_permalink(); ?> class="post__title">
      <?php if ($coming_soon) : ?>
        Coming soon
      <?php else : the_title() ?>
      <?php endif ?>
    </a>
    <p class="post__date">
      <?php if (!$coming_soon) : echo get_the_date();
      endif ?>
    </p>
  </section>
</section>