<div>
    <div id="modal-call" uk-modal="stack: true">
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Заявка на вступление</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="button">Save</button>
            </p>
        </div>
    </div>
    <div class="uk-container main__container__body">
        <div class="uk-position-relative uk-visible-toggle main__container__slider" tabindex="-1" uk-slideshow="animation: push; min-height: 300; max-height: 500; autoplay:true; autoplay-interval:5000; pause-on-hover:false;">
            <ul class="uk-slideshow-items" >
                <li>
                    <img class="brightness_image_light" src="popcorn/slider/slider_1.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-small uk-text-center uk-light">
                        <h2 class="uk-margin-remove" uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Отзывчивая команда</h2>
                        <p class="uk-margin-remove" uk-slideshow-parallax="y:   50,0,0; opacity: 1,1,0">Готовая помочь вам реализовать любую идею</p>
                    </div>
                </li>
                <li>
                    <img class="brightness_image_light" src="popcorn/slider/slider_2.jpg" alt="" uk-cover>
                    <div class="uk-position-bottom uk-position-medium uk-text-center uk-light">
                        <h3 class="uk-margin-remove" uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Поддержка</h3>
                        <p class="uk-margin-remove" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Руководства колледжа в реализации проектов</p>
                    </div>
                </li>
                <li>
                    <img class="brightness_image_hard" src="popcorn/slider/slider_3.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-medium uk-text-center uk-light">
                        <h3 class="uk-margin-remove" uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Организация</h3>
                        <p class="uk-margin-remove" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Предлагай идеи и проявляй инициативу, здесь тебя услышат</p>
                    </div>
                </li>
                <li>
                    <img class="brightness_image_hard" src="popcorn/slider/slider_4.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-position-medium uk-text-center uk-light">
                        <h3 class="uk-margin-remove" uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Дрежественная обстановка</h3>
                        <p class="uk-margin-remove" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Мы объединяем студентов из разных сфер, здесь ты найдешь своих единомышленников</p>
                    </div>
                </li>
            </ul>
            <div class="uk-light">
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>
            <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
        </div>

        <div class="container_who_am_i">
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                <div class="uk-flex-last@s uk-card-media-right uk-cover-container" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <img src="popcorn/why_im.jpg" alt="" uk-cover>
                    <canvas width="600" height="400"></canvas>
                </div>
                <div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Чем занимается Студенческое научное общество?</h3>
                        <p>Мы являемся организаторами мероприятий для студентов в научно-познавательной деятельности. Наши мероприятия направлены на развитие эрудиции, логики, командной работы и других качеств.</p>
                    </div>
                </div>
            </div>

            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <div class="uk-card-media-left uk-cover-container">
                    <img  src="popcorn/who_am_i_2.jpg" alt="" uk-cover>
                    <canvas width="600" height="400"></canvas>
                </div>
                <div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Как давно существует организация?</h3>
                        <p>Студенческое научное общество основано в марте 2022 года. С этого времени Научное общество приняло участие в более чем 15 различных мероприятий в качестве как организаторов, так и участников.</p>
                    </div>
                </div>
            </div>

            <h3 class="uk-text-center">Руководители Научного общества</h3>

            <div class="uk-child-width-1-3@s" uk-grid uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500;">
                <div uk-scrollspy-class="uk-animation-slide-top ">
                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                        <img class="uk-border-circle uk-align-center" width="200" height="200" src="popcorn/avatars/nastya_avatar.jpg" alt="Avatar">
                        <div class="uk-card-header uk-text-center">
                            <h3 class="uk-card-title">
                                Анастасия Андреева
                            </h3>
                            Председатель
                        </div>
                        <div class="uk-flex uk-flex-center" style="padding-top: 10px;">
                            <a href="https://vk.com/anastasya_0505"><img class="uk-margin-right" src="popcorn/vk.svg" style="background: #0173d9; border-radius: 25px;"/></a>
                            <img src="popcorn/telegram.svg" style="background: #0173d9; border-radius: 25px;"/>
                        </div>
                    </div>
                </div>
                <div uk-scrollspy-class="uk-animation-slide-top">
                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                        <img class="uk-border-circle uk-align-center" width="200" height="200" src="popcorn/avatars/olga_avatar.jpg" alt="Avatar">
                        <div class="uk-card-header uk-text-center">
                            <h3 class="uk-card-title">
                                Ольга Глущик
                            </h3>
                            Заместитель председателя
                        </div>
                        <div class="uk-flex uk-flex-center" style="padding-top: 10px;">
                            <a href="https://vk.com/xlebnaya_koshka"><img class="uk-margin-right" src="popcorn/vk.svg" style="background: #0173d9; border-radius: 25px;"/></a>
                            <img src="popcorn/telegram.svg" style="background: #0173d9; border-radius: 25px;"/>
                        </div>
                    </div>
                </div>
                <div uk-scrollspy-class="uk-animation-slide-top">
                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                        <img class="uk-border-circle uk-align-center" width="200" height="200" src="popcorn/avatars/kira_avatar.jpg" alt="Avatar">
                        <div class="uk-card-header uk-text-center">
                            <h3 class="uk-card-title">
                                Кира Родионов
                            </h3>
                            Секретарь
                        </div>
                        <div class="uk-flex uk-flex-center" style="padding-top: 10px;">
                            <a href="https://vk.com/kiryaaar"><img class="uk-margin-right" src="popcorn/vk.svg" style="background: #0173d9; border-radius: 25px;"/></a>
                            <img src="popcorn/telegram.svg" style="background: #0173d9; border-radius: 25px;"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <div class="uk-card-media-left uk-cover-container">
                    <img  src="popcorn/who_am_i_2.jpg" alt="" uk-cover>
                    <canvas width="600" height="400"></canvas>
                </div>
                <div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Как стать частью команды?</h3>
                        <p>Всё очень просто! Нажмите на кнопку Вступить в сообщество и заполните форму, далее с вами свяжется админстраторы сообщества.</p>
                    </div>
                    <div class="uk-card-footer">
                        <button class="uk-button uk-button-default button-property uk-align-center" uk-toggle="target: #modal-call">Вступить в сообщество</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
