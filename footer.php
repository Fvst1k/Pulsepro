<?php
/*
Template Name: footer
*/
?>
<?php $front_id = get_option( 'page_on_front' ); ?>
<!-- Footer -->
<footer class="footer">

    <div class="block__content block__content_footer">
        <div class="footer__ellipse footer__ellipse_small">
            <svg width="338" height="338" viewBox="0 0 338 338" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="169" cy="169" r="144" stroke="#181818" stroke-width="50"/>
            </svg>
        </div>
        <div class="footer__ellipse footer__ellipse_big">
            <svg width="628" height="628" viewBox="0 0 628 628" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="314" cy="314" r="249" stroke="#181818" stroke-width="130"/>
            </svg>
        </div>
        <div class="footer__column footer__column_left">
            <div class="footer__logo__wrapper b-line">
                <a href="/#" class="footer__logo ">
                    <svg width="147" height="28" viewBox="0 0 147 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.32 4.8V14.8H9.88C11.3467 13.6 12.08 11.84 12.08 9.52C12.08 8.53333 11.88 7.6 11.48 6.72C11.1067 5.84 10.6533 5.2 10.12 4.8H6.32ZM0.92 28V-1.90735e-06H11.76C13.5733 0.799999 15 2.02667 16.04 3.68C17.1067 5.33333 17.64 7.26667 17.64 9.48C17.64 11.6667 17.0933 13.6933 16 15.56C14.9067 17.4267 13.2933 18.7467 11.16 19.52H6.32V28H0.92ZM29.8578 28H25.6578C24.4845 26.5067 23.6845 25.0133 23.2578 23.52C22.8311 22.0267 22.6178 20.16 22.6178 17.92V7.56H27.9378V18.32C27.9378 20.7467 28.4178 22.5733 29.3778 23.8H33.0978V7.56H38.4178V28H34.2178L33.4978 26.56C32.4845 27.52 31.2711 28 29.8578 28ZM49.9203 -1.90735e-06V28H44.6403V-1.90735e-06H49.9203ZM58.1513 7.56H66.9913V11.76H60.7513L64.5513 17.4C66.2579 19.8267 67.2046 21.4933 67.3913 22.4C67.4979 22.8267 67.5513 23.2667 67.5513 23.72C67.5513 25.6133 66.8446 27.04 65.4313 28H55.2313V23.8H62.5513L58.2713 17.52C58.0846 17.2267 57.7913 16.8133 57.3913 16.28C57.0179 15.7467 56.7246 15.32 56.5113 15C56.2979 14.6533 56.1513 14.4 56.0713 14.24C55.9913 14.08 55.8846 13.88 55.7513 13.64C55.6179 13.3733 55.5246 13.1467 55.4713 12.96C55.3646 12.4533 55.3113 12.04 55.3113 11.72C55.3113 9.77333 56.2579 8.38667 58.1513 7.56ZM81.785 11.76H78.785C78.385 12.24 78.0517 12.9067 77.785 13.76C77.545 14.6133 77.425 15.44 77.425 16.24H83.145C83.1983 15.44 83.0917 14.6133 82.825 13.76C82.5583 12.88 82.2117 12.2133 81.785 11.76ZM87.225 23.8V28H77.065C75.1983 26.7467 73.8783 25.2 73.105 23.36C72.3583 21.4933 71.985 19.6133 71.985 17.72C71.985 13.3467 73.6383 9.96 76.945 7.56H83.425C85.2117 8.86667 86.425 10.2533 87.065 11.72C87.705 13.1867 88.025 14.6667 88.025 16.16C88.025 17.6533 87.905 18.9333 87.665 20H77.705C77.785 20.6133 78.0117 21.32 78.385 22.12C78.785 22.8933 79.2117 23.4533 79.665 23.8H87.225ZM99.1091 4.8V14.8H102.669C104.136 13.6 104.869 11.84 104.869 9.52C104.869 8.53333 104.669 7.6 104.269 6.72C103.896 5.84 103.442 5.2 102.909 4.8H99.1091ZM93.7091 28V-1.90735e-06H104.549C106.362 0.799999 107.789 2.02667 108.829 3.68C109.896 5.33333 110.429 7.26667 110.429 9.48C110.429 11.6667 109.882 13.6933 108.789 15.56C107.696 17.4267 106.082 18.7467 103.949 19.52H99.1091V28H93.7091ZM115.998 28V7.56H119.798L120.798 9.72C121.864 8.28 123.211 7.56 124.838 7.56H126.398V12.92H121.318V28H115.998ZM142.91 28H134.19C131.523 25.52 130.19 22.1333 130.19 17.84C130.19 15.68 130.483 13.8 131.07 12.2C131.683 10.6 132.643 9.05333 133.95 7.56H143.31C144.696 9.16 145.643 10.72 146.15 12.24C146.656 13.7333 146.91 15.6 146.91 17.84C146.91 22.1333 145.576 25.52 142.91 28ZM137.03 23.8H140.07C141.03 21.9333 141.51 19.8133 141.51 17.44C141.51 15.0667 141.016 13.1733 140.03 11.76H137.03C136.07 13.12 135.59 15.0533 135.59 17.56C135.59 20.04 136.07 22.12 137.03 23.8Z"
                              fill="white"/>
                    </svg>
                </a>
            </div>

            <div class="footer__btn-wrapper b-line">
                <button class="tl__btn popup__selector tl__btn_footer">
                    <p>Записаться на демонстрацию</p>
                    <span class="tl__btn-arrow">
                    <svg width="28" height="16" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M26.7211 8.70711C27.1117 8.31658 27.1117 7.68342 26.7211 7.29289L20.3572 0.928932C19.9667 0.538408 19.3335 0.538408 18.943 0.928932C18.5524 1.31946 18.5524 1.95262 18.943 2.34315L24.5998 8L18.943 13.6569C18.5524 14.0474 18.5524 14.6805 18.943 15.0711C19.3335 15.4616 19.9667 15.4616 20.3572 15.0711L26.7211 8.70711ZM0 9L26.014 9V7L0 7L0 9Z"
      fill="black"/>
</svg>
</span>
                </button>
            </div>

            <div class="footer__company-info b-line mobile-dn">
                <p><?php  the_field('footer_info', $front_id); ?></p>
            </div>
        </div>
        <div class="footer__column footer__column_right">
            <div class="footer__contacts-wrapper b-line mobile-dn">
                <h4 class="footer__subtitle "><?php  the_field('footer_subtitle', $front_id); ?>
            </div>
            <div class="footer__contacts-wrapper b-line">
                <div class="header__menu footer__menu ">
                    <a href="/#" class="header__menu-item hover__tY">Услуги</a>
                    <a href="/product" class="header__menu-item hover__tY">Продукция</a>
                    <a href="/blog" class="header__menu-item hover__tY">Блог</a>
                </div>
            </div>
            <div class="footer__contacts-wrapper b-line">
                <div class="footer__contacts ">
                    <h6 class="footer__contacts-subtitle">Контакты</h6>
                    <a href="tel:<?php  the_field('phone', $front_id); ?>" class="footer__contact-group footer__contact-group_phone hover__tY">
                        <div class="footer__contact-icon">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.951 11.9849L13.894 9.90498C13.554 9.56402 13.095 9.35944 12.67 9.35944C12.211 9.35944 11.803 9.54697 11.446 9.90498L10.256 11.0984C10.205 11.0643 10.137 11.0302 10.086 11.0131C10.086 11.0131 10.069 11.0131 10.069 10.9961L10.052 10.979C9.89903 10.8767 9.72903 10.7744 9.52503 10.6892C8.48803 10.0414 7.51903 9.13782 6.53303 7.9274C6.07403 7.34776 5.75103 6.83631 5.49603 6.27373C5.76803 6.0521 5.97203 5.83047 6.12503 5.65999L6.65203 5.1315C7.06003 4.75644 7.26403 4.33023 7.26403 3.88698C7.26403 3.42668 7.06003 3.00048 6.66903 2.59132L5.05403 0.971745C4.90103 0.818312 4.74803 0.664878 4.57803 0.511445C4.23803 0.18753 3.81303 0 3.37103 0C2.87803 0 2.47003 0.170482 2.09603 0.545541L0.855034 1.79006C0.362034 2.25036 0.073034 2.83 0.00503398 3.54602V3.56307C-0.028966 4.44957 0.107033 5.26788 0.481033 6.29077C1.07603 7.8933 1.97703 9.39354 3.32003 11.0472C5.07103 13.0248 7.04303 14.5591 9.23603 15.6161L9.28703 15.6332C9.93303 15.923 11.157 16.4685 12.517 16.5538H12.704C13.605 16.5538 14.285 16.264 14.846 15.6502C15.05 15.4115 15.271 15.1899 15.458 14.9853C15.611 14.866 15.713 14.7467 15.815 14.6273L15.951 14.4909L15.985 14.4568C16.699 13.6726 16.699 12.7179 15.951 11.9849ZM15.356 13.8772L15.186 14.0477L15.169 14.0818C15.084 14.1841 15.016 14.2693 14.931 14.3375L14.88 14.3887C14.676 14.5932 14.438 14.8319 14.2 15.1047C13.809 15.5309 13.367 15.7184 12.704 15.7184H12.568C11.378 15.6332 10.29 15.1558 9.64403 14.866L9.61003 14.849C7.51903 13.8431 5.63203 12.377 3.98303 10.5017C2.69103 8.93324 1.84103 7.50119 1.28003 6.00095C0.940034 5.0633 0.821034 4.38138 0.855034 3.61421C0.906034 3.11981 1.09303 2.72771 1.43303 2.42084L2.69103 1.15928C2.89503 0.954697 3.09903 0.869456 3.35403 0.869456C3.57503 0.869456 3.77903 0.971745 3.96603 1.14223L3.98303 1.15928C4.13603 1.29566 4.28903 1.44909 4.44203 1.60253L6.05703 3.2221C6.36303 3.52897 6.41403 3.76764 6.41403 3.90403C6.41403 4.04042 6.38003 4.24499 6.05703 4.53481L5.51303 5.08035C5.32603 5.28493 5.10503 5.50656 4.81603 5.74523L4.78203 5.77933L4.74803 5.83047C4.59503 6.03505 4.57803 6.22258 4.66303 6.49535L4.68003 6.56354L4.69703 6.63174C4.98603 7.26252 5.34303 7.84216 5.85303 8.48999C6.90703 9.78565 7.96103 10.7574 9.08303 11.4564L9.13403 11.4905C9.27003 11.5587 9.40603 11.6268 9.52503 11.695C9.57603 11.7462 9.64403 11.7803 9.69503 11.7973C9.76303 11.8314 9.81403 11.8485 9.84803 11.8826L9.96703 11.9678H10.001L10.052 11.9849C10.154 12.019 10.222 12.019 10.273 12.019C10.443 12.019 10.596 11.9508 10.749 11.7973L12.024 10.5187C12.228 10.3141 12.415 10.2289 12.653 10.2289C12.908 10.2289 13.146 10.3823 13.282 10.5187L15.356 12.5986C15.764 13.0078 15.781 13.434 15.356 13.8772Z"
                                      fill="white" fill-opacity="0.85"/>
                            </svg>
                        </div>
                        <p><?php  the_field('phone', $front_id); ?></p>
                    </a>
                    <a href="mailto:<?php  the_field('email', $front_id); ?>" class="footer__contact-group footer__contact-group_email hover__tY">
                        <p>E-mail:</p>
                        <p><?php  the_field('email', $front_id); ?></p>
                    </a>
                    <a href="<?php  the_field('vk', $front_id); ?>" class="footer__contact-group footer__contact-group_vk hover__tY">
                        <div class="footer__contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_208_32)">
                                    <path d="M3.03999 0.240234C1.50026 0.240234 0.23999 1.50051 0.23999 3.04023V20.9602C0.23999 22.5 1.50026 23.7602 3.03999 23.7602H20.96C22.4997 23.7602 23.76 22.5 23.76 20.9602V3.04023C23.76 1.50051 22.4997 0.240234 20.96 0.240234H3.03999ZM3.03999 1.36023H20.96C21.8943 1.36023 22.64 2.10588 22.64 3.04023V20.9602C22.64 21.8946 21.8943 22.6402 20.96 22.6402H3.03999C2.10564 22.6402 1.35999 21.8946 1.35999 20.9602V3.04023C1.35999 2.10588 2.10564 1.36023 3.03999 1.36023ZM11.102 6.95586C10.5098 6.9545 9.98178 6.98759 9.50952 7.21945L9.50843 7.22055C9.27819 7.33398 9.11592 7.47806 8.98671 7.6493C8.9221 7.73491 8.85592 7.81177 8.82046 8.00695C8.80273 8.10454 8.79277 8.26269 8.89483 8.43352C8.9969 8.60434 9.20212 8.70148 9.33343 8.71898C9.42464 8.73113 9.63053 8.81876 9.64952 8.84477L9.65062 8.84695C9.65062 8.84695 9.73046 9.05527 9.75343 9.2407C9.7764 9.42613 9.7753 9.57648 9.7753 9.57648C9.77507 9.59144 9.77543 9.6064 9.7764 9.62133C9.7764 9.62133 9.80884 10.1072 9.78733 10.609C9.77877 10.809 9.7529 10.9869 9.72608 11.146C9.52666 10.9258 9.23281 10.5271 8.80843 9.79195C8.33764 8.97592 7.96296 8.2443 7.96296 8.2443C7.94328 8.18056 7.87369 7.98225 7.60202 7.78273C7.30504 7.56385 7.01796 7.53117 7.01796 7.53117C6.98195 7.52395 6.94531 7.52029 6.90858 7.52023L4.7014 7.52133C4.7014 7.52133 4.56906 7.51367 4.41046 7.53555C4.25186 7.55742 4.01304 7.57522 3.78265 7.84836L3.78155 7.84945C3.57565 8.09548 3.5881 8.36741 3.61312 8.52102C3.63813 8.67462 3.69405 8.79117 3.69405 8.79117C3.69513 8.79337 3.69623 8.79555 3.69733 8.79773C3.69733 8.79773 5.50271 12.5936 7.54296 14.8287C9.02454 16.4516 10.5452 16.4791 11.7998 16.4791H12.7361C12.9751 16.4791 13.1913 16.4698 13.4306 16.3304C13.6699 16.191 13.8309 15.8516 13.8309 15.6162C13.8309 15.3695 13.8678 15.1756 13.913 15.0759C13.9447 15.0057 13.9699 14.9805 14.0092 14.9599C14.0175 14.9652 14.0122 14.9621 14.0355 14.9785C14.1287 15.0441 14.2826 15.1935 14.45 15.3799C14.7847 15.7527 15.1647 16.2641 15.675 16.6148C16.0406 16.8662 16.3859 16.9779 16.6484 17.0184C16.8129 17.0437 16.9407 17.0388 17.0312 17.0315L19.1225 17.0402C19.1349 17.0403 19.1473 17.0399 19.1597 17.0391C19.1597 17.0391 19.52 17.0433 19.8947 16.8193C20.082 16.7073 20.303 16.4949 20.3748 16.1849C20.4467 15.875 20.3564 15.5538 20.1801 15.2607V15.2596C20.2108 15.3103 20.1524 15.2061 20.0926 15.1087C20.0329 15.0113 19.946 14.88 19.8214 14.7171C19.5721 14.3914 19.1729 13.9355 18.5275 13.3346H18.5264C18.1986 13.0296 17.9773 12.8137 17.8866 12.6937C17.7958 12.5736 17.8256 12.6367 17.8319 12.6062C17.8444 12.5451 18.2378 11.9776 19.0383 10.9087C19.5248 10.258 19.8663 9.76952 20.0916 9.3632C20.3168 8.95689 20.4792 8.60501 20.3661 8.1743L20.365 8.17211C20.3148 7.98304 20.1777 7.80877 20.0369 7.71383C19.8961 7.61889 19.7626 7.58175 19.6431 7.55852C19.4042 7.51204 19.1958 7.52023 19.0022 7.52023C18.5963 7.52023 16.7955 7.53445 16.6473 7.53445C16.4722 7.53445 16.1826 7.61411 16.0545 7.69086C15.7325 7.88467 15.64 8.1393 15.64 8.1393C15.6342 8.15005 15.6287 8.161 15.6236 8.17211C15.6236 8.17211 15.2521 8.99583 14.7737 9.80945C14.2891 10.6347 13.9311 11.0284 13.715 11.2105C13.709 11.1781 13.7101 11.2045 13.7062 11.1591C13.6869 10.9287 13.7084 10.6102 13.7084 10.2995C13.7084 9.46252 13.7794 8.87678 13.7412 8.35914C13.7222 8.10032 13.6742 7.83343 13.5039 7.58805C13.3336 7.34266 13.0501 7.18324 12.77 7.11555C12.6019 7.075 12.4103 6.96955 11.7167 6.96242H11.7156C11.5035 6.9603 11.2994 6.95631 11.102 6.95586ZM11.7047 8.08242C12.3184 8.08873 12.1655 8.12251 12.5064 8.20492C12.6121 8.23046 12.5865 8.23032 12.5841 8.2268C12.5816 8.22327 12.6126 8.28101 12.6245 8.44227C12.6483 8.76477 12.5884 9.40598 12.5884 10.2995C12.5884 10.5431 12.559 10.8908 12.5895 11.2532C12.62 11.6156 12.7099 12.0808 13.143 12.3612C13.3482 12.4942 13.5866 12.5026 13.7905 12.452C13.9943 12.4013 14.1792 12.2957 14.3734 12.1402C14.7618 11.8293 15.195 11.3044 15.7395 10.3771C16.2485 9.51152 16.6186 8.68726 16.6309 8.65992C16.6333 8.65799 16.6358 8.65667 16.6386 8.65445C16.6456 8.65453 16.6383 8.65445 16.6473 8.65445C16.8564 8.65445 18.624 8.64023 19.0022 8.64023C19.0905 8.64023 19.1226 8.64556 19.1925 8.64789C19.1735 8.71132 19.1946 8.67086 19.1116 8.8207C18.9374 9.13497 18.6163 9.60201 18.1414 10.2371C17.361 11.2793 16.8773 11.6877 16.7348 12.3798C16.6636 12.7258 16.7971 13.1093 16.993 13.3685C17.1888 13.6277 17.4361 13.8498 17.7641 14.1549C18.3714 14.7205 18.7277 15.1314 18.9322 15.3985C19.0344 15.5321 19.0989 15.6286 19.1389 15.6938C19.1789 15.7591 19.169 15.7522 19.2209 15.8382C19.2551 15.8954 19.2425 15.8605 19.2483 15.8776C19.1811 15.8965 19.0998 15.9193 19.0951 15.9202L17.0356 15.9115C16.9985 15.9115 16.9615 15.9151 16.9251 15.9224C16.9251 15.9224 16.9303 15.9285 16.8201 15.9115C16.71 15.8945 16.5348 15.8468 16.3094 15.6916C16.0373 15.5047 15.6565 15.0473 15.2834 14.6318C15.0969 14.424 14.9108 14.2245 14.6797 14.062C14.4485 13.8994 14.1026 13.7465 13.7292 13.864C13.3416 13.9857 13.0398 14.2882 12.8925 14.6132C12.7828 14.8551 12.7739 15.1078 12.7569 15.3591C12.7383 15.3605 12.7597 15.3591 12.7361 15.3591H11.7998C10.5277 15.3591 9.62441 15.4471 8.36983 14.0729C6.68228 12.2242 5.13614 9.14816 4.88405 8.64133L6.82655 8.64023C6.8607 8.65334 6.93377 8.68078 6.93812 8.68398L6.9403 8.68617C6.8693 8.63427 6.94358 8.70695 6.94358 8.70695C6.95044 8.72372 6.95811 8.74015 6.96655 8.75617C6.96655 8.75617 7.35146 9.50814 7.83827 10.352C8.31579 11.1792 8.66376 11.6959 8.99983 12.0374C9.16787 12.2082 9.33749 12.3451 9.56421 12.4224C9.79093 12.4997 10.0837 12.4714 10.2806 12.3634C10.6829 12.1431 10.737 11.8183 10.8023 11.5343C10.8678 11.2499 10.8938 10.9469 10.9062 10.6571C10.9303 10.0945 10.8963 9.60765 10.8942 9.57758C10.8943 9.56703 10.8969 9.364 10.8647 9.10398C10.8317 8.83773 10.7949 8.5122 10.5541 8.18414L10.553 8.18305C10.5513 8.18075 10.5492 8.18091 10.5475 8.17867C10.866 8.13299 11.1385 8.07676 11.7047 8.08242ZM16.6451 8.63148L16.6375 8.64898H16.6353C16.6377 8.64447 16.6451 8.63148 16.6451 8.63148Z"
                                          fill="white" fill-opacity="0.85"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_208_32">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <p>Лаборатория жизни</p>
                    </a>
                    <a href="<?php  the_field('tg', $front_id); ?>" class="footer__contact-group footer__contact-group_tg hover__tY">
                        <div class="footer__contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="2.5" stroke="white"
                                      stroke-opacity="0.85"/>
                                <path d="M17.2007 5.91598C17.0448 5.92282 16.8931 5.9662 16.7563 6.02098C16.6209 6.0754 15.8413 6.40814 14.6901 6.90036C13.5388 7.39257 12.0423 8.03353 10.5588 8.66911C7.59185 9.94026 4.6763 11.191 4.6763 11.191L4.69755 11.1829C4.69755 11.1829 4.52159 11.2417 4.34318 11.366C4.25398 11.4281 4.15801 11.5084 4.07943 11.6254C4.00085 11.7423 3.94341 11.9081 3.96505 12.0835C4.04109 12.6994 4.67943 12.8741 4.67943 12.8741L4.68193 12.8754L7.53068 13.8504C7.60331 14.0927 8.39472 16.7341 8.5688 17.2935C8.66495 17.6027 8.75494 17.7812 8.8488 17.9029C8.89578 17.9638 8.945 18.0109 8.99943 18.0454C9.02106 18.059 9.0438 18.0693 9.0663 18.0785H9.06755C9.07032 18.0797 9.07292 18.0798 9.07568 18.081L9.06818 18.0791C9.07341 18.0812 9.07857 18.0848 9.0838 18.0866C9.09396 18.0902 9.10018 18.09 9.11318 18.0929C9.43943 18.2068 9.70943 17.9954 9.70943 17.9954L9.72068 17.9866L11.4707 16.3635L14.3107 18.5779L14.3463 18.5941C14.8434 18.8148 15.293 18.6917 15.5419 18.4891C15.7909 18.2865 15.8888 18.0254 15.8888 18.0254L15.8994 17.9979L17.9863 7.12098C18.0397 6.87764 18.0473 6.6673 17.9969 6.47723C17.9466 6.28716 17.8242 6.12194 17.6707 6.03036C17.5171 5.93878 17.3565 5.90914 17.2007 5.91598ZM17.2176 6.56661C17.2809 6.56367 17.3278 6.57091 17.3426 6.57973C17.3573 6.58855 17.364 6.58739 17.3782 6.64098C17.3924 6.69457 17.4001 6.80745 17.3613 6.98411L17.3601 6.98786L15.2851 17.8016C15.2801 17.8125 15.2369 17.9125 15.1382 17.9929C15.0375 18.0748 14.9255 18.1388 14.6282 18.0141L11.5226 15.5922L11.4351 15.5235L11.4332 15.5254L10.5044 14.8285L15.7238 8.68786C15.7639 8.64079 15.7895 8.58312 15.7975 8.52181C15.8056 8.4605 15.7957 8.39818 15.769 8.34238C15.7424 8.28658 15.7001 8.2397 15.6474 8.2074C15.5947 8.17509 15.5337 8.15875 15.4719 8.16036C15.4115 8.16192 15.3528 8.18056 15.3026 8.21411L7.75005 13.2491L4.89693 12.2722C4.89693 12.2722 4.61361 12.1146 4.60005 12.0047C4.5993 11.9986 4.59596 12.0042 4.61068 11.9822C4.6254 11.9603 4.66241 11.9233 4.7088 11.891C4.8016 11.8263 4.90755 11.7872 4.90755 11.7872L4.91818 11.7835L4.9288 11.7791C4.9288 11.7791 7.8445 10.5283 10.8113 9.25723C12.2947 8.62169 13.791 7.98119 14.9419 7.48911C16.0926 6.99714 16.924 6.64303 16.9944 6.61473C17.0746 6.58264 17.1543 6.56954 17.2176 6.56661ZM13.7563 10.0141L9.79818 14.671L9.7963 14.6729C9.79013 14.6803 9.78429 14.688 9.7788 14.696C9.77253 14.7046 9.76669 14.7136 9.7613 14.7229C9.73907 14.7606 9.72481 14.8025 9.71943 14.846C9.71943 14.8468 9.71943 14.8476 9.71943 14.8485L9.2038 17.1672C9.19523 17.1422 9.18923 17.133 9.18005 17.1035V17.1029C9.01628 16.5766 8.26961 14.0855 8.1663 13.741L13.7563 10.0141ZM10.2451 15.4341L10.9563 15.9679L9.9113 16.9366L10.2451 15.4341Z"
                                      fill="white" fill-opacity="0.85"/>
                            </svg>
                        </div>
                        <p><?php  the_field('tg-label', $front_id); ?></p>
                    </a>
                </div>
            </div>
            <div class="footer__contacts-wrapper b-line footer__contacts-wrapper_mt">
                <a class="footer__contacts-politic hover__tY" href="">Политика конфиденциальности</a>
            </div>
        </div>

    </div>
</footer>
<!-- /Footer -->
</div>


<?php wp_footer(); ?>
</body>
</html>