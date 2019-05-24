<?php /* Template Name: Gallery Template */ ?>
<?php get_header(); ?>
<section class="uk-position-relative section_type_parallax">
  <div class="parallax uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('<?php the_field('page_wallpaper') ?>');">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 class="parallax__title" uk-parallax="opacity: 0,1; y: -100,0; x: -100,0; scale: 2,1; viewport: 0.1;"><?php the_field('page_title') ?></h1>
    </div>
</div>

</section>
<section class="section_theme_midnight">
    <div class="uk-child-width-1-3@m uk-child-width-1-1 uk-grid-collapse"  uk-grid="masonry: true"  uk-lightbox="animation: slide">

      <?php

      // check if the flexible content field has rows of data
      if( have_rows('gallery') ):

           // loop through the rows of data
          while ( have_rows('gallery') ) : the_row();

              if( get_row_layout() == 'gallery' ): ?>

                  <div>
                      <a class="uk-inline" href="<?php the_sub_field('project_gallery'); ?>" data-caption="<?php the_sub_field('project_gallery_caption'); ?>">
                          <img src="<?php the_sub_field('project_gallery'); ?>" alt="<?php the_sub_field('project_gallery_alt'); ?>">
                      </a>
                  </div>

<?php elseif( get_row_layout() == 'download' ):

  $file = get_sub_field('file');

endif;

endwhile;

else :

// no layouts found

endif;

?>





    </div>
</section>
<?php get_footer(); ?>
