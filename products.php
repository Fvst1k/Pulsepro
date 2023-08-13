<?php
/*
Template Name: products
*/
?>

<?php get_header() ?>

<section class="products">
	<div class="block__content block__content_products">
		<h2 class="products__title b-line_title">Продукция</h2>
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
                    <div class="project-slide">
                        <div class="project-subtitle"><?php the_title(); ?></div>
                        <div class="project-content">
                            <?php the_post_thumbnail(); ?>
                            <div class="project-text">
                                <p>Старт проекта: <span class="project-span"><?php the_field('project-start'); ?></span></p>
                                <p>Срок выполнения: <span class="project-span"><?php the_field('project-start2'); ?> дней</span></p>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                        <div class="project-example">
                            <div class="project-example_img">
                                <?php
                                $image = get_field('img');
                                $image2 = get_field('img2');
                                $image3 = get_field('img3'); ?>
                                <a href="<?php echo $image['url']; ?>" data-lightbox="images"><img src="<?php echo $image['url']; ?>" alt=""></a>
                                <a href="<?php echo $image2['url']; ?>" data-lightbox="images"><img src="<?php echo $image2['url']; ?>" alt=""></a>
                                <a href="<?php echo $image3['url']; ?>" data-lightbox="images"><img src="<?php echo $image3['url']; ?>" alt=""></a>

                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            wp_reset_postdata();
            ?>
			<a class="products__card" href="#">
				<div class="products__card-img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/product-1.png" alt="good"></div>
				<div class="products__card-description">
					<h3 class="products__description-title">PulsePro</h3>
					<ul class="products__description-list">
						<div class="products__description-list-name">Общие:</div>
						<li class="products__list-item">Одноуровневая база данных на локальном ПК</li>
						<li class="products__list-item">Автоматическое обновление ПО</li>
					</ul>
					<p class="products__description-price"><span>Стоимость:</span> 999999 рублей</p>
				</div>
			</a>
			<a class="products__card" href="#">
				<div class="products__card-img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/product-1.png" alt="good"></div>
				<div class="products__card-description">
					<h3 class="products__description-title">PulsePro</h3>
					<ul class="products__description-list">
						<div class="products__description-list-name">Общие:</div>
						<li class="products__list-item">Одноуровневая база данных на локальном ПК</li>
						<li class="products__list-item">Автоматическое обновление ПО</li>
					</ul>
					<p class="products__description-price"><span>Стоимость:</span> 999999 рублей</p>
				</div>
			</a>
			<a class="products__card" href="#">
				<div class="products__card-img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/product-1.png" alt="good"></div>
				<div class="products__card-description">
					<h3 class="products__description-title">PulsePro</h3>
					<ul class="products__description-list">
						<div class="products__description-list-name">Общие:</div>
						<li class="products__list-item">Одноуровневая база данных на локальном ПК</li>
						<li class="products__list-item">Автоматическое обновление ПО</li>
					</ul>
					<p class="products__description-price"><span>Стоимость:</span> 999999 рублей</p>
				</div>
			</a>
			<a class="products__card" href="#">
				<div class="products__card-img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/product-1.png" alt="good"></div>
				<div class="products__card-description">
					<h3 class="products__description-title">PulsePro</h3>
					<ul class="products__description-list">
						<div class="products__description-list-name">Общие:</div>
						<li class="products__list-item">Одноуровневая база данных на локальном ПК</li>
						<li class="products__list-item">Автоматическое обновление ПО</li>
					</ul>
					<p class="products__description-price"><span>Стоимость:</span> 999999 рублей</p>
				</div>
			</a>
		</div>
	</div>
	 </section>

<?php get_footer(); ?>
