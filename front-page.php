<?php get_header(); ?>

<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="sets: true">
  <ul class="uk-slider-items uk-child-width-1-1">
    <li>
      <img src="<?php echo get_template_directory_uri() . '/img/home.jpg'; ?>" alt="">
    </li>
    <li>
      <?php get_template_part( 'template-parts/content', 'comics' ); ?>
    </li>
  </ul>

  <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
  <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
  <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-dark"></ul>

</div>

<?php get_footer(); ?>
