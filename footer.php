<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garydavis
 */

?>

<div id="footer-row" class="secondary">
  <div id="footer-area1">
    <?php
if(is_active_sidebar('footer-area-1')){
dynamic_sidebar('footer-area-1');
}
?>
  </div>
  <div id="footer-area2">
    <?php
if(is_active_sidebar('footer-area-2')){
dynamic_sidebar('footer-area-2');
}
?>
  </div>
  <div id="footer-area3">
    <?php
if(is_active_sidebar('footer-area-3')){
dynamic_sidebar('footer-area-3');
}
?>
  </div>
    <div id="footer-area4">
    <?php
if(is_active_sidebar('footer-area-4')){
dynamic_sidebar('footer-area-4');
}
?>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
