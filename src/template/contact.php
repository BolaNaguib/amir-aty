<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>
<section class="uk-position-relative section_type_parallax">
  <a href="#">
  <div class="parallax uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('<?php the_field('page_background'); ?>');">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 class="parallax__title" uk-parallax="opacity: 0,1; y: -100,0; x: -100,0; scale: 2,1; viewport: 0.1;"><?php the_field('page_title'); ?></h1>
    </div>
</div>
</a>

</section>
<section class="section_theme_midnight uk-padding-large">

<div class="uk-container">
  <?php echo do_shortcode(get_field('form')); ?>

</div>

</section>
<section class="mapiframe">

  <?php the_field('map'); ?>
</section>
<?php get_footer(); ?>
