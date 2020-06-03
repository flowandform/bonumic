<?php
/*
Template Name: About Page
*/
?>
<?php
get_header()
?>
<main class="about-main">
  <img src="/wp-content/themes/bonumic/assets/images/people.jpg" alt="people" class="image-left">
  <section class="commercial container">
    <h2 class="commercial__description">
      <span>Bonumic</span> is an open source platform for sharing ML models and datasets
      in the PropTech industry.
    </h2>
    <div class="commercial__dots">
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </section>
  <section class="info container">
    <article class="info__block block">
      <h3 class="block__title">Why Bonumic</h3>
      <p class="block__description">Commercial real estate is a broker-based industry that suffers from
        a lack of a reliable source of information. A single, searchable database/inventory
        does not exist.</p>
    </article>
    <article class="info__block block">
      <h3 class="block__title">Potential</h3>
      <p class="block__description">Commercial real estate is a broker-based industry that suffers from
        a lack of a reliable source of information. A single, searchable database/inventory
        does not exist.</p>
    </article>
  </section>
  <section class="website">
    <img src="/wp-content/themes/bonumic/assets/images/skateboard.jpg" alt="skateboard" class="website__image">
    <section class="website__content content">
      <h4 class="content__description">Bonumic is brought to you by <span>Flow and Form</span>,
        a team of maverick talents pushing the limits of PropTech.</h4>
      <a href="https://flownform.com/" class="content__button">
        OUR WEBSITE
      </a>
    </section>
  </section>
</main>
<?php
get_footer();
?>