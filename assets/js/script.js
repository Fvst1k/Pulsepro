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
    })
    document.querySelector('.popup__cross').addEventListener("click", evt => {
        document.querySelector('.popup__wrapper').classList.remove("active")
        document.querySelector('.body').classList.remove("active")
    })
}
function openIframe() {
    const popup = document.querySelector(".popup-iframe__container")
    if (!popup) return
    const closePopup = () => {
        popup.classList.remove("active")
        document.body.classList.remove("active")
        popup.querySelector(".popup-iframe__content").innerHTML = null
    }
    document.querySelectorAll(".portfolio__element").forEach(currentItem => {
        currentItem.addEventListener("click", evt => {
            popup.classList.add("active")
            document.body.classList.add("active")
            popup.querySelector(".popup-iframe__content").innerHTML = currentItem.innerHTML
        })
    })
    popup.querySelector(".popup-iframe__cross").addEventListener("click", closePopup)
    popup.querySelector(".popup-iframe__bg").addEventListener("click", closePopup)
}