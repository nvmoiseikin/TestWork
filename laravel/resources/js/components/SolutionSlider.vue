<template>
    <div class="solutionSlider-container">
        <div class="solutions-title">Другие решения</div>
        <div class="solutions-title-small">Другие решения</div>
        <div class="solutions-insight-small">
            <div class="solutions-insight-small-title">
                <span>{{categoryTitle}}</span>
            </div>
        </div>
        <div class="solutions-insight">
            <div class="solutions-insight-title">
                <span>{{categoryTitle}}</span>
                <div class="content-title-hr"></div>
                <div class="clear-fix"></div>
            </div>
            <div id="carouselSolutionsSmall" class="solution-carousel">
                <div class="carousel-inner">
                    <div v-for="(data, index) in solutionData" :class='{"carousel-item":"true","active":(index==0)}' v-on:click="anotherSolution(data.path)" :key="index">
                        <img :src="firstPhoto(data.photos)" class="small-img">
                        <div class="carousel-item-title"  v-html="data.title"></div>
                    </div>
                    <div v-for="(data, index2) in solutionData" class='carousel-item' v-on:click="anotherSolution(data.path)" :key="index2">
                        <img :src="firstPhoto(data.photos)" class="small-img">
                        <div class="carousel-item-title" v-html="data.title"></div>
                    </div>
                </div>
                <div @click="prevSlide('carouselSolutionsSmall')" class="arrow-left"><div class="icon-left"></div></div>
                <div @click="nextSlide('carouselSolutionsSmall')" class="arrow-right"><div class="icon-right"></div></div>
            </div>
        </div>
    </div>
</template>
<style lang="scss">
    @import "~bulma";
    @mixin slider-img-height-small {
        height: 13vw;
        max-height: 170px;
    }
    @mixin slider-img-height {
        height: 43.6vw;
        max-height: 250px;
    }
    .solutionSlider-container {
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

        .solutions-insight-small{
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

        .solutions-insight{
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
    .solution-carousel{
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
            &:hover{
                text-decoration: none;
                cursor: pointer;
                img{
                    opacity: 0.5;
                }
            }
            width: 80%;
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
                text-align: center;;
                margin: 20px auto;
                max-width: 450px;
            }
            img{
                width: 100%;
                max-width: 450px;
                margin: 0 auto;
                display: block;
                @include slider-img-height-small;
            }

        }
        .arrow-left, .arrow-right{
            position: absolute;
            top: 0;
            display: flex;
            width: 60px;
            flex-direction: column;
            justify-content: center;
            @include slider-img-height-small;
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
    @media (max-width: 769px) {
        .solutionSlider-container {
            .active.carousel-item-left {
            }

            .active.carousel-item-right {
            }
            .solution-carousel .carousel-item{
                margin: 0 10% 20px !important;
                img{
                    @include slider-img-height;
                }
            }
            .solution-carousel .arrow-left, .solution-carousel .arrow-right{
                @include slider-img-height;
            }
        }

    }
    @media (min-width: 770px) {
        .solutionSlider-container {
            .solutions-insight-title, .solutions-title {
                display: block;
            }

            .solutions-insight-small, .solutions-title-small {
                display: none;
            }
        }

        .solutionSlider-container {
            .carousel-item {
                width: 25% !important;
                margin: 0 4.166% 40px !important; //25:6

                &-text {
                    font-size: 18px;
                    line-height: 20px;
                    margin: 20px 0;
                }

                &-title {
                    font-size: 20px;
                    line-height: 22px;
                    margin: 20px 0;
                    text-align: center;
                }
            }
        }

        .solutionSlider-container{


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
    import $ from 'jquery';
    export default{
        props: ['category'],
        data() {
            return {
                prevslide: 0,
                timerId: 0,
                items: 3,
                prevMove: 0,
                slideDuration: 600,
                categoryTitle: this.category.replace("_", " "),
                solutionData: {
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
            anotherSolution(path){
                this.$router.push('/solutions/'+ path);
            }
        },
        beforeMount: function(){
            var that = this;
            this.axios
                .get('/solutionsHome/get')
                .then(function(response) {
                    if (that.category == "Для_дома"){
                        that.solutionData = response.data[0];
                    }
                    else {
                        that.solutionData = response.data[1];
                    }
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