<?php
/*
Template Name: About Page
*/
?>
<?php
get_header()
?>
<main class="about-main">
  <img srcset="/wp-content/themes/bonumic/assets/images/about-up.jpg 1x, /wp-content/themes/bonumic/assets/images/about-up.jpg 2x" src="/wp-content/themes/bonumic/assets/images/about-up.jpg" alt="office" class="image-left">
  <section class="commercial container">
    <h2 class="commercial__description">
      <span class="commerical__bold">Bonumic</span> is an AI development and research project based in Europe, Croatia.
      Our mission is to advance the real estate industry by leveraging aritficial intelligence.
    </h2>
  </section>
  <section class="info container">
    <article class="info__block block">
      <h3 class="block__title">Why Bonumic?</h3>
      <p class="block__description">Real estate is one of the slowest industries in technology adoption.
        We lack structured data, research and basic knowledge funding to make the next leap - we are here to
        begin that journey.

      </p>
    </article>
    <article class="info__block block">
      <h3 class="block__title">Potential</h3>
      <p class="block__description">With over $219 trillion in market size, real estate is the world largest
        asset class. Over many decades we built repetative and redundant processes across all verticals in
        the property business. With the right vision and talent in place, we can move the needle.
      </p>
    </article>
  </section>
  <section class="website">
    <img srcset="/wp-content/themes/bonumic/assets/images/about-down.jpg 1x, /wp-content/themes/bonumic/assets/images/about-down.jpg 2x" src="/wp-content/themes/bonumic/assets/images/about-down.jpg" alt="flow n form people" class="website__image">
    <section class="website__content content">
      <h4 class="content__description">Bonumic is brought to you by <span>Flow and Form</span>,
        a team behind the leading property innovation studio.</h4>
      <a href="https://flownform.com/" class="content__button">
        OUR WEBSITE
      </a>
    </section>
  </section>
</main>
<?php
get_footer();
?>