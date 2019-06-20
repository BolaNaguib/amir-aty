<footer class="section_type_footer">
  <div class="uk-child-width-1-4@m uk-child-width-1-1" uk-grid>
    <?php
// check if the flexible content field has rows of data
if( have_rows('footer','option') ):
     // loop through the rows of data
    while ( have_rows('footer','option') ) : the_row();

        if( get_row_layout() == 'coloumn_with_text' ):?>
    <div class="">
      <h3 class="footer__title">
        <?php the_sub_field('coloumn_title'); ?>
      </h3>
      <hr class="hr_type_footer">
      <p>
        <?php the_sub_field('column_caption'); ?>
      </p>
    </div>


    <?  elseif( get_row_layout() == 'coloumn_with_links' ):?>

    <div class="">

      <h3 class="footer__title"><?php the_sub_field('column_title'); ?></h3>
      <hr class="hr_type_footer">
      <?php if( have_rows('coloumn_links') ): ?>

      <ul class="uk-list">
        <?php while ( have_rows('coloumn_links') ) : the_row(); ?>
        <li><a class="footer__link  uk-button-text" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_title'); ?></a></li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  <?  elseif( get_row_layout() == 'social_media' ):?>
  <div class="">
    <h3 class="footer__title"><?php the_sub_field('block_title'); ?></h3>
    <hr class="hr_type_footer">
  <ul class="uk-iconnav">
    <li> <a target="_blank" href="<?php the_sub_field('facebook') ?>"><i class="fab fa-facebook-square"></i></a> </li>
    <li> <a target="_blank" href="<?php the_sub_field('instagram') ?>"><i class="fab fa-instagram"></i></a> </li>
  </ul>
  </div>
    <?php
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>

  </div>
</footer>
<section class="uk-padding-small uk-padding-remove-horizontal	 " style="color:#fff">
  <div class="uk-container">
    <hr class="green_hr uk-margin-top uk-margin-bottom" style=" ">
      <div class="uk-child-width-1-2@m uk-child-width-1-1  uk-grid" uk-grid="">
        <div class="uk-text-left@m uk-text-center uk-first-column">
          Copyright © screen2000 - All rights reserved 2019
        </div>
        <div class="uk-text-right@m uk-text-center">
          Made with  <i style="color:red" class="fas fa-heart"></i> By <a style="color:red" target="_blank" href="inetwork-me.com"> Inetwork-me.com</a>
        </div>



    </div>
  </div>
</section>
<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
</body>

</html>
