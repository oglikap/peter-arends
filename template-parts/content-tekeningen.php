<?php

$images = get_field( 'gallery' );

if( $images ): ?>
  <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@l uk-margin-top" uk-grid="masonry: true;" uk-lightbox>
    <?php foreach( $images as $image ): ?>
      <div>
        <a class="uk-inline" href="<?php echo $image['url']; ?>" data-caption="<?php echo $image['caption']; ?>">
          <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">
        </a>
      </div>
    <?php endforeach; ?>
  </div>

<?php endif; ?>
