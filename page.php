<?php get_header(); ?>


        <?php if( is_page( 'comics' ) ) {
            get_template_part( 'template-parts/content', 'comics' );
        } elseif (is_page( 'tekeningen' ) ) {
          get_template_part( 'template-parts/content', 'tekeningen' );
        }?>

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

<?php get_footer(); ?>
