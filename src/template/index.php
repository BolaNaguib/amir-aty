<!-- START header -->
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



<!-- END header  -->
<?php get_footer(); ?>
