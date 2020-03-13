<template>
    <div id="app" class="container w-100">
        <header class="header w-100">
            <div class="header__icon">
                <div class="header__iconLine w-100"></div>
                <div class="header__iconLine w-100"></div>
                <div class="header__iconLine w-100"></div>
            </div>
        </header>
        <main class="main w-100">
            <div class="main__title w-100">ЗИМБАБВЕ</div>
            <div class="main__toursWrap w-100 row">
                <article class="tour col-lg-6 col-md-12">
                    <div class="tour__imageWrap">
                        <img src="site_img/tourImage1.jpg" class="tour__image">
                        <div class="tour__price">от 118 112 Р</div>
                    </div>
                    <div class="tour__country">ИТАЛИЯ</div>
                    <div class="tour__name">Под небом Тосканы</div>
                    <div class="tour__places">Сансеполькро — (Перуджа) — Ассизи — Губбио — (Сиена) — Ла Верна — Ангиари — Монтерки — Ареццо — Кортона — (Пиенца) - (Монтепульчано)</div>
                    <div class="tour__desc">8 дней / 7 ночей Русский язык <br>27.04.19 - 04.05.19и еще 15 дат</div>
                    <div class="tour__alert">Авиаперелет включен!</div>
                </article>
                <article class="tour col-lg-6 col-md-12">
                    <div class="tour__imageWrap">
                        <img src="site_img/tourImage2.png" class="tour__image">
                        <div class="tour__price">140 715 Р</div>
                    </div>
                    <div class="tour__country">ИСЛАНДИЯ</div>
                    <div class="tour__name">Майские каникулы в Исландии</div>
                    <div class="tour__places">Рейкьявик — Тингвеллир — Гюдльфосс — Скафтафедль — Сельяландсфосс — Скоугафосс — Йёкюльсаурлоун — Голубая Лагуна — Снайфельсйёкутль — Arnarstapi — Рейкьявик</div>
                    <div class="tour__desc">8 дней / 7 ночей Русский язык <br>27.04.19 - 04.05.19</div>
                </article>
                <article class="tour col-lg-6 col-md-12">
                    <div class="tour__imageWrap">
                        <img src="site_img/tourImage3.png" class="tour__image">
                        <div class="tour__price">37 302 Р</div>
                    </div>
                    <div class="tour__country">ТУРЦИЯ</div>
                    <div class="tour__name">Открытие Турции</div>
                    <div class="tour__places">Стамбул — Анкара — Каппадокия — Конья — Памуккале — Эфес — Кушадасы — Пергам — Ассос — Троя — Стамбул</div>
                    <div class="tour__desc">8 дней / 7 ночей Русский язык <br>28.04.19 - 05.05.19 и еще 3 даты</div>
                </article>
                <article class="tour col-lg-6 col-md-12">
                    <div class="tour__imageWrap">
                        <img src="site_img/tourImage4.png" class="tour__image">
                        <div class="tour__price">145 000 Р</div>
                    </div>
                    <div class="tour__country">НОРВЕГИЯ, ШПИЦБЕРГЕН</div>
                    <div class="tour__name">От Свальбарда до Груманта</div>
                    <div class="tour__desc">8 дней / 7 ночей Русский язык <br>27.04.19 - 04.05.19и еще 15 дат</div>
                    <div class="tour__alert">Авиаперелет включен!</div>
                </article>
            </div>
        </main>
        <footer class="footer">
            <div class="footer__title">Заявка на подбор путеешествия</div>
            <div class="footer__formsWrap">
                <form class="form row w-100" method="POST" action="">
                    <article class="form__group col-lg-6 col-md-12">
                        <div class="form__formsLegend"><span>НЕМНОГО О ВАС</span></div>
                        <div class="form__label">ИМЯ <span class="alert-color">*</span></div>
                        <input type="text" class="form-control form__input" name="name">
                    </article>
                    <article class="form__group col-lg-6 col-md-12">
                        <div class="form__formsLegend hidden"><span>НЕМНОГО О ВАС</span></div>
                        <div class="form__label">ТЕЛЕФОН</div>
                        <input type="text" class="form-control form__input" name="phone" placeholder="+7___ ___ __ __">
                    </article>
                    <article class="form__group col-lg-6 col-md-12">
                        <div class="form__formsLegend"><span>О ПУТЕШЕСТВИИ</span></div>
                        <div class="form__label">КУДА И КОГДА ХОТИТЕ ПОЕХАТЬ? <span class="alert-color">*</span></div>
                        <input type="text" class="form-control form__input alert-border" name="desc" placeholder="Континент, страна или город">
                    </article>
                    <article class="form__group col-lg-6 col-md-12">
                        <div class="form__formsLegend hidden"><span>НЕМНОГО О ВАС</span></div>
                        <div class="form__label">КОГДА?</div>
                        <input type="text" class="form-control form__input" name="date" placeholder="Даты или временной интервал">
                    </article>
                    <article class="form__group col-lg-6 col-md-12">
                        <div class="form__formsLegend"><span>УДОБНЫЙ СПОСОБ СВЯЗИ</span></div>
                        <div class="checkbox">
                            <div class="checkbox__insight">
                                <div class="checkbox__label">VIBER</div>
                                <input  id="checkbox_0_0" type="checkbox" value="VIBER" class="checkbox__input" name="communication" hidden>
                                <label for="checkbox_0_0" class=""></label>
                            </div>
                            <div class="checkbox__insight">
                                <div class="checkbox__label">WHATSAPP</div>
                                <input  id="checkbox_0_1" type="checkbox" value="WHATSAPP" class="checkbox__input" name="communication" hidden>
                                <label for="checkbox_0_1" class=""></label>
                            </div>
                            <div class="checkbox__insight">
                                <div class="checkbox__label">ПОЧТА</div>
                                <input  id="checkbox_0_2" type="checkbox" value="ПОЧТА" class="checkbox__input" name="communication" hidden>
                                <label for="checkbox_0_2" class=""></label>
                            </div>
                            <div class="checkbox__insight">
                                <div class="checkbox__label">ТЕЛЕФОН</div>
                                <input  id="checkbox_0_3" type="checkbox" value="ТЕЛЕФОН" class="checkbox__input" name="communication" hidden>
                                <label for="checkbox_0_3" class=""></label>
                            </div>
                        </div>
                    </article>
                    <article class="form__group col-lg-6 col-md-12">
                        <div class="form__formsLegend hidden"><span>ОТКУДА УЗНАЛИ О НАС</span></div>
                        <div class="checkbox">
                            <div class="checkbox__insight">
                                <div class="checkbox__label">ИНТЕРНЕТ</div>
                                <input  id="checkbox_1_0" type="checkbox" value="ИНТЕРНЕТ" class="checkbox__input" name="adv" hidden>
                                <label for="checkbox_1_0" class=""></label>
                            </div>
                            <div class="checkbox__insight">
                                <div class="checkbox__label" id="label_1_1">РЕКОМЕНДОВАЛИ ДРУЗЬЯ</div>
                                <input  id="checkbox_1_1" type="checkbox" value="РЕКОМЕНДОВАЛИ ДРУЗЬЯ" class="checkbox__input" name="adv" hidden>
                                <label for="checkbox_1_1" class=""></label>
                            </div>
                            <div class="checkbox__insight">
                                <div class="checkbox__label">СОЦ. СЕТИ</div>
                                <input  id="checkbox_1_2" type="checkbox" value="СОЦ. СЕТИ" class="checkbox__input" name="adv" hidden>
                                <label for="checkbox_1_2" class=""></label>
                            </div>
                            <div class="checkbox__insight">
                                <div class="checkbox__label">УЖЕ ЕЗДИЛ</div>
                                <input  id="checkbox_1_3" type="checkbox" value="УЖЕ ЕЗДИЛ" class="checkbox__input" name="adv" hidden>
                                <label for="checkbox_1_3" class=""></label>
                            </div>
                        </div>
                    </article>
                    <article class="form__group form__group_left w-100">
                        <div class=" w-100">
                            <div class=" w-100">
                                <input  id="checkbox_2_0" type="checkbox" value="subscription" class="checkbox__input checkbox__input_small" name="subscription" hidden>
                                <label for="checkbox_2_0" class=""></label>
                                <div class="checkbox__label_small checkbox__label">Получать свежие предложения по электронной почте
                                    <div class="checkbox__desc">Каждую неделю мы делаем для вас обзор лучших экспедиций, статей и лайфхаков для путешественников. Если вдруг вам не понравится, вы сможете отписаться в любой момент.</div></div>
                                <div class="clear-fix"></div>
                            </div>

                        </div>
                    </article>
                    <article class="form__group form__group_left w-100">
                        <div class=" w-100">
                            <div class=" w-100">
                                <input  id="checkbox_3_0" type="checkbox" value="agreement" class="checkbox__input checkbox__input_small" name="agreement" hidden>
                                <label for="checkbox_3_0" class="alert-border"></label>
                                <div class="checkbox__label_small checkbox__label">
                                    <div>С обработкой своих персональных данных согласен.</div>
                                    <div class="checkbox__desc checkbox__desc_2">Отправляя заявку я подтверждаю согласие с условиями Пользовательского соглашения</div>
                                    <div class="checkbox__desc checkbox__desc_3"><span class="alert-color">*</span>Поля, которые надо обязательно заполнить</div>
                                </div>
                                <div class="clear-fix"></div>
                            </div>
                        </div>
                    </article>
                    <button type="submit" class="form__submit"><div style="float: left">ОТПРАВИТЬ</div><img style="float: right" src="site_img/arrow.png"></button>
                </form>
            </div>
        </footer>
    </div>
</template>

<style lang="scss">
    @import '../sass/variables';
    @import '../sass/headerAndMain';
    @import '../sass/tour';
    @import '../sass/footer';
    @import '../sass/checkbox';
    @import url('https://fonts.googleapis.com/css?family=Roboto:200,600,500');
    @import url('https://fonts.googleapis.com/css?family=Montserrat:600,500');
    .clear-fix{
        clear: both;
    }
    html{
        -webkit-tap-highlight-color: transparent;
    }
    body{
        overflow-x: hidden;
        width: 100%;
        color: black !important;
        .container{
            max-width: 1024px !important;
            padding: 0;
            margin: 0 auto;
            overflow: hidden;
        }
    }
    .hidden{
        visibility: hidden;
    }
    .alert-color{
        color: #CB0037;
    }
    .alert-border{
        border: 1px solid  #CB0037 !important;
    }
    @media(max-width: 991px){
        .hidden{
            display: none;
        }
    }
</style>

<script>
    import $ from 'jquery'
    export default{
        data() {
            return {}
        },
        mounted() {
        }
    }
</script>
