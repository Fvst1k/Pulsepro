<?php ?>
<?php $front_id = get_option('page_on_front'); ?>

<?php get_header() ?>

<div class="block__content block__content_single-product">
    <h2 class="single-product__title b-line_title"><?php the_title();?></h2>
    <div class="single-product__content"><?php the_content();?></div>
    <button class="tl__btn tl__btn_single popup__selector">
        <?php the_field('btn_single', $front_id);?>
        <span class="tl__btn-arrow">
                    <svg width="28" height="16" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M26.7211 8.70711C27.1117 8.31658 27.1117 7.68342 26.7211 7.29289L20.3572 0.928932C19.9667 0.538408 19.3335 0.538408 18.943 0.928932C18.5524 1.31946 18.5524 1.95262 18.943 2.34315L24.5998 8L18.943 13.6569C18.5524 14.0474 18.5524 14.6805 18.943 15.0711C19.3335 15.4616 19.9667 15.4616 20.3572 15.0711L26.7211 8.70711ZM0 9L26.014 9V7L0 7L0 9Z"
      fill="black"/>
</svg>
</span>
    </button>


</div>


<?php get_footer(); ?>
