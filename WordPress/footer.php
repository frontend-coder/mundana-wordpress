<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mundanapro
 */
 
?>

<div class="container mt-5">
  <footer class="bg-white border-top p-3 text-muted small">
    <div class="row align-items-center justify-content-between">
      <div>
        <span class="navbar-brand mr-2"><strong>Mundana</strong></span> Copyright &copy;
        <script>
        document.write(new Date().getFullYear())
        </script>
        . <?php _e('All rights reserved.', 'mundana') ?>
      </div>
      <div>
        <?php _e('Made with ', 'mundana') ?> <a target="_blank" class="text-secondary font-weight-bold"
          href="https://www.wowthemes.net/mundana-free-html-bootstrap-template/">
          <?php _e('Mundana Theme ', 'mundana') ?> </a>
        <?php _e('by', 'mundana') ?> WowThemes.net.
      </div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>

</body>

</html>