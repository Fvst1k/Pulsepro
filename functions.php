<?php

add_action('wp_enqueue_scripts', 'addStyle');

function addStyle()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/styles.css');
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('slick'), 'null', true);

}

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function wpshout_longer_excerpts($length)
{
    if (is_admin()) {
        return $length;
    }
    return 25;
}

add_filter('excerpt_length', 'wpshout_longer_excerpts', 999);
add_theme_support('woocommerce');
if ( class_exists( 'WooCommerce' ) ) {
    require_once(get_template_directory() . '/wooc.php');
}

function true_register_wp_sidebars() {

    /* В боковой колонке - первый сайдбар */
    register_sidebar(
        array(
            'id' => 'true_side', // уникальный id
            'name' => 'Боковая колонка', // название сайдбара
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
            'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            'after_title' => '</h3>'
        )
    );

    /* В подвале - второй сайдбар */
    register_sidebar(
        array(
            'id' => 'true_foot',
            'name' => 'Футер',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в футер.',
            'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}

add_action( 'widgets_init', 'true_register_wp_sidebars' );

?>