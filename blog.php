<?php
/*
Template Name: blog
*/
?>

<?php get_header() ?>

    <section class="blog">
        <div class="block__content block__content_blog">
            <h2 class="blog__title b-line_title"><?php the_title();?></h2>
            <div class="blog__table">

                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => -1,
                    'tag' => 'blog',
                ]);

                if ($myposts) {
                    foreach ($myposts

                             as $post) {
                        setup_postdata($post);
                        ?>

                        <a class="blog__card" href="<?php the_permalink($post); ?>">
                            <div class="blog__img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <time class="blog__date"><?php
                                $mypost_date = the_time('d.m.Y');
                                echo $mypost_date;
                                ?></time>
                            <h3 class="blog__card-title"><?php the_title(); ?></h3>
                            <div class="blog__card-subtitle"><?php the_excerpt(); ?></div>
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