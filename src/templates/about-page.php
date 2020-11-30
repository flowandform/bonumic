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
      <span class="commerical__bold">Bonumic</span> is an AI development and research project based in Croatia. Our mission is to advance the real estate industry by leveraging aritficial intelligence.
    </h2>
  </section>
  <section class="info container">
    <article class="info__block block">
      <h3 class="block__title">The Challenge</h3>
      <p class="block__description">
        Real estate is one of the slowest industries in adopting modern technology. It's weakest point is lack of structured data, research and basic knowledge funding to make the next leap.
      </p>
      <p class="block__description">
        Large companies build advance technologies, create data and knowledge silos within their organizations to which we can't contribute and don't have the access.
      </p>
    </article>
    <article class="info__block block">
      <h3 class="block__title">Real Estate Today</h3>
      <p class="block__description">
        With over $219 trillion in market size, real estate is the world's largest asset class. Over many decades we built repetitive and redundant processes across all verticals in the property business.
      </p>
      <p class="block__description">
        With the right vision and talent in place, we can move the needle.
      </p>
    </article>
    <article class="info__block block">
      <h3 class="block__title">Our Goals</h3>
      <p class="block__description">
        Our goal is to increase the basic research funding of knowledge in real estate AI and share our findings with the wider audience.
      </p>
      <p class="block__description">
        This project is co-funded by the European Union and both real estate professionals and scientists in the field of AI are welcome to contribute to the project with their ideas and knowledge.
      </p>
    </article>
    <article class="info__block block">
      <h3 class="block__title">The Mission</h3>
      <p class="block__description">
        We are creating a research and case studies where we share the knowledge, data and resources on solving burning challenges in various real estate verticals using machine learning and AI.
      </p>
    </article>
  </section>
  <section class="website">
    <img srcset="/wp-content/themes/bonumic/assets/images/about-down.jpg 1x, /wp-content/themes/bonumic/assets/images/about-down.jpg 2x" src="/wp-content/themes/bonumic/assets/images/about-down.jpg" alt="flow n form people" class="website__image">
    <section class="info info--down container">
      <article class="info__block block">
        <p class="block__description block__description--down">
          Bonumic is brought to you by <span>Flow and Form</span>,
          a company fully focused on real estate, currently leading the market in PropTech services.
        </p>
      </article>
      <article class="info__block block">
        <p class="block__description block__description--down">
          <span>Flow and Form</span> acts as a bridge between real estate professionals and technologists in an effort to help accelerate the value creation of bringing advanced technology to the real estate industry.
        </p>
      </article>
    </section>
    <section class="website__content content">
      <div>
        <p class="content__title">
          Need help with your future PropTech project?
        </p>
        <p class="content__title content__title--light">
          Pay our website a visit.
        </p>
        <p class="content__copyright">
          &copy; 2020 Flow and Form
        </p>
      </div>
      <a href="https://flownform.com/" class="content__button">
        <img src="/wp-content/themes/bonumic/assets/images/bonumic-ff-logo.svg" alt="flow n form logo" class="logo" />
      </a>
    </section>
  </section>
</main>
<?php
get_footer();
?>