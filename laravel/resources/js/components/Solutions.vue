<template>
    <div class="main-container Solutions-page">
        <div class="solutions-title">Решения</div>
        <div class="solutions-title-small">Решения</div>
        <div class="solutions-home-small">
            <div class="solutions-home-small-title">
                <span>Для дома</span>
            </div>
        </div>
        <div class="solutions-home">
            <div class="solutions-home-title">
                <span>Для дома</span>
                <div class="content-title-hr"></div>
                <div class="clear-fix"></div>
            </div>
            <div id="carouselSolutionsHome">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Управление1</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей. В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Домашние кинотеатры2</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Wi-fi3</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Домашние кинотеатры4</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Управление5</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Wi-fi6</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Домашние кинотеатры7</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                </div>
                <div @click="prevSlide('carouselSolutionsHome')" class="arrow-left" id="prev"><div class="icon-left"></div></div>
                <div @click="nextSlide('carouselSolutionsHome')" class="arrow-right" id="next"><div class="icon-right"></div></div>
            </div>
        </div>
        <div class="solutions-business-small">
            <div class="solutions-business-small-title">
                <span>Для бизнеса</span>
            </div>
        </div>
        <div class="solutions-business">
            <div class="solutions-business-title">
                <span>Для бизнеса</span>
                <div class="content-title-hr"></div>
                <div class="clear-fix"></div>
            </div>
            <div id="carouselSolutionsBusiness">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Управление1</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Системы оповещения2</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Видеонаблюдения3</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Системы оповещения4</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Управление5</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Системы оповещения6</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                    <div class="carousel-item">
                        <img src="/site_img/smart-home.png">
                        <div class="carousel-item-title">Видеонаблюдения7</div>
                        <div class="carousel-item-text">В наших инсталляциях мы применяем только проверенные решения от ведущих мировых производителей</div>
                    </div>
                </div>
                <div @click="prevSlide('carouselSolutionsBusiness')" class="arrow-left" id="prev"><div class="icon-left"></div></div>
                <div @click="nextSlide('carouselSolutionsBusiness')" class="arrow-right" id="next"><div class="icon-right"></div></div>
            </div>
        </div>

    </div>
</template>

<style lang="scss">
    @import "~bulma";
    @import url('https://fonts.googleapis.com/css?family=Roboto:200,600,500');
    .solutions-title-small{
        width: 100%;
        font-family: Roboto;
        font-size: 18px;
        font-weight: 500;
        color: #2F8CA6;
        line-height: 40px;
        text-align: center;
        height: 40px;
        background-color: #2F4052;
    }
    .solutions-title{
        width: 100%;
        font-family: Roboto;
        font-size: 30px;
        font-weight: 500;
        color: #2F8CA6;
        line-height: 36px;
        text-align: center;
        height: 36px;
        margin: 25px 0;
        display: none;
    }
    .solutions-home-small, .solutions-business-small{
        width: 90%;
        margin: 0 auto;
        &-title{
            font-family: Roboto;
            font-size: 18px;
            font-weight: 500;
            color: #2F8CA6;
            line-height: 36px;
            text-align: center;
            height: 36px;
        }
    }
    .solutions-home, .solutions-business{
        width: 100%;
        max-width: $widescreen;
        margin: 0 auto;
        &-title{
            display: none;
            margin-bottom: 20px;
            span{
                display: block;
                width: 200px;
                font-family: Roboto;
                font-size: 30px;
                font-weight: 500;
                color: #2F8CA6;
                line-height: 36px;
                text-align: center;
                height: 36px;
                float: left;
            }
        }
        .content-title-hr{
            width: calc(100% - 200px);
            border-bottom: 2px solid black;
            height: 18px;
            float: left;
        }
    }
    #carouselSolutionsHome, #carouselSolutionsBusiness{
        display: block;
        width: 90%;
        padding: 0 20px;
        position: relative;
        margin: 0 auto;
        .carousel-inner{
            height: auto;
            overflow-x: hidden;;
        }
        .carousel-item{
            width: 90%;
            color: black;
            text-align: center;
            height: auto;
            &-text{
                font-family: Roboto;
                font-size: 12px;
                font-weight: 500;
                color: black;
                line-height: 24px;
                text-align: left;
                margin: 20px auto;
                max-width: 450px;
            }
            &-title{
                font-family: Roboto;
                font-size: 14px;
                font-weight: 500;
                color: #2F8CA6;
                line-height: 16px;
                text-align: left;
                margin: 20px auto;
                max-width: 450px;
            }
            img{
                width: 100%;
                max-width: 450px;
                margin: 0 auto;
                display: block;
                height: auto;
            }
        }
        .arrow-left, .arrow-right{
            position: absolute;
            top: 0;
            display: flex;
            width: 25%;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            .icon-left, .icon-right{
                display: inline-block;
                width: 60px;
                height: 60px;
                background-size: 25%;
                background-repeat: no-repeat;
                border-radius: 5px;
            }

        }
        .arrow-right{
            right: 0;
            .icon-right{
                align-self: flex-end;
                background-image: url('/site_img/next-icon-solutions.png');
                background-position: right center
            }
        }
        .arrow-left{
            left: 0;
            .icon-left{
                align-self: flex-start;
                background-image: url('/site_img/prev-icon-solutions.png');
                background-position: left center;
            }
        }

    }

    /*********  SLIDER ******/
    @media (max-width: 768px) {
        .Solutions-page {
            .active.carousel-item-left {
                transform: translate3d(0, 0, 0);
            }

            .active.carousel-item-right {
                transform: translate3d(0, 0, 0);
            }
            .carousel-item {
                margin: 0 5% 20px !important;
            }
        }

    }
    @media (min-width: 768px) {
        .solutions-home-title, .solutions-business-title, .solutions-title{
            display: block;
        }

        .solutions-home-small, .solutions-business-small, .solutions-title-small{
            display: none;
        }

        .Solutions-page {
            .carousel-item {
                width: 30% !important;
                margin: 0 1.66% 40px !important;

                &-text {
                    font-size: 18px;
                    line-height: 20px;
                    margin: 20px 0;
                }

                &-title {
                    font-size: 20px;
                    line-height: 22px;
                    margin: 20px 0;
                }
            }
        }

        .Solutions-page {
            /* show 3 items */
            .carousel-inner .active,
            .carousel-inner .active + .carousel-item,
            .carousel-inner .active + .carousel-item + .carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-next + .carousel-item,
            .carousel-inner .carousel-item-next + .carousel-item + .carousel-item,
            .carousel-inner .carousel-item-next + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
            }

            .carousel-inner .carousel-item-prev,
            .carousel-inner .carousel-item-prev + .carousel-item,
            .carousel-inner .carousel-item-prev + .carousel-item + .carousel-item,
            .carousel-inner .carousel-item-prev + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
            }

            /* left or forward direction */
            .active.carousel-item-left,
            .active.carousel-item-left + .carousel-item,
            .active.carousel-item-left + .carousel-item + .carousel-item,
            .active.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
            .active.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(0, 0, 0);
                visibility: visible;
                transition: transform 0.6s ease-in-out;
            }

            /* farthest right hidden item must be abso position for animations */
            .carousel-inner .carousel-item-right.carousel-item-prev {
                position: absolute;
                top: 0;
                left: 0;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right,
            .active.carousel-item-right + .carousel-item,
            .active.carousel-item-right + .carousel-item + .carousel-item,
            .active.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
            .active.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(0, 0, 0);
                visibility: visible;
                transition: transform 0.6s ease-in-out;
            }

        }
    }

</style>

<script>
    import $ from 'jquery'
    export default{
        data() {
            return {
                prevslide: 0,
                timerId: 0
            };
        },
        methods: {
            nextSlide(carousel) {

                var totalItems = $('#' + carousel + ' .carousel-item').length;
                console.log(totalItems);
                $('#' + carousel + ' .carousel-item-right, #' + carousel + ' .carousel-item-left').removeClass('carousel-item-right').removeClass('carousel-item-left');
                $('#' + carousel + ' .carousel-item-prev, #' + carousel + ' .carousel-item-next').removeClass('carousel-item-prev').removeClass('carousel-item-next');

                $('#' + carousel + ' .active').removeClass('active');
                $('#' + carousel + ' .carousel-item').eq(totalItems-1).addClass('active').addClass('carousel-item-prev').prependTo('#' + carousel + ' .carousel-inner');

                setTimeout(function(){
                    $('#' + carousel + ' .active').addClass('carousel-item-right').removeClass('carousel-item-prev');

                } , 50);
            },
            prevSlide(carousel) {

                var totalItems = $('#' + carousel + ' .carousel-item').length;
                $('#' + carousel + ' .carousel-item-right, #' + carousel + ' .carousel-item-left').removeClass('carousel-item-right').removeClass('carousel-item-left');
                $('#' + carousel + ' .carousel-item-prev, #' + carousel + ' .carousel-item-next').removeClass('carousel-item-prev').removeClass('carousel-item-next');

                $('#' + carousel + ' .active').removeClass('active');
                $('#' + carousel + ' .carousel-item').eq(0).appendTo('#' + carousel + ' .carousel-inner');
                $('#' + carousel + ' .carousel-item').eq(0).addClass('active').addClass('carousel-item-next');

                setTimeout(function(){
                    $('#' + carousel + ' .active').addClass('carousel-item-left').removeClass('carousel-item-next');

                } , 50);
            }
        },
        mounted() {
            if(slide - this.prevslide > 0 || slide === 0){}
        },
        computed:{
        }
    }
</script>
