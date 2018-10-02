<?php get_header(); ?>

  <div class="uk-section">
    <div class="uk-container">
      <div class="inner-page uk-child-width-1-1" uk-grid>
        <div class="uk-inline">

          

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
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
