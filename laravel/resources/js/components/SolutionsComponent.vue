<template>
    <div class="main-container" id="SolutionComponent">
        <div class="Solutions-component-page">
            <div class="solutions-for">{{solutionData.for}}</div>
            <div class="solutions-for-small">{{solutionData.for}}</div>
            <div class="solutions-small">
                <div class="solutions-small-title">
                    <span>{{solutionData.title}}</span>
                </div>
            </div>
            <div class="solutions">
                <div class="solutions-title">
                    <span>{{solutionData.title}}</span>
                    <div class="content-title-hr">
                        <div class="content-title-hr-inside"></div>
                    </div>
                </div>
                <div class="solutionsImg" id="solutionsImgCarouselSmall">
                    <div v-for="(photo, index) in photos" :class='{"item":"true","active":(index==0), "notActive": (index!=0)}' >
                        <img :src="photo">
                       <!-- <div v-if="index === 0" class="solutions-text-small">
                            {{solutionData.text}}
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="solutions-text">
                <span v-for="(textItem, index) in solutionData.text">
                    <p v-if="textItem.p" v-html="textItem.p"></p>
                    <ul v-if="textItem.ul">
                        <li :class='{"li":"true", "liLogo":(indexIn!=0)}' v-for="(li, indexIn) in textItem.ul" v-html="li"></li>
                    </ul>
                </span>
            </div>
        </div>
        <solution-slider v-bind:category="getPath().split('/')[0]"></solution-slider>
    </div>
</template>

<style lang="scss">
    @import "~bulma";
    .Solutions-component-page {
        max-width: $widescreen;
        margin: 0 auto;
        .solutions-text {
            display: block;
            width: 80%;
            max-width: 800px;
            font-family: Montserrat;
            font-size: 22px;
            font-weight: 500;
            color: black;
            line-height: 27px;
            margin: 25px auto 80px;
            p, li{
                display: block;
                letter-spacing: 0.3px;
                font-family: Montserrat;
                font-size: 16px;
                font-weight: 500;
                line-height: 21px;
                text-indent: 20px;
                margin: 20px auto;
            }
            span{
                margin-top: -20px;
            }
            .liLogo{
                position: relative;
                margin-left: 20px;
                &::before {
                    position: absolute;
                    content: "";
                    width: 14px;
                    height: 14px;
                    left: 0;
                    top : 3.5px;
                    background-image: url("/site_img/only-logo.png");
                    background-size: contain;
                    background-repeat: no-repeat;
                }
            }
        }

        .solutions-for-small {
            width: 100%;
            font-family: Roboto;
            font-size: 18px;
            font-weight: 500;
            color: #2F8CA6;
            line-height: 40px;
            text-align: center;
            background-color: #2F4052;
        }

        .solutions-for {
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

        .solutions-small {
            width: 90%;
            margin: 0 auto;

            &-title {
                font-family: Roboto;
                font-size: 18px;
                font-weight: 500;
                color: #2F8CA6;
                line-height: 36px;
                text-align: center;
            }
        }

        .solutions {
            width: 100%;
            max-width: 1900px;
            margin: 0 auto;
            &-text-small{
                max-width: 450px;
                width: 90%;
                font-family: Roboto;
                font-size: 10px;
                font-weight: 500;
                color: black;
                line-height: 14px;
                margin: 15px auto;
            }
            &-title {
                display: none;
                margin-bottom: 20px;

                span {
                    display: block;
                    width: auto;
                    font-family: Roboto;
                    font-size: 30px;
                    font-weight: 500;
                    color: #2F8CA6;
                    line-height: 36px;
                    text-align: center;
                    margin: 0  0  0 20px;
                }
            }

            .content-title-hr {
                margin: 0 20px;
                flex: 1 1 200px;
                height: auto;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                &-inside{
                    width: 100%;
                    height: 1px;
                    border-bottom: 2px solid black;
                }
            }
        }

        .solutionsImg {
            display: block;
            width: 90%;
            position: relative;
            margin: 0 auto;
            justify-content: space-between;
            .item {
                margin: 15px auto;
                width: 90%;
                img {
                    width: 100%;
                    max-width: 450px;
                    margin: 0 auto;
                    display: block;
                    height: 48vw;
                    max-height: 270px;
                }
            }

        }
    }
    @media (min-width: 768px) {
        .Solutions-component-page {
            .solutions-for, .solutions-text {
                display: block;
            }
            .solutions-title{
                display: flex;
            }
            .solutionsImg {
                width: 90%;
                display: flex;
                justify-content: space-between;
                .item {
                    width: 30%;
                    margin: 20px auto 60px;
                    img{
                        height: 16vw;
                        max-height: 220px;
                    }
                }
            }
            .solutions-small, .solutions-for-small, .solutions-text-small {
                display: none;
            }
        }
    }
    @media (max-width: 768px) {
        .Solutions-component-page {
            .solutions-text {
                font-size: 16px;
                line-height: 20px;
            }
            #solutionsImgCarouselSmall{
                position: relative;
                height: 48vw;
                max-height: 270px;
                .item{
                    width: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    img{
                        width: 90%;
                        margin: 0 auto;
                        max-width: 4500px;
                    }
                }
                .active{
                    opacity: 1;
                    transition:  opacity .6s linear;
                }
                .notActive{
                    opacity: 0;
                    transition:  opacity .6s linear;
                }
            }
        }
    }
</style>

<script>
    import $ from 'jquery'
    import SolutionSlider from './SolutionSlider';
    export default {
        name: "SolutionComponent",
        components: { SolutionSlider },
        data() {
            return {
                solutionData: "",
                photos: [],
                slideNumber: 0
            };
        },
        methods: {
            getPath(){
                let path = this.$route.params.componentName;
                return path;
            },
            fetchData () {
                //this.solutionData = null;
                // replace `getPost` with your data fetching util / API wrapper
                var that = this;
                this.axios
                    .get('/solutions/get/' + this.getPath())
                    .then(function(response) {
                        that.solutionData = response.data;
                        that.solutionData.text = JSON.parse(that.solutionData.text);
                        console.log(that.solutionData.text);
                        that.photos = that.solutionData.photos.split(" ");
                    });
                $("html, body").animate({ scrollTop: 0 }, "fast");
            },
            nextSlide(carousel){
                let n = $("#" + carousel + ' .active').index("#" + carousel + ' .item');
                if (n < $("#" + carousel + ' .item').length - 1 ) n = n + 1;
                else n = 0;
                $("#" + carousel + ' .active').removeClass("active").addClass("notActive");
                $("#" + carousel + ' .item').eq(n).removeClass("notActive").addClass("active");
            }
        },
        created () {
            this.fetchData();
            setInterval(this.nextSlide, 5000,  'solutionsImgCarouselSmall');
        },
        watch: {
            // call again the method if the route changes
            '$route': 'fetchData'
        },
        computed:{
        }
    }
</script>