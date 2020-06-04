<footer>
  <div class="footer container">
    <a href="/">
      <img class="footer__logo" src="/wp-content/themes/bonumic/assets/images/logo-white.svg" alt="logo" />
    </a>
    <nav class="navbar">
      <a href="/" class="navbar__item <?php if (is_page('home')) echo 'is-active'; ?>">HOME</a>
      <a href="/about" class="navbar__item <?php if (is_page('about')) echo 'is-active'; ?>">ABOUT</a>
      <a href="mailto:hi@bonumic.com" class="navbar__item">CONTACT</a>
    </nav>
  </div>
</footer>
<?php
wp_footer();
?>
</body>

</html>