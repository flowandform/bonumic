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
          <?php
          get_template_part('template-parts/share-links');
          ?>
        </section>
      </section>
      <div class="single-post__featured-image"><?php the_post_thumbnail(); ?></div>
      <section class="info__right info__right--mobile right-list container">
        <?php
        get_template_part('template-parts/share-links');
        ?>
      </section>
      <article class="single-post__content container">
        <?php the_content(); ?>
        <section class="info__right info__right--bottom right-list">
          <?php
          get_template_part('template-parts/share-links');
          ?>
        </section>
      </article>
    </main>
<?php
    $activePostId = get_the_ID();
  }
}
?>
<?php
get_template_part('template-parts/newsletter');
get_template_part('template-parts/blog');
get_footer();
?>