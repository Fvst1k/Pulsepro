<?php
/*
Template Name: products
*/
?>

<?php get_header() ?>

<section class="products">
	<div class="block__content block__content_products">
		<h2 class="products__title b-line_title"><?php the_title(); ?></h2>
		<div class="products__catalog">
            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => -1,
                'tag' => 'product',
            ]);

            if ($myposts) {
                foreach ($myposts

                         as $post) {
                    setup_postdata($post);
                    ?>
                    <a class="products__card" href="<?php the_permalink($post); ?>">
                        <div class="products__card-img">
                            <img src="<?php the_field('product_img'); ?>" alt="изображение отсутствует">
                        </div>
                        <div class="products__card-description">
                            <h3 class="products__description-title"><?php the_field('product_title'); ?></h3>
                            <ul class="products__description-list">
                                <div class="products__description-list-name">Общие:</div>
                                <?php the_field('product_text'); ?>
                            </ul>
                            <p class="products__description-price"><span>Стоимость:</span> <?php the_field('product_price'); ?></p>
                        </div>
                    </a>

                    <?php
                }
            }
            wp_reset_postdata();
            ?>

		</div>
	</div>
	 </section>

<?php get_footer(); ?>
