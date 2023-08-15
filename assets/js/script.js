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
openPopup()
function openPopup() {
    document.querySelectorAll('.popup__selector').forEach(currentPopup => {
        currentPopup.addEventListener("click", evt => {
            document.querySelector('.popup__wrapper').classList.add("active")
            document.querySelector('.body').classList.add("active")
        })
    })
    document.querySelector('.popup__background').addEventListener("click", evt => {
        document.querySelector('.popup__wrapper').classList.remove("active")
        document.querySelector('.body').classList.remove("active")
        setTimeout(() => {
            document.querySelector(".wpcf7-form").reset()
        }, 1000)
    })
    document.querySelector('.popup__cross').addEventListener("click", evt => {
        document.querySelector('.popup__wrapper').classList.remove("active")
        document.querySelector('.body').classList.remove("active")
        setTimeout(() => {
            document.querySelector(".wpcf7-form").reset()
        }, 1000)
    })
}



