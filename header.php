<?php
/*
Template Name: header
*/
?>
<?php $front_id = get_option('page_on_front'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <title>PulsePro</title>

    <?php wp_head(); ?>
</head>
<body class="body ">
<div class="wrapper">
    <!-- Header -->
    <header>
        <div class="popup__wrapper">
            <div class="popup__background"></div>
            <div class="popup__container">
                <div class="popup__cross hover__tY">
                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.17275 3.17278L26.3271 26.3271" stroke="white" stroke-width="5" stroke-linecap="round"/>
                        <path d="M26.3271 3.17274L3.17278 26.3271" stroke="white" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="popup">
                    <div class="popup__bg">
                        <img src="<?php the_field('form_bg', $front_id); ?>" alt="error"/>
                    </div>

                    <div class="popup__title" style="font-size:<?php the_field('form_title_font'); ?>px; margin-top:<?php the_field('form_title_mt'); ?>px; margin-bottom:<?php the_field('form_title_bm'); ?>px; line-height:<?php the_field('form_title_lh'); ?>;">
                        <?php the_field('form_title', $front_id); ?>
                    </div>
                    <div class="popup__subtitle" style="font-size:<?php the_field('form_text_font'); ?>px; margin-top:<?php the_field('form_text_mt'); ?>px; margin-bottom:<?php the_field('form_text_bm'); ?>px; line-height:<?php the_field('form_text_lh'); ?>;">
                        <?php the_field('form_text', $front_id); ?>
                    </div>
                    <div class="popup__form">
                        <?php echo do_shortcode('[contact-form-7 id="4036518" title="Feedback"]') ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="block__content block__content_header">
            <div class="header__main-row">
                <a href="/#" class="header__logo">
                    <svg width="147" height="28" viewBox="0 0 147 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.32 4.8V14.8H9.88C11.3467 13.6 12.08 11.84 12.08 9.52C12.08 8.53333 11.88 7.6 11.48 6.72C11.1067 5.84 10.6533 5.2 10.12 4.8H6.32ZM0.92 28V-1.90735e-06H11.76C13.5733 0.799999 15 2.02667 16.04 3.68C17.1067 5.33333 17.64 7.26667 17.64 9.48C17.64 11.6667 17.0933 13.6933 16 15.56C14.9067 17.4267 13.2933 18.7467 11.16 19.52H6.32V28H0.92ZM29.8578 28H25.6578C24.4845 26.5067 23.6845 25.0133 23.2578 23.52C22.8311 22.0267 22.6178 20.16 22.6178 17.92V7.56H27.9378V18.32C27.9378 20.7467 28.4178 22.5733 29.3778 23.8H33.0978V7.56H38.4178V28H34.2178L33.4978 26.56C32.4845 27.52 31.2711 28 29.8578 28ZM49.9203 -1.90735e-06V28H44.6403V-1.90735e-06H49.9203ZM58.1513 7.56H66.9913V11.76H60.7513L64.5513 17.4C66.2579 19.8267 67.2046 21.4933 67.3913 22.4C67.4979 22.8267 67.5513 23.2667 67.5513 23.72C67.5513 25.6133 66.8446 27.04 65.4313 28H55.2313V23.8H62.5513L58.2713 17.52C58.0846 17.2267 57.7913 16.8133 57.3913 16.28C57.0179 15.7467 56.7246 15.32 56.5113 15C56.2979 14.6533 56.1513 14.4 56.0713 14.24C55.9913 14.08 55.8846 13.88 55.7513 13.64C55.6179 13.3733 55.5246 13.1467 55.4713 12.96C55.3646 12.4533 55.3113 12.04 55.3113 11.72C55.3113 9.77333 56.2579 8.38667 58.1513 7.56ZM81.785 11.76H78.785C78.385 12.24 78.0517 12.9067 77.785 13.76C77.545 14.6133 77.425 15.44 77.425 16.24H83.145C83.1983 15.44 83.0917 14.6133 82.825 13.76C82.5583 12.88 82.2117 12.2133 81.785 11.76ZM87.225 23.8V28H77.065C75.1983 26.7467 73.8783 25.2 73.105 23.36C72.3583 21.4933 71.985 19.6133 71.985 17.72C71.985 13.3467 73.6383 9.96 76.945 7.56H83.425C85.2117 8.86667 86.425 10.2533 87.065 11.72C87.705 13.1867 88.025 14.6667 88.025 16.16C88.025 17.6533 87.905 18.9333 87.665 20H77.705C77.785 20.6133 78.0117 21.32 78.385 22.12C78.785 22.8933 79.2117 23.4533 79.665 23.8H87.225ZM99.1091 4.8V14.8H102.669C104.136 13.6 104.869 11.84 104.869 9.52C104.869 8.53333 104.669 7.6 104.269 6.72C103.896 5.84 103.442 5.2 102.909 4.8H99.1091ZM93.7091 28V-1.90735e-06H104.549C106.362 0.799999 107.789 2.02667 108.829 3.68C109.896 5.33333 110.429 7.26667 110.429 9.48C110.429 11.6667 109.882 13.6933 108.789 15.56C107.696 17.4267 106.082 18.7467 103.949 19.52H99.1091V28H93.7091ZM115.998 28V7.56H119.798L120.798 9.72C121.864 8.28 123.211 7.56 124.838 7.56H126.398V12.92H121.318V28H115.998ZM142.91 28H134.19C131.523 25.52 130.19 22.1333 130.19 17.84C130.19 15.68 130.483 13.8 131.07 12.2C131.683 10.6 132.643 9.05333 133.95 7.56H143.31C144.696 9.16 145.643 10.72 146.15 12.24C146.656 13.7333 146.91 15.6 146.91 17.84C146.91 22.1333 145.576 25.52 142.91 28ZM137.03 23.8H140.07C141.03 21.9333 141.51 19.8133 141.51 17.44C141.51 15.0667 141.016 13.1733 140.03 11.76H137.03C136.07 13.12 135.59 15.0533 135.59 17.56C135.59 20.04 136.07 22.12 137.03 23.8Z" fill="black"/>
                    </svg>
                </a>
                <nav class="header__menu">
                    <?php wp_nav_menu() ?>

                </nav>
                <button class="header__btn popup__selector">
                    <?php the_field('btn_header', $front_id);?>
                </button>
            </div>
        </div>
    </header>

    <!-- /Header -->