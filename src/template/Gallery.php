<?php /* Template Name: Gallery Template */ ?>
<?php get_header(); ?>
<section class="uk-position-relative section_type_parallax">
  <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('<?php the_field('page_wallpaper') ?>');">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 class="parallax__title"><?php the_field('page_title') ?></h1>
    </div>
</div>

</section>
<section class="section_theme_midnight">
  <div class="uk-container uk-container-large">

    <div class="uk-child-width-1-3@m uk-child-width-1-1" uk-lightbox="animation: slide" uk-grid>

      <?php

      // check if the flexible content field has rows of data
      if( have_rows('gallery') ):

           // loop through the rows of data
          while ( have_rows('gallery') ) : the_row();?>


                  <div>
                      <a class="uk-inline" href="<?php the_sub_field('project_gallery'); ?>" data-caption="<?php the_sub_field('project_gallery_caption'); ?>">
                          <img class="gallery_media"src="<?php the_sub_field('project_gallery'); ?>" alt="<?php the_sub_field('project_gallery_alt'); ?>">
                      </a>
                  </div>

<?php
endwhile;

else :

// no layouts found

endif;

?>



</div>
    </div>
</section>
<?php get_footer(); ?>
