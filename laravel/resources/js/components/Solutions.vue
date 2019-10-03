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
                    <router-link v-for="(data, index) in solutionData.home" :class='{"carousel-item":"true","active":(index==0)}' :to="data.path" :key="index">
                        <img :src="firstPhoto(data.photos)">
                        <div class="carousel-item-title">{{data.title}}</div>
                        <div class="carousel-item-text">{{data.small_text}}</div>
                    </router-link>
                </div>
                <div @click="prevSlide('carouselSolutionsHome')" class="arrow-left"><div class="icon-left"></div></div>
                <div @click="nextSlide('carouselSolutionsHome')" class="arrow-right"><div class="icon-right"></div></div>
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
                    <router-link v-for="(data, index) in solutionData.business" :class='{"carousel-item":"true","active":(index==0)}' :to="data.path" :key="index">
                        <img :src="firstPhoto(data.photos)">
                        <div class="carousel-item-title">{{data.title}}</div>
                        <div class="carousel-item-text">{{data.small_text}}</div>
                    </router-link>
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
    .Solutions-page {
        max-width: $widescreen;
        margin: 0 auto;

        .solutions-title-small {
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

        .solutions-title {
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

        .solutions-home-small, .solutions-business-small {
            width: 90%;
            margin: 0 auto;

            &-title {
                font-family: Roboto;
                font-size: 18px;
                font-weight: 500;
                color: #2F8CA6;
                line-height: 36px;
                text-align: center;
                height: 36px;
            }
        }

        .solutions-home, .solutions-business {
            width: 100%;
            max-width: 1900px;
            margin: 0 auto;

            &-title {
                display: none;
                margin-bottom: 20px;

                span {
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

            .content-title-hr {
                width: calc(100% - 220px);
                border-bottom: 2px solid black;
                height: 18px;
                float: left;
            }
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
            &:hover{
                text-decoration: none;
            }
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
            width: 60px;
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
        .Solutions-page {
            .solutions-home-title, .solutions-business-title, .solutions-title {
                display: block;
            }

            .solutions-home-small, .solutions-business-small, .solutions-title-small {
                display: none;
            }
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

        .Solutions-page{
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
                timerId: 0,
                solutionData: {
                    home: '',
                    business: ''
                }
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
            },
            firstPhoto(data){
                return data.split(" ")[0];
            }
        },
        beforeMount: function(){
            var that = this;
            this.axios
                .get('/solutionsHome/get')
                .then(function(response) {
                    that.solutionData.home = response.data[0];
                    that.solutionData.business = response.data[1];
                });

        },
        computed:{

        }

    }
</script>
