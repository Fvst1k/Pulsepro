$(document).ready(function () {
    $('.reviews__slider').slick({
        dots: true,
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: true,
        arrows: true,
        swipe: false,
        prevArrow: `<button type="button" class="slick-prev slider-arrow-prev">
  <svg width="41" height="44" viewBox="0 0 41 44" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                            <path d="M36.2683 0.000244141H4.73037C2.12175 0.000244141 0 2.25244 0 5.02145V38.4984C0 41.2688 2.12175 43.521 4.73037 43.521H36.2683C38.8782 43.521 41 41.2688 41 38.4998V5.02145C41 2.25244 38.8782 0.000244141 36.2683 0.000244141ZM37.8456 38.4998C37.8456 39.4232 37.1383 40.1739 36.2683 40.1739H4.73037C3.86169 40.1739 3.15316 39.4219 3.15316 38.4998V5.02145C3.15316 4.09799 3.86169 3.34726 4.73037 3.34726H36.2683C37.1383 3.34726 37.8456 4.09935 37.8456 5.02145V38.4998ZM26.3451 11.2272L16.4218 21.7606L26.3451 32.2953C26.9601 32.9481 26.9601 34.0076 26.3451 34.6604C25.7288 35.3146 24.7307 35.3146 24.1144 34.6604L13.0764 22.9438C12.4602 22.291 12.4602 21.2302 13.0764 20.5774L24.1144 8.86079C24.7294 8.20662 25.7275 8.20662 26.3451 8.86079C26.6526 9.18719 26.8063 9.6156 26.8063 10.044C26.8063 10.4711 26.6526 10.9008 26.3451 11.2272Z"
                                  fill="#020C31"/>
                        </svg></button>`,
        nextArrow: `<button type="button" class="slick-next slider-arrow-next">
<svg width="41" height="44" viewBox="0 0 41 44" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                           <path d="M4.73165 43.521L36.2696 43.521C38.8782 43.521 41 41.2688 41 38.4998L41 5.02284C41 2.25247 38.8782 0.0002771 36.2696 0.0002771L4.73165 0.0002771C2.12175 0.0002771 -4.88758e-06 2.25247 -4.88758e-06 5.02148L-4.88758e-06 38.4998C-4.88758e-06 41.2688 2.12175 43.521 4.73165 43.521ZM3.15443 5.02148C3.15443 4.09803 3.86168 3.34729 4.73165 3.34729L36.2696 3.34729C37.1383 3.34729 37.8468 4.09938 37.8468 5.02148L37.8468 38.4998C37.8468 39.4232 37.1383 40.174 36.2696 40.174L4.73165 40.174C3.86168 40.174 3.15443 39.4219 3.15443 38.4998L3.15443 5.02148ZM14.6549 32.294L24.5782 21.7606L14.6549 11.2259C14.0399 10.5731 14.0399 9.51363 14.6549 8.86082C15.2712 8.20665 16.2693 8.20665 16.8856 8.86082L27.9236 20.5774C28.5398 21.2302 28.5398 22.291 27.9236 22.9439L16.8856 34.6604C16.2706 35.3146 15.2725 35.3146 14.6549 34.6604C14.3474 34.334 14.1937 33.9056 14.1937 33.4772C14.1937 33.0502 14.3474 32.6204 14.6549 32.294Z"
                                 fill="#020C31"/>
                       </svg>
        </button>`,
        responsive: [
            {
                breakpoint: 992, settings: {
                    slidesToShow: 1
                }
            }
        ]


    });
});
workPopup()

function workPopup() {
    document.querySelectorAll('.popup__selector').forEach(currentPopup => {
        currentPopup.addEventListener("click", evt => {
            openPopup()
        })
    })
    document.querySelector('.popup__background').addEventListener("click", evt => {
        closePopup()
    })
    document.querySelector('.popup__cross').addEventListener("click", evt => {
        closePopup()
    })
    document.querySelector(".wpcf7").addEventListener('wpcf7mailsent', evt => {
        setTimeout(closePopup, 2000)
    })

}


function closePopup() {
    document.querySelector('.popup__wrapper').classList.remove("active")
    document.querySelector('.body').classList.remove("active")
    setTimeout(() => {
        document.querySelector(".wpcf7-form").reset()
    }, 1000)
}

function openPopup() {
    document.querySelector('.popup__wrapper').classList.add("active")
    document.querySelector('.body').classList.add("active")
}



