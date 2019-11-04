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
                    <router-link v-for="(data, index) in solutionData.home" :class='{"carousel-item":"true","active":(index==0)}' :to="createPath(data.path)" :key="index">
                        <img :src="firstPhoto(data.photos)">
                        <div class="carousel-item-title">{{data.title}}</div>
                        <div class="carousel-item-text"  v-html="data.small_text"></div>
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
                    <router-link v-for="(data, index) in solutionData.business" :class='{"carousel-item":"true","active":(index==0)}' :to="createPath(data.path)" :key="index">
                        <img :src="firstPhoto(data.photos)">
                        <div class="carousel-item-title">{{data.title}}</div>
                        <div class="carousel-item-text" v-html="data.small_text"></div>
                    </router-link>
                    <router-link v-for="(data, index2) in solutionData.business" class='carousel-item' :to="createPath(data.path)" :key="index2">
                        <img :src="firstPhoto(data.photos)">
                        <div class="carousel-item-title">{{data.title}}</div>
                        <div class="carousel-item-text" v-html="data.small_text"></div>
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
            position: relative;
            height: auto;
            overflow-x: hidden;
        }
        .carousel-item{
            position: relative;
                &:hover{
                    text-decoration: none;
                    img{
                        opacity: 0.5;
                    }
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
                height: 16vw;
                max-height: 220px;
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
            right: -20px;
            &:hover{
                cursor: pointer;
            }
            .icon-right{
                align-self: center;
                background-image: url('/site_img/next-icon-solutions.png');
                background-position: center center
            }
        }
        .arrow-left{
            left: -20px;
            &:hover{
                cursor: pointer;
            }
            .icon-left{
                align-self: center;
                background-image: url('/site_img/prev-icon-solutions.png');
                background-position: center center;
            }
        }
        .right{
            animation: right .6s linear;
        }
        .right-first{
            animation: right-first .6s linear;
            display: block;
            position: absolute;
            top: 0 !important;
            left: 0 !important;
        }
        @keyframes right {
            0% { transform: translate3d(0, 0, 0); }
            100% { transform: translate3d(112%, 0, 0);}
        }
        @keyframes right-first {
            0% {transform: translate3d(-112%, 0, 0);}
            100% { transform: translate3d(0, 0, 0); }
        }
        .left{
            animation: left .6s linear;
        }
        .left-last{
            animation: left-last .6s linear;
            display: block;
            position: absolute;
            top: 0 !important;
            right: 0 !important;
        }
        @keyframes left {
            0% { transform: translate3d(0, 0, 0); }
            100% { transform: translate3d(-112%, 0, 0);}
        }
        @keyframes left-last {
            0% {transform: translate3d(112%, 0, 0);}
            100% { transform: translate3d(0, 0, 0); }
        }
    }

    /*********  SLIDER ******/
    @media (max-width: 768px) {
        .Solutions-page {
            .active.carousel-item-left {
            }

            .active.carousel-item-right {
            }
            #carouselSolutionsHome .carousel-item,  #carouselSolutionsBusiness .carousel-item{
                margin: 0 5% 20px !important;
                img{
                    height: 48vw;
                    max-height: 270px;
                }
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
            .carousel-inner .active + .carousel-item + .carousel-item
            {
                display: block;
                visibility: visible;

            }
            .carousel-inner .active{

            }
        }
    }

</style>

<script>
    import $ from 'jquery'
    export default{
        name: 'Solutions',
        data() {
            return {
                prevslide: 0,
                timerId: 0,
                items: 3,
                prevMove: 0,
                slideDuration: 600,
                solutionData: {
                    home: '',
                    business: ''
                }
            };
        },
        methods: {
            nextSlide(carousel) {

                if ($('#' + carousel + ' .right').length > 0){
                    clearTimeout(this.timerId);
                    this.nextSlideEnd(carousel);
                }
                if ($('#' + carousel + ' .left').length > 0){
                    clearTimeout(this.timerId);
                    this.prevSlideEnd(carousel);
                }


                setTimeout(this.nextSlideStart, 0, carousel);

                this.timerId = setTimeout(this.nextSlideEnd, 580, carousel);


            },
            prevSlide(carousel) {

                if ($('#' + carousel + ' .right').length > 0){
                    clearTimeout(this.timerId);
                    this.nextSlideEnd(carousel);
                }
                if ($('#' + carousel + ' .left').length > 0){
                    clearTimeout(this.timerId);
                    this.prevSlideEnd(carousel);
                    console.log('end');
                }

                setTimeout(this.prevSlideStart, 0, carousel);
                this.timerId = setTimeout(this.prevSlideEnd, 580, carousel);
            },
            nextSlideStart(carousel) {

                var totalItems = $('#' + carousel + ' .carousel-item').length;
                var x = '#' + carousel + ' .carousel-item.active, #' + carousel + ' .carousel-item.active + .carousel-item, #' + carousel +
                    ' .carousel-item.active + .carousel-item + .carousel-item';
                $('#' + carousel + ' .right, #' + carousel + ' .left').removeClass('right').removeClass('left');
                $('#' + carousel + ' .right-first, #' + carousel + ' .left-last').removeClass('right-first').removeClass('left-last');


                $(x).addClass("right");
                $('#' + carousel + ' .carousel-item').eq(totalItems - 1).prependTo('#' + carousel + ' .carousel-inner');
                $('#' + carousel + ' .carousel-item').eq(0).addClass("right-first");
            },
            prevSlideStart(carousel) {
                var totalItems = $('#' + carousel + ' .carousel-item').length;
                var x = '#' + carousel + ' .carousel-item.active, #' + carousel + ' .carousel-item.active + .carousel-item, #' + carousel +
                    ' .carousel-item.active + .carousel-item + .carousel-item';
                if (this.isMobile)  this.items = 1;
                $('#' + carousel + ' .right, #' + carousel + ' .left').removeClass('right').removeClass('left');
                $('#' + carousel + ' .right-first, #' + carousel + ' .left-last').removeClass('right-first').removeClass('left-last');

                $(x).addClass("left");

                $('#' + carousel + ' .carousel-item').eq(this.items).addClass('left-last');
            },
            nextSlideEnd(carousel) {
                $('#' + carousel + ' .carousel-item').eq(0).addClass('active');
                $('#' + carousel + ' .carousel-item').eq(1).removeClass('active');
                $('#' + carousel + ' .right-first').removeClass("right-first");
                $('#' + carousel + ' .right').removeClass("right");
            },
            prevSlideEnd(carousel) {
                $('#' + carousel + ' .carousel-item').eq(0).appendTo('#' + carousel + ' .carousel-inner');
                $('#' + carousel + ' .active').removeClass('active');
                $('#' + carousel + ' .carousel-item').eq(0).addClass('active');
                $('#' + carousel + ' .left-last').removeClass("left-last");
                $('#' + carousel + ' .left').removeClass("left");
            },
            firstPhoto(data){
                return data.split(" ")[0];
            },
            createPath(path){
                return "/solutions/" + path;
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
        computed: {
            isMobile() {
                if (window.innerWidth <= 768) {
                    return true
                } return false
            }
        }

    }
</script>
