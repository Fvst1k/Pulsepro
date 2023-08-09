<?php
/*
Template Name: home
*/
?>

<?php get_header() ?>

    <section class="first-on-page">
        <div class="block__content block__content_first-on-page">
            <div class="first-on-page__bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/background-wave.jpg" alt="">
            </div>


        </div>
    </section>
    <section class="sponsors">
        <div class="block__content block__content_sponsors">

        </div>
    </section>

    <section class="main__pulse-pro pulse-pro">
        <div class="block__content block__content_pulse-pro">
            <div class="pulse-pro__inner">
                <div class="pulse-pro__img">
                    <img src="" alt="device"/>
                </div>
                <div class="pulse-pro__content">
                    <h2 class="pulse-pro__title">Название аппарата? PulsePro</h2>
                    <p class="pulse-pro__subtitle">
                        Носимое устройство для повышения работоспособности и хорошего
                        самочувствия.Круглосуточный биометрический мониторинг сна,
                        восстановления, активности и стресса пациента в режиме реального
                        времени с точностью клинического уровня.
                    </p>
                    <div class="pulse-pro__description">
                        <ul class="pulse-pro__list">
					<span class="pulse-pro__list-title"
                    >Измерения клинического уровня:</span>
                            <li class="pulse-pro__list-item">
                                Частота сердечных сокращений в активном и спокойном состоянии
                            </li>
                            <li class="pulse-pro__list-item">
                                Вариабельность сердечного ритма (HRV)Интервалы между ударами
                            </li>
                            <li class="pulse-pro__list-item">Комплексный анализ сна</li>
                            <li class="pulse-pro__list-item">Показатели активности</li>
                            <li class="pulse-pro__list-item">Частота дыхания</li>
                        </ul>

                        <ul class="pulse-pro__list">
                            <span class="pulse-pro__list-title">Аппаратное обеспечение:</span>
                            <li class="pulse-pro__list-item">
                                Высокочувствительный оптический датчик на основе КМОП
                            </li>
                            <li class="pulse-pro__list-item">3-осевой акселерометр</li>
                            <li class="pulse-pro__list-item">
                                Время автономной работы до 9 дней
                            </li>
                        </ul>
                    </div>
                    <a class="pulse-pro__btn button" href="#"
                    >Записаться на демонстрацию
                        <div class="button__arrow-right"></div
                        >
                    </a>
                </div>
            </div>
            <div class="pulse-pro__"></div>
        </div>
    </section>

    <section class="main__about-us about-us">
        <div class="block__content block__content_about-us">
            <div class="about-us__item">
                <div class="about-us__item-content">
                    <h2 class="about-us__item-title">Исследования</h2>
                    <p class="about-us__item-text">
                        Предоставление исследователям и исследовательским организациям
                        комплексных инструментов для преобразования сбора и анализа данных
                        о состоянии здоровья в клинических исследованиях. PulsePro
                        обеспечивает полную поддержку,включая разработку индивидуальных
                        алгоритмов, оптимизированный доступ к высокоточным исходным или
                        полученным продольным данным, интегрированные опросы и многое
                        другое. Все это в исследовательской среде, отвечающей требованиям
                        HIPAA. В настоящее время устройства Biostrap используются в
                        исследованиях по всему миру.
                    </p>
                    <a class="about-us__item-btn button" href="#"
                    >Узнать больше
                        <div class="button__arrow-right"></div
                        >
                    </a>
                </div>
                <div class="about-us__item-img">
                    <img src="" alt="asian-girl"/>
                </div>
            </div>
            <div class="about-us__item about-us__item_reverse">
                <div class="about-us__item-content">
                    <h2 class="about-us__item-title">PulsePro</h2>
                    <p class="about-us__item-text">
                        Создание собственных решений в области цифрового здравоохранения
                        требует больших затрат и времени.
                    </p>
                    <p class="about-us__item-text">
                        Biostrap делает это простым и экономически эффективным, предлагая
                        различные варианты интеграции с помощью нашего API или Bluetooth
                        SDK, включая возможность "белой метки" аппаратных и программных
                        предложений.
                    </p>
                    <a class="about-us__item-btn button" href="#"
                    >Узнать больше
                        <div class="button__arrow-right"></div
                        >
                    </a>
                </div>
                <div class="about-us__item-img">
                    <img src="" alt="people"/>
                </div>
            </div>
            <div class="about-us__item">
                <div class="about-us__item-content about-us__item-content_vr">
                    <h2 class="about-us__item-title">PulsePro Labs</h2>
                    <p class="about-us__item-text">
                        Компания PulsePro Labs предоставляет научно обоснованный ресурс
                        компаниям, работающим в сфере здравоохранения и оздоровления,
                        которые хотят легко и недорого подтвердить достоверность заявлений
                        о продукции с помощью привлеченных пользователей. PulsePro
                        занимается всеми аспектами управления коммерческими исследованиями
                        по подтверждению соответствия, начиная с разработки протокола и
                        заканчивая публикацией.
                    </p>
                    <a class="about-us__item-btn button" href="#"
                    >Узнать больше
                        <div class="button__arrow-right"></div
                        >
                    </a>
                </div>
                <div class="about-us__item-img">
                    <img src="" alt="vr"/>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>