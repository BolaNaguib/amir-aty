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
    <div class="uk-child-width-1-3@m uk-child-width-1-1 uk-grid-collapse"  uk-grid="masonry: true">
      <?php

      // check if the flexible content field has rows of data
      if( have_rows('gallery') ):

           // loop through the rows of data
          while ( have_rows('gallery') ) : the_row();

              if( get_row_layout() == 'gallery' ): ?>

              	<?php the_sub_field('text'); ?>



      <div class="">
        <div class="uk-text-center">
    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
        <img class="images" src="<?php the_sub_field('outer_image'); ?>" alt="">
        <div uk-lightbox>
          <a href="<?php the_sub_field('inner_image'); ?>">

        <img class="uk-transition-scale-up uk-position-cover" src="<?php the_sub_field('inner_image'); ?>" alt="">
        <h3 class="uk-position-bottom" style="    background-color: #00000099;padding: 10px;color: #3edb01;"><?php the_sub_field('project_title'); ?></h3>
        </a>
      </div>
    </div>
  </div>
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
