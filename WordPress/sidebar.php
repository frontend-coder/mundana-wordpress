<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mundanapro
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<!-- <h5 class="font-weight-bold spanborder">
            <span>Popular in Science</span>
          </h5>
          <ol class="list-featured">
            <li>
              <span>
                <h6 class="font-weight-bold">
                  <a href="./article.html" class="text-dark">Did Supernovae Kill Off Large Ocean Animals?</a>
                </h6>
                <p class="text-muted">Jake Bittle in SCIENCE</p>
              </span>
            </li>
            <li>
              <span>
                <h6 class="font-weight-bold">
                  <a href="./article.html" class="text-dark">Humans Reversing Climate Clock: 50 Million Years</a>
                </h6>
                <p class="text-muted">Jake Bittle in SCIENCE</p>
              </span>
            </li>
            <li>
              <span>
                <h6 class="font-weight-bold">
                  <a href="./article.html" class="text-dark">Unprecedented Views of the Birth of Planets</a>
                </h6>
                <p class="text-muted">Jake Bittle in SCIENCE</p>
              </span>
            </li>
            <li>
              <span>
                <h6 class="font-weight-bold">
                  <a href="./article.html" class="text-dark">Effective New Target for Mood-Boosting Brain Stimulation
                    Found</a>
                </h6>
                <p class="text-muted">Jake Bittle in SCIENCE</p>
              </span>
            </li>
          </ol> -->