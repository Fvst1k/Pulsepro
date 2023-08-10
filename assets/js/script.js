$(document).ready(function () {
    $('.reviews__slider').slick({
        dots: true,
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 992, settings: {
                    slidesToShow: 1
                }
            }
        ]


    });
});

