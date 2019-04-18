<?php /* Template Name: Main Page Template */ ?>
<?php get_header(); ?>

<section class="uk-position-relative section_type_parallax">
  <a href="<?php echo site_url(); ?>/media">
    <div class="parallax uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/media.jpg');">
      <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 class="parallax__title parallax__right" uk-parallax="opacity: 0,1; y: -100,0; x: -100,0; scale: 2,1; viewport: 0.1;">MEDIA</h1>
      </div>
    </div>
  </a>

</section>
<section class="uk-position-relative section_type_parallax">
  <a href="<?php echo site_url(); ?>/interior">
    <div class="parallax uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/interior.jpg');">
      <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 class="parallax__title parallax__left" uk-parallax="opacity: 0,1; y: -100,0; x: 100,0; scale: 2,1; viewport: 0.1;">INTERIOR</h1>
      </div>
    </div>
  </a>
</section>
<section class="uk-position-relative section_type_parallax">
  <a href="<?php echo site_url(); ?>/coffeshop">

    <div class="parallax uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/cafe.jpg');">
      <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 class="parallax__title parallax__right" uk-parallax="opacity: 0,1; y: -100,0; x: -100,0; scale: 2,1; viewport: 0.1;">Coffe shop</h1>
      </div>
    </div>
  </a>

</section>


<?php
// check if the flexible content field has rows of data
if( have_rows('homepage') ):
   // loop through the rows of data
    while ( have_rows('homepage') ) : the_row();
        if( get_row_layout() == 'media_section' ): ?>
<section class="uk-position-relative section_type_parallax">
  <a href="<?php the_sub_field('media_page'); ?>">
    <div class="parallax uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top"
    style="background-image: url('<?php the_sub_field('media_background'); ?>');" >
      <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 class="parallax__title
        <?php if ( get_sub_field( 'position' ) ): ?>
parallax__right
<?php else: ?>

parallax__left
<?php endif;  ?>" uk-parallax="opacity: 0,1; y: -100,0; x: -100,0; scale: 2,1; viewport: 0.1;">
<?php the_sub_field('media_title'); ?></h1>
      </div>
    </div>
  </a>
</section>
<?php
endif;
    endwhile;
      else :
    // no layouts found
endif;
?>





<!-- END header  -->
<?php get_footer(); ?>
