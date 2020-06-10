<?php
/*
Template Name: Privacy Policy Page
*/
?>
<?php
get_header()
?>
<main class="gdpr container">
  <h1 class="gdpr__title">Privacy Policy</h1>
  <section class="gdpr__content content">
    <h2 class="content__title">Who we are</h2>
    <p class="content__text">Our website address is: <a href="https://flownform.com/">flownform.com</a></p>
    <h2 class="content__title">What personal data we collect and why we collect it</h2>
    <h5 class="content__subtitle">Comments</h5>
    <p class="content__text">When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p>
    <p class="content__text">An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: <a href="https://automattic.com/privacy/" target="_blank">https://automattic.com/<wbr>privacy/</a>. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>
    <h5 class="content__subtitle">Media</h5>
    <p class="content__text">If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>
    <h5 class="content__subtitle">Contact forms</h5>
    <p class="content__text">This site uses multiple contact forms that email the information entered information into to the site’s owners. That information may also be temporarily stored on the site’s servers in the form of log files. That data is retained indefinitely both in log file form and in email by our email provider.</p>
    <h5 class="content__subtitle">Cookies</h5>
    <p class="content__text">If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>
    <p class="content__text">If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>
    <p class="content__text">When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>
    <p class="content__text">If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>
    <h5 class="content__subtitle">Embedded content from other websites</h5>
    <p class="content__text">Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>
    <p class="content__text">These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracing your interaction with the embedded content if you have an account and are logged in to that website.</p>
    <h5 class="content__subtitle">Analytics</h5>
    <p class="content__text">In addition to server logs, we also use Google Analytics (<a href="https://support.google.com/analytics/answer/6004245?hl=en">link</a>) to track traffic and other statistics. You may read their privacy policies at the links provided.</p>
    <h2 class="content__title">Who we share your data with</h2>
    <p class="content__text">We use WordPress plugins and software including Mailchimp in order to manage communications with persons who subscribe to this website. MailChimp stores this information on its servers. We have a comprehensive Data Processing Agreement in place with MailChimp which guarantees adequate data protection standards are applied to subscriber data.</p>
    <p class="content__text"> Law, mostly will not rent or sell personal data to anyone. Other than to its chosen contractor/s and affiliated organisations, as described above, Law, mostly discloses personal data only in response to a court order, subpoena or other governmental request, or when Law, mostly believes in good faith that disclosure is reasonably necessary to protect the property or rights of Law, mostly, third parties or the public at large. If you are a subsriber to this website and have supplied your email address, I may send you an email to tell you about new information or products. Our email list is relatively low volume and we will not be sending you spam or flooding your inbox with irrelevant information.</p>
    <h2 class="content__title">How long we retain your data</h2>
    <p class="content__text">If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>
    <p class="content__text">For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>
    <h2 class="content__title">What rights you have over your data</h2>
    <p class="content__text">If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>
    <h2 class="content__title">Where we send your data</h2>
    <p class="content__text">Visitor comments may be checked through an automated spam detection service.</p>
    <h2 class="content__title">Your contact information</h2>
    <p class="content__text">
      <span>Flow and Form</span>
      <span>Hondlova ulica 2/11</span>
      <span>Croatia, Zagreb</span>
      <a href="mailto:hi@flownform.com">hi@flownform.com</a>
    </p>
    <h5 class="content__title">Additional information</h5>
    <h5 class="content__subtitle">How we protect your data</h5>
    <p class="content__text">In addition to following industry-standard security protocols, Plagiarism Today is protected by Distil Networks, a content delivery network that restricts automated access to the site and all of the content on it, including any stored personal information.</p>
    <h5 class="content__subtitle">What data breach procedures we have in place</h5>
    <p class="content__text">If a data breach is detected, we will notify users both via the site and email newsletter within 72 hours.</p>
    <h5 class="content__subtitle">What third parties we receive data from</h5>
    <p class="content__text">We receive no data from third parties other than analytics information discuss above.</p>
    <h5 class="content__subtitle">What automated decision making and/or profiling we do with user data</h5>
    <p class="content__text">We have no automated decision making or profiling.</p>
    <h5 class="content__subtitle">Industry regulatory disclosure requirements</h5>
    <p class="content__text">We have no industry regulatory disclosures.</p>
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