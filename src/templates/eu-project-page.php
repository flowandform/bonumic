<?php
/*
Template Name: Eu Project Page
*/
?>
<?php
get_header()
?>
<main class="gdpr container">
  <h1 class="gdpr__title">PR article</h1>
  <section class="gdpr__content content">
    <h5 class="content__subtitle">Name of the project</h5>
    <p class="content__text">"Adaptation and commercialization of the innovative Bonumic platform" project code KK.03.2.2.04.0197</p>
    <h5 class="content__subtitle">Short description of the project</h5>
    <p class="content__text">The project proposal "Adaptation and commercialization of the innovative Bonumic platform" is being implemented with the aim of adapting and launching the innovative technology platform Bonumic. The development of the Bonumic platform (https://bonumic.com) began in 2017, starting with the founders' idea of creating solutions that would facilitate the application of machine learning and create a community of experts for this still relatively underdeveloped area. The growing global interest in the application of machine learning is caused by the high availability of data whose analysis and use for problem solving and decision making can be the subject of achieving better results, competitive advantage and even saving lives. The use of artificial intelligence and machine learning in the development of software solutions is a time-consuming and complex process if there are no ready-made models and solutions (templates) that are used to accelerate development steps. The experience of developing such applications in the classic way and the longevity of the process motivated the Applicant to develop its own platform that will bring machine learning closer to users, and thus create a central place for technology experts and scientists. This will centralize knowledge of machine learning and provide a basis for innovation and new ideas on a global scale. </p>
    <h5 class="content__subtitle">The project included the following activities:</h5>
    <ol type="a">
      <li><p style="margin-left: 10px;" class="content__text">Adaptation of the innovative platform to market requirements;</p></li>
      <li><p style="margin-left: 10px;" class="content__text">Preparation for launching the platform on the market;</p></li>
      <li><p style="margin-left: 10px;" class="content__text">Project management</p></li>
      <li><p style="margin-left: 10px;" class="content__text">Promotion and visibility.</p></li>
    </ol>
    <h5 class="content__subtitle">Objectives and expected results of the project</h5>
    <p class="content__text">The overall goal of the project is to contribute to the development of the Applicant and the successful transfer of innovative ideas into a business venture ready for the global market.</p>
    <h5 class="content__subtitle">The Bonumic platform offers several key features for users:</h5>
    <ol type="a">
      <li><p style="margin-left: 10px;" class="content__text">Knowledge base of ready-made models, data sets, research, data and materials for creating solutions based on machine learning,</p></li>
      <li><p style="margin-left: 10px;" class="content__text">Knowledge base of professional articles, studies, blogs, tutorials and educational materials for learning,</p></li>
      <li><p style="margin-left: 10px;" class="content__text">Collaboration, networking and joint work of experts and the scientific community.</p></li>
    </ol>
    <h5 class="content__subtitle">The specific objectives of the project are:</h5>
    <ol type="a">
      <li><p style="margin-left: 10px;" class="content__text">Increase in sales revenue;</p></li>
      <li><p style="margin-left: 10px;" class="content__text">Increasing the capacity to provide services;</p></li>
      <li><p style="margin-left: 10px;" class="content__text">Support to the development of the information society in the Republic of Croatia.</p></li>
    </ol>
    <h5 class="content__subtitle">Implementation has positive effects on:</h5>
    <ol type="a">
      <li><p style="margin-left: 10px;" class="content__text">Further development of the Applicant's company and strengthening of employee capacity,</p></li>
      <li><p style="margin-left: 10px;" class="content__text">Dissemination of knowledge and progress of the industry of software solutions based on machine learning,</p></li>
      <li><p style="margin-left: 10px;" class="content__text">Academic community in the form of dissemination of knowledge and cooperation base,</p></li>
      <li><p style="margin-left: 10px;" class="content__text">Economic progress of the Republic of Croatia.</p></li>
    </ol>
    <h5 class="content__subtitle">Sustainability of results after the completion of the project will be realized through several different aspects:</h5>
    <ol type="a">
      <li><p style="margin-left: 10px;" class="content__text">financial sustainability;</p></li>
      <li><p style="margin-left: 10px;" class="content__text">maintenance of business solutions and their future upgrade;</p></li>
      <li><p style="margin-left: 10px;" class="content__text">market sustainability.</p></li>
    </ol>
    <h2 class="content__title">Total project value and amount co-financed by the EU (in HRK)</h2>
    <ul>
      <li><p style="margin-left: 10px;" class="content__text">The total value of the project is HRK 1,559,633.75</p></li>
      <li><p style="margin-left: 10px;" class="content__text">The total value of the project (eligible costs) is 1,308,573.00 HRK</p></li>
      <li><p style="margin-left: 10px;" class="content__text">The EU share in project financing amounts to HRK 1,112,273.95</p></li>
    </ul>
    <h2 class="content__title">Project implementation period</h2>
    <p class="content__text">01.09.2019 - 01.03.2021.</p>
    <h2 class="content__title">Contact for more information</h2>
    <p class="content__text">
      <span>Flow and Form</span>
      <span>Hondlova ulica 2/9</span>
      <span>Croatia, Zagreb</span>
      <a href="mailto:hi@flownform.com">hi@flownform.com</a>
    </p>
    <h5 class="content__subtitle">Links</h5>
    <ul>
      <li><p style="margin-left: 10px;" class="content__text"><a href="https://strukturnifondovi.hr/">https://strukturnifondovi.hr/</a></p></li>
      <li><p style="margin-left: 10px;" class="content__text"><a href="https://strukturnifondovi.hr/eu-fondovi/esi-fondovi-2014-2020/op-konkurentnost-i-kohezija/">https://strukturnifondovi.hr/eu-fondovi/esi-fondovi-2014-2020/op-konkurentnost-i-kohezija/</a></p></li>
    </ul>
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
