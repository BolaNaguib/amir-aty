<?php /* Template Name: Main Page Template */ ?>
<?php get_header(); ?>



<?php
// check if the flexible content field has rows of data
if( have_rows('homepage') ):
   // loop through the rows of data
    while ( have_rows('homepage') ) : the_row();
        if( get_row_layout() == 'media_section' ): ?>
<section class="uk-position-relative section_type_parallax">
  <a class="media_container" href="<?php the_sub_field('media_page'); ?>">
    <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top"
    style="background-image: url('<?php the_sub_field('media_background'); ?>');" >
      <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 class="parallax__title
        <?php if ( get_sub_field( 'position' ) ): ?>
parallax__right
<?php else: ?>

parallax__left
<?php endif;  ?>" >
<?php the_sub_field('media_title'); ?></h1>
      </div>
    </div>
  </a>
</section>
<?php elseif( get_row_layout() == 'map_section' ): ?>
  <section class="uk-section section_theme_midnight">
    <div class="uk-container uk-container-large">
      <div class="" uk-grid>
        <div class="uk-width-1-2 uk-width-1-1 uk-text-left@m uk-text-center">
<h3><?php the_sub_field('block_title') ?></h3>
<hr class="hr_type_footer">
<div class="">
  <?php the_sub_field('block_caption') ?>
</div>
        </div>
        <div class="uk-width-1-2@m uk-width-1-1">
          <?php the_sub_field('map'); ?>

        </div>
      </div>
    </div>
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
