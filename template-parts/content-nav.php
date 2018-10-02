<header>
  <!-- NAVIGATION MENU -->
  <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar style="position:relative; z-index:980;">
      <div class="uk-navbar-left">

      </div>
      <div class="uk-navbar-right">
        <?php wp_nav_menu( array(
          'theme_location' => 'arends-menu',
          'container' => 'ul',
          'menu_class' => 'uk-navbar-nav',
        ) ); ?>

        <a class="uk-navbar-toggle" uk-navbar-toggle-icon href=""></a>
      </div>
    </nav>
  </div>

</header>
