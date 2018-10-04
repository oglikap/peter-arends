<?php get_header(); ?>

  <div class="uk-position-relative uk-visible-toggle" uk-slider="center: true;">
    <ul class="uk-slider-items uk-grid uk-grid-match" uk-height-viewport="offset-top: true; offset-bottom: 30">
      <li class="uk-width-1-1">
        <div class="uk-cover-container">
          <?php get_template_part( 'template-parts/content', 'tekeningen' ); ?>
        </div>
      </li>
      <li class="uk-width-1-1">
        <div class="uk-cover-container">
          <?php get_template_part( 'template-parts/content', 'comics' ); ?>
        </div>
      </li>
    </ul>
    <!-- <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul> -->

  </div>
  <div class="uk-position-bottom">
    <div class="uk-navbar-container" uk-navbar>
      <div class="uk-navbar-center">
        <?php wp_nav_menu( array(
        'theme_location' => 'arends-menu',
        'container' => 'ul',
        'menu_class' => 'uk-navbar-nav',
        ) ); ?>
      </div>
    </div>
  </div>


        <!-- <//?php if( is_page( 'comics' ) ) {
            get_template_part( 'template-parts/content', 'comics' );
        } elseif (is_page( 'tekeningen' ) ) {
          get_template_part( 'template-parts/content', 'tekeningen' );
        }?>

           -->

<?php get_footer(); ?>
