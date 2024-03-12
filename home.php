<?php
/*
Template Name: home
*/

?>
<?php
get_header(); ?>


<!-- 1 -->
<section class="hero">
    <div class="first-block">
        <div class="container">
            <h2 class="title">Подберем лучший автомобиль под ваш бюджет в течении 14 дней</h2>
            <p class="post-title">и <span>сторгуем до 5%</span> от его первоначальной цены</p>
    
            <div class="services d-flex flex-wrap justify-content-between align-items-start mt-5 mb-5 totalul_custom">
                <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check.webp" alt="">
                    <p class="mb-0 first_custom">Даем <span>4 вида гарантии</span> на подобранный автомобиль</p>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check.webp" alt="">
                    <p class="mb-0 second_custom"><span>Окупим вам стоимость</span> наших услуг за счет торга с продавцом</p>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check.webp" alt="">
                    <p class="mb-0 third_custom"><span>Работаем строго по договору</span> и берем предоплату 20%, остальные 80% после успешного подбора</p>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check.webp" alt="">
                    <p class="mb-0 fourth_custom"><span>Неограниченное количество выездов</span> и осмотров автомобиля, пока не найдем лучший вариант</p>
                </div>
            </div>
                <button class="big-btn" onclick="Marquiz.showModal('6519b74ec1686900256d639d')">Узнать стоимость автоподбора</button>
        </div>
    </div>
</section>
<section class="hero_mobile" style="background-image: url(<?php bloginfo("template_url"); ?>/assets/img/bg1mobile.webp)">
    <div class="container">
    <h2 class="title title__mobile">Наши преимущества</h2>

    <div class="services d-flex totalul_custom hero_mobile__custom">
                <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check.webp" alt="">
                    <p class="mb-0 first_custom">Даем <span>4 вида гарантии</span> на подобранный автомобиль</p>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check.webp" alt="">
                    <p class="mb-0 second_custom"><span>Окупим вам стоимость</span> наших услуг за счет торга с продавцом</p>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check.webp" alt="">
                    <p class="mb-0 third_custom"><span>Работаем строго по договору</span> и берем предоплату 20%, остальные 80% после успешного подбора</p>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check.webp" alt="">
                    <p class="mb-0 fourth_custom"><span>Неограниченное количество выездов</span> и осмотров автомобиля, пока не найдем лучший вариант</p>
                </div>
            </div>
    </div>
</section>

<div class="second-block">
    <div class="container text-center">
        <div class="title">Посмотрите наш видео-подкаст</div>
        <p>про наши секреты автоподбора, с помощью которых, <span> вы самостоятельно сможете подобрать лучший автомобиль </span>  на рынке Нижнего Новгорода.</p>
        <!-- <a href="">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/video-img.webp" alt="preview" width="900" height="auto">
        </a> -->
        <div class="second-block__video">
<!--             <img class="second-block__video__img" src="<?php the_field('preview_podcast'); ?>" alt="preview" width="900" height="506" loading="_lazy" data-preview> -->
<!--             <button class="btn-reset second-block__video__button" data-play>
                <img class="second-block__video__play" src="<?php bloginfo('template_url'); ?>/assets/img/play.webp" alt="play" width="75" height="75">
            </button> -->
            <div class="second-block__video__podcast">
                <?php the_field('video_podcast')?>
            </div>
        </div>
    </div>
</div>

<section class="shorts">
    <div class="container">
        <div class="shorts__inner">

        <?php
                    $args = array(
                        'post_type' => 'Shorts',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                    );
                    $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) :  ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post();
                         ?>

            <div class="shorts__inner__item">
                <div class="shorts__inner__item__mokap">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/mokap-phone2.webp" alt="mokap" class="shorts__inner__item__phone" height="380">
                    <?php the_content(); ?>
                </div>
                <span class="shorts__inner__item__title">
                    <?php the_title(); ?>
                </span>
            </div>

            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>  
  
        </div>

        <a href="https://www.youtube.com/@CarHunter52">
            <button class="big-btn danger">
                Перейти на наш YouTube-канал
            </button>
        </a>
    </div>
</section>

<?php include 'blocks/posts.php'; ?>

<?php include 'blocks/form.php';  ?>

<div class="subscribe-block py-5">
    <div class="container text-center">
        <div class="title text-center"><span>Подпишитесь</span> на наш блог <br> в Telegram и Вконтакте</div>
        <p class="mt-3">Там мы регулярно выкладываем фото и видео отчеты осмотров и диагностик <br> подбираемых автомобилей на рынке Нижнего Новгорода и области </p>
        <div class="w-fit mx-auto mt-5">
            <a href="https://t.me/carhunter52"><img src="<?php bloginfo('template_directory'); ?>/assets/img/tg-subscribe-block.webp" alt=""></a>
            <a href="https://vk.com/carhunternn"><img src="<?php bloginfo('template_directory'); ?>/assets/img/vk-subscribe-block.webp" alt=""></a>
        </div>
    </div>
</div>

<div class="job-results-block py-5">
    <div class="container">
        <div class="title text-center">Результат наших услуг автоподбора, <br> который вы получаете</div>
<div class="box">
    <div class="job-results-list first">
        <div class="item-mini">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/job-results/1.svg" alt="">
            <p class="item__title">Торг с продавцом</p>
            <p class="item__description">Стоимость наших услуг всегда окупается путем аргументированного и эффективного торга с продавцом. Часто получается снизить стоимость автомобиля до 5%</p>
        </div>
        <div class="item-mini">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/job-results/2.svg" alt="">
            <p class="item__title">Экономия своего <br> времени</p>
            <p class="item__description">Процесс подбора происходит без вашего присутствия. Ваше участие требуется только при заключении договора и оформлении автомобиля</p>
        </div>
        <div class="item-mini">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/job-results/3.svg" alt="">
            <p class="item__title">Оказываем поддержку <br> после подбора автомобиля</p>
            <p class="item__description">Стоимость наших услуг всегда окупается путем аргументированного и эффективного торга с продавцом. Часто получается снизить стоимость автомобиля до 5%</p>
        </div>
    </div>
    <div class="job-results-list second">
        <div class="item-full">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/job-results/4.svg" alt="">
            <p class="item__title">Детальный фото, видео и текстовый отчет <br> диагностики автомобиля</p>
            <p class="item__description">Проверка автомобиля по более чем 100 параметрам, которые включают в себя: Проверка юридической чистоты. Проверка собственника. Проверка документов автомобиля. Проверка кузова. Проверка салона, органов управления, помощников, ассистентов. Компьютерная диагностика. Тест-драйв, проверка подвески, рулевого управления, двигателя, коробки передач. Проверка на подъемнике.</p>
        </div>
        <div class="item-full">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/job-results/5.svg" alt="">
            <p class="item__title">Рекомендации по обслуживанию и вложению <br> денежных средств на момент проверки
                <br> автомобиля и на перспективу</p>
            <p class="item__description">За счет данных рекомендаций можно аргументировано
                поторговаться с собственником автомобиля.</p>
        </div>
    </div>
</div>
    </div>
</div>

<div class="diagnostic-scheme-block py-5" id="menudiag">
    <div class="container">
        <div class="title text-center">Каждый автомобиль диагностируется по <br> нашей уникальной методике, которая <br> включает в себя <span>более 100 параметров</span></div>

        <div class="scheme-list">
            <div class="scheme-item">
                <div class="number">01</div>
                <p>Проверка юридической чистоты на наличие или отсутствие залога, запрета на регистрационные действия.
                    Проверка ПТС, СТС, соответствие документам VIN номера, номера двигателя, номера шасси (рамы)
                    при наличии, проверка права продажи собственником;</p>
            </div>
            <div class="scheme-item">
                <div class="number">02</div>
                <p>Проверка кузова: выявление сколов, царапин, ДТП, крашенных элементов с частичным разбором салона (при согласии продавца).
                    Также проверяются следы механического воздействия на болты крепления кузовных элементов.
                    При возможности проверяется наличие подушек безопасности, дата производства оптики, остекления автомобиля;</p>
            </div>
            <div class="scheme-item">
                <div class="number">03</div>
                <p>Проверка салона, органов управления, помощников, ассистентов (к примеру: если есть подогрев сидений,
                    проекция на лобовое стекло - все проверяется);</p>
            </div>
            <div class="scheme-item">
                <div class="number">04</div>
                <p>Компьютерная диагностика: считывается информация со всех электронных блоков управления,
                    при технической возможности подтверждается или опровергается заявленный пробег автомобиля;</p>
            </div>
            <div class="scheme-item">
                <div class="number">05</div>
                <p>Тест-драйв, проверка подвески, рулевого управления, двигателя, коробки передач.
                    После тест-драйва, при необходимости, повторно выполняется компьютерная диагностика с целью
                    дополнительного контроля сброса ошибок продавцом;</p>
            </div>
            <div class="scheme-item">
                <div class="number">06</div>
                <p>Детальная проверка ходовой части автомобиля на подъемнике.</p>
            </div>
        </div>
    </div>
</div>

<div class="warranties-block py-5">
    <div class="container">
        <div class="title text-center">Предоставляем 4 вида гарантии <br> прописанные в договоре</div>
        <div class="d-flex justify-content-between align-items-start mt-5 flex-wrap">
            <div class="item">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check-big.webp" alt="">
                <p class="mb-0">
                    Гарантия лучшего подобранного <br> варианта автомобиля на рынке <br>
                    по соотношению его цены и состояния
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check-big.webp" alt="">
                <p class="mb-0 warranties-block__item__custom">
                    Гарантия до 90 дней на исправность основных узлов и агрегатов подобранного  автомобиля
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check-big.webp" alt="">
                <p class="mb-0">
                    Гарантия на достоверность <br> результатов диагностики <br> подобранного автомобиля
                </p>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/check-big.webp" alt="">
                <p class="mb-0">
                    Гарантия на юридическую <br> чистоту подобранного <br> автомобиля
                </p>
            </div>
        </div>
    </div>
</div>

<div class="prices-block py-5" id="menuprice">
    <div class="container">
        <div class="title text-center"><span>Стоимость</span> наших услуг</div>

        <div class="services-prices-list mt-5 mb-5">
            <div class="item">
                <div class="content">
                    <div class="title">
                        Подбор автомобиля <br>
                        с пробегом под ключ
                    </div>
                    <div class="desc">
                        В рамках данной услуги в зависимости от города и расположения автомобилей можно проверить в среднем 5 автомобилей.
                    </div>
                    <div class="price">
                        от 25 000 рублей
                    </div>
                </div>
                <button class="big-btn" onclick="Marquiz.showModal('6519b74ec1686900256d639d')">
                    Рассчитать точную стоимость
                </button>
            </div>
            <div class="item">
                <div class="content">
                    <div class="title">
                        Эксперт <br>
                        на день
                    </div>
                    <div class="desc">
                        В рамках данной услуги в зависимости от города и расположения автомобилей можно проверить в среднем 5 автомобилей.
                    </div>
                    <div class="price">
                        от 8 000 рублей
                    </div>
                </div>
                <button class="big-btn" onclick="Marquiz.showModal('6519b74ec1686900256d639d')">
                    Рассчитать точную стоимость
                </button>
            </div>
            <div class="item">
                <div class="content">
                    <div class="title">
                        Разовая диагностика <br> автомобиля
                    </div>
                    <div class="desc">
                        В рамках данной услуги в зависимости от города и расположения автомобилей можно проверить в среднем 5 автомобилей.
                    </div>
                    <div class="price">
                        2 500 рублей
                    </div>
                </div>
                <button class="big-btn" onclick="Marquiz.showModal('6519b74ec1686900256d639d')">
                    Рассчитать точную стоимость
                </button>
            </div>
        </div>

        <div class="text-uppercase text-center fs-4 fw-bold mt-5" id="menuservices">Дополнительные услуги</div>

        <div class="que-cards mt-4">
            <div class="que">
                <div class="text">Доставка автомобилей из Южной Кореи, ОАЭ, Китая, Казахстана (параллельный импорт).</div>
                <div class="display">
                    <div class="content">
                    Экспорт автомобилей из Южной Кореи, ОАЭ, Китая, Казахстана. Привезем для Вас отличный автомобиль и поможем сэкономить Ваши деньги.

                    </div>
                    <div class="price">
                    Стоимость уточняйте по телефону или в нашем офисе.
                    </div>
                </div>

                <div class="icons">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/plus.webp" class="plus" alt="">
                    <svg
                            class="minus"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="22px" height="3px">
                        <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)" font-size="60px" x="0px" y="20.0990000000002px"><tspan font-size="60px" font-family="Gilroy" fill="#DC282B">&#45;</tspan></text>
                    </svg>
                </div>
            </div>
            <div class="que">
                <div class="text">Помощь с регистрацией автомобиля в ГИБДД.</div>
                <div class="display">
                    <div class="content">
                    Полное сопровождение экспертом в МРЭО ГИБДД, постановка, регистрация, помощь в сборе документов.
                    </div>
                    <div class="price">
                    Стоимость - от 5000 рублей.
                    </div>
                </div>

                <div class="icons">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/plus.webp" class="plus" alt="">
                    <svg
                            class="minus"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="22px" height="3px">
                        <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)" font-size="60px" x="0px" y="20.0990000000002px"><tspan font-size="60px" font-family="Gilroy" fill="#DC282B">&#45;</tspan></text>
                    </svg>
                </div>
            </div>
            <div class="que">
                <div class="text">Сопровождение сделки купли-продажи</div>
                <div class="display">
                    <div class="content">
                    Помощь в приобретении автомобиля. 

1. Проверка подлинности ПТС, СТС, соответствие VIN номера. Проверка права продажи собственником. Проверка юридической чистоты на наличие или отсутствие залога, запрета на регистрационные действия, долгов у собственника;

2. составление договора купли-продажи автомобиля в трех экземплярах.
                    </div>
                    <div class="price">
                    Стоимость - от 3000 рублей.
                    </div>
                </div>

                <div class="icons">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/plus.webp" class="plus" alt="">
                    <svg
                            class="minus"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="22px" height="3px">
                        <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)" font-size="60px" x="0px" y="20.0990000000002px"><tspan font-size="60px" font-family="Gilroy" fill="#DC282B">&#45;</tspan></text>
                    </svg>
                </div>
            </div>
            <div class="que">
                <div class="text">Эндоскопия и замер компрессии ДВС</div>
                <div class="display">
                    <div class="content">
                    Диагностика двигателя эндоскопом со снятием свечей. Проверка компрессии цилиндров. Поворотный эндоскоп с НD-качеством. Видно каждую соринку и царапину в цилиндре. Эндоскопия позволяет наглядно оценить:
- наличие задиров на стенках цилиндров;
- состояние каналов впускного и выпускного коллектора, на наличие отложений и нагара;
- наличие ржавчины в цилиндрах;                                                                                                                                                                                                                                       Если приобретая автомобиль вы не хотите нарваться на расход масла и в ближайшее время сделать капитальный ремонт мотора, то непременно стоит сделать видеоэндоскопию.
                    </div>
                    <div class="price">
                        Цена: 2500 р.
                    </div>
                </div>

                <div class="icons">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/plus.webp" class="plus" alt="">
                    <svg
                            class="minus"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="22px" height="3px">
                        <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)" font-size="60px" x="0px" y="20.0990000000002px"><tspan font-size="60px" font-family="Gilroy" fill="#DC282B">&#45;</tspan></text>
                    </svg>
                </div>
            </div>
            <div class="que">
                <div class="text">Техническое обслуживание, подбор запчастей и ремонт автомобиля в собственном автосервисе "под ключ".</div>
                <div class="display">
                    <div class="content">
                    Наша ремонтная база находится в центре Нижнего Новгорода. Мы готовы помочь Вам как с плановым техническим обслуживанием Вашего автомобиля, так и с более сложными техническими задачами. Установка дополнительного оборудования также входит в список наших возможностей.
                    </div>
                    <div class="price">
                    Стоимость уточняйте по телефону или в нашем офисе.
                    </div>
                </div>

                <div class="icons">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/plus.webp" class="plus" alt="">
                    <svg
                            class="minus"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="22px" height="3px">
                        <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)" font-size="60px" x="0px" y="20.0990000000002px"><tspan font-size="60px" font-family="Gilroy" fill="#DC282B">&#45;</tspan></text>
                    </svg>
                </div>
            </div>
        </div>

        <div class="annotation">
            <div class="text">
                Вы моментально <br> <span>окупаете стоимость</span> <br> наших услуг за счет:
            </div>
            <div class="right-column">
                <div class="annotation__desc">
                    <b>1</b>
                    <p>Нашего аргументированно торга с продацом, в результате которого стоимость автомобиля снизиться до 5%</p>
                </div>
                <div class="annotation__desc">
                    <b>2</b>
                    <p>Покупки лучшего автомобиля на рынке, который не будет требовать излишних дополнительных вложений</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'blocks/form.php';  ?>

<div class="second-form-block custom__second__form__block" id="menureview" style="display:none;">
    <div class="title text-center text-white custom__review__title">Отзывы наших клиентов</div>
    <div class="container" style="position: relative">
        <button type="button" class="slick-prev"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/arrow-left.webp" alt=""></button>
        <div class="slick-slider">
            <div class="slick-slide">
                <div class="content">
                    <div class="image-block">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/reviews-slider/img1.webp" class="image" alt="">
                    </div>
                    <div class="review">
                        <div class="top">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/vk.webp" alt="">
                            Максим
                        </div>
                        <div class="text">
                            Если вы хотите приобрести поддержанный автомобиль – не думая обращайтесь в Car Hunter! Был у меня Nissan Primera 2006 г. выпуска, автомобиль меня радовал и я был доволен, но случилась беда и мой железный конь был бит на трассе М7
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-slide">
                <div class="content">
                    <div class="image-block">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/reviews-slider/img2.webp" class="image" alt="">
                    </div>
                    <div class="review">
                        <div class="top">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/vk.webp" alt="">
                            Александр
                        </div>
                        <div class="text">
                            Доволен результатом! Car Hunter экономит ваше время и деньги. Удобный вариант для людей, которые не понимают в покупке авто т.е. на что обратить внимание и как разговаривать с продавцом.
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-slide">
                <div class="content">
                    <div class="image-block">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/reviews-slider/img1.webp" class="image" alt="">
                    </div>
                    <div class="review">
                        <div class="top">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/vk.webp" alt="">
                            Максим
                        </div>
                        <div class="text">
                            Если вы хотите приобрести поддержанный автомобиль – не думая обращайтесь в Car Hunter! Был у меня Nissan Primera 2006 г. выпуска, автомобиль меня радовал и я был доволен, но случилась беда и мой железный конь был бит на трассе М7
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="slick-next"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/arrow-right.webp" alt=""></button>

        <div class="text-center">
            <a href="" class="text-uppercase text-white text-decoration-none border-bottom fw-bolder" style="font-family: Magistral, sans-serif;">смотреть все отзывы</a>
        </div>
    </div>
</div>
<div class="indicators-block py-5">
    <div class="container text-center">
        <div class="title"><span>7 показателей</span> качества наших <br>
            услуг автоподбора</div>
        <div class="indicators">
            <div class="indicators__item">
                <div class="number">1</div>
                <p><b>Ищем автомобиль</b> по всей России
                    и при необходимости организовываем перегон в Нижний Новгород</p>
            </div>
            <div class="indicators__item">
                <div class="number">2</div>
                <p><b>Оказываем полный комплекс</b> услуг по подбору, осмотру, экспорту, оформлению, страхованию, ремонту и техническому обслуживанию автомобилей</p>
            </div>
            <div class="indicators__item">
                <div class="number">3</div>
                <p><b>Сами торгуемся за ваш будущий автомобиль</b> и стараемся скинуть
                    ДО 5% от его первоначальной цены</p>
            </div>
            <div class="indicators__item">
                <div class="number">4</div>
                <p><b>Осуществляем подбор запчастей</b> со скидкой и выполняем ремонт автомобиля в собственном автосервисе с низкими ценами по городу</p>
            </div>
            <div class="indicators__item">
                <div class="number">5</div>
                <p><b>Берём всего лишь 20% аванса</b> (предоплаты) и остаток 80% только после успешного подбора авто</p>
            </div>
            <div class="indicators__item">
                <div class="number">6</div>
                <p><b>Работаем строго по договору</b>, в котором указываются гарантии, сроки, предпочтения и параметры подбираемого авто</p>
            </div>
        </div>
        <div class="info-block">
            <div class="content">
                <div class="number">7</div>
                <div class="text">
                    После заключения договора производим неограниченное количество выездов, до дех пор, пока не найдём для вас лучший вариант
                </div>
            </div>
        </div>
        <div class="title mt-5">Документы</div>
        <div class="docs">
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/doc_thumb.webp" alt="">
                <p>Свидетельство о государственной регистрации юридического лица</p>
            </div>
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/doc_thumb.webp" alt="">
                <p>Свидетельство о постановке на учет Российской организации в налоговом органе по месту ее нахождения</p>
            </div>
        </div>
        <div class="doc-tab">
            <div class="h-line"></div>
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/doc.webp" alt="">
            <div class="v-line"></div>
            <a href="https://avtopodbor.car-hunter.ru/wp-content/uploads/2023/12/Dogovor-TS.pdf" target="_blank">
                <button class="big-btn danger">Скачать договор</button>
            </a>
        </div>
    </div>
</div>

<?php include 'blocks/form.php'; ?>

<?php get_footer(); ?>
