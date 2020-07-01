<?php
/*
Template Name: Resources Page
*/
?>
<?php
get_header()
?>
<main class="resources">
  <div class="container">
    <h1 class="resources__title">Resources</h1>
    <section class="resources__upper-content upper-content">
      <article class="upper-content__platform platform">
        <h2 class="platform__title title">The platform</h2>
        <p class="platform__description text">We lack structured data, research and basic knowledge funding
          to make the next leap - we are here to begin that journey.</p>
        <img srcset="/wp-content/themes/bonumic/assets/images/illustration.png 1x, 
        /wp-content/themes/bonumic/assets/images/illustration@2x.png 2x, 
        /wp-content/themes/bonumic/assets/images/illustration@3x.png 3x" src="/wp-content/themes/bonumic/assets/images/illustration.png" alt="bonumic illustration" class="platform__image">
      </article>
      <article class="upper-content__education education">
        <div class="education__info info">
          <h2 class="info__title title">Education</h2>
          <p class="info__description text">This presents a great challenge for brokers and makes them often
            rely on networking and a variety of third party databases containing outdated information.</p>
        </div>
        <div class="education__images images">
          <img srcset="/wp-content/themes/bonumic/assets/images/macbook.jpg 1x,
         /wp-content/themes/bonumic/assets/images/macbook@2x.jpg 2x,
          /wp-content/themes/bonumic/assets/images/macbook@3x.jpg 3x" src="/wp-content/themes/bonumic/assets/images/macbook.jpg" alt="macbook bonumic" class="images__image">
          <img srcset="/wp-content/themes/bonumic/assets/images/iphone.jpg 1x,
         /wp-content/themes/bonumic/assets/images/iphone@2x.jpg 2x,
          /wp-content/themes/bonumic/assets/images/iphone@3x.jpg 3x" src="/wp-content/themes/bonumic/assets/images/team.jpg" alt="iphone bonumic" class="images__image">
        </div>
      </article>
    </section>
    <section class="models">
      <h2 class="models__title title">
        Models
      </h2>
      <div class="models__container">
        <article class="models__article article">
          <div class="article__info info">
            <h3 class="info__name subtitle">flyer-recognition</h3>
            <div class="info__date">1 May 2020</div>
          </div>
          <p class="article__description text">Solving Real estate Data Extraction with Computer Vision.</p>
        </article>
        <article class="models__article article">
          <div class="article__info info">
            <h3 class="info__name subtitle">traffic-lights</h3>
            <div class="info__date"></div>
          </div>
          <p class="article__description text">Predicting building violations.</p>
        </article>
        <article class="models__article article">
          <div class="article__info info">
            <h3 class="info__name subtitle">building-violations</h3>
            <div class="info__date"></div>
          </div>
          <p class="article__description text">Predicting building violations.</p>
        </article>
        <article class="models__article article">
          <div class="article__info info">
            <h3 class="info__name subtitle">real-estate-value</h3>
            <div class="info__date"></div>
          </div>
          <p class="article__description text">Solving Real estate Data Extraction with Computer Vision.</p>
        </article>
      </div>
    </section>
  </div>
</main>

<?php
get_template_part('template-parts/newsletter');
get_template_part('template-parts/blog');
get_footer();
?>