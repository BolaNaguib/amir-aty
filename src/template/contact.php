<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>
<section class="uk-position-relative section_type_parallax">
  <a href="#">
  <div class="parallax uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/media.jpg');">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 class="parallax__title" uk-parallax="opacity: 0,1; y: -100,0; x: -100,0; scale: 2,1; viewport: 0.1;">CONTACT US</h1>
    </div>
</div>
</a>

</section>
<section class="section_theme_midnight uk-padding-large">

<div class="uk-container">
<form class="" action="index.html" method="post">
  <div class="uk-margin">
       <label class="uk-form-label" for="form-stacked-text">Name</label>
       <div class="uk-form-controls">
           <input class="uk-input" id="form-stacked-text" type="text" placeholder="Some text...">
       </div>
   </div>
   <div class="uk-margin">
       <label class="uk-form-label" for="form-stacked-text">Email</label>
       <div class="uk-form-controls">
           <input class="uk-input" id="form-stacked-text" type="text" placeholder="Some text...">
       </div>
   </div>
   <div class="uk-margin">
       <label class="uk-form-label" for="form-stacked-text">Subject</label>
       <div class="uk-form-controls">
           <input class="uk-input" id="form-stacked-text" type="text" placeholder="Some text...">
       </div>
   </div>
   <div class="uk-margin">
       <label class="uk-form-label" for="form-stacked-text">Message</label>
       <div class="uk-form-controls">
           <textarea rows="10" class="uk-textarea" id="form-stacked-text" type="text" placeholder="Some text..."></textarea>
       </div>
   </div>
   <div class="uk-text-center">
     <a class="uk-button uk-button-secondary" href="#"> Send </a>
   </div>
</form>
</div>

</section>
<section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.93255874945!2d31.46931645104393!3d30.0387926257049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f9c3f5ad639%3A0x755e8b0d6e6135d0!2sINETWORK+Middle+East+LLC!5e0!3m2!1sen!2seg!4v1555038067481!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<?php get_footer(); ?>
