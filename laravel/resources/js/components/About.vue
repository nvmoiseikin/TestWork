<template>
    <div class="main-container">
        <div class="About-page">
            <div  class='about'>
                <div class="about-title-small">О нас</div>
                <div class="about-title-wrap">
                    <div class="about-hr about-hr-left"></div>
                    <div class="about-title">О нас</div>
                    <div class="about-hr about-hr-right"></div>
                    <div class="clear-fix"></div>
                </div>
                <div class="about-text">
                    <img src="/site_img/only-logo.png" class="about-img">
                    <span class="about-text-1">Более 10 лет мы дарим ценность IoT-технологий.</span>
                    <span class="about-text-2">Исключительное качество услуг созданное усилиями лучших программистов, проектировщиков и инженеров.</span>
                    <span class="about-text-3">Доверьте нам самые смелые проекты интеграции инженерных систем.</span>
                </div>
            </div>
        </div>

    </div>
</template>

<style lang="scss">
    @import "~bulma";
    $title-color: #2F8CA6;
    .About-page {
        max-width: $widescreen;
        margin: 0 auto;

        .about-title-small {
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

        .about {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto 50px;

            &-text {
                width: 80%;
                margin: 0 auto 20px;

                span {
                    display: block;
                    letter-spacing: 0.3px;
                    font-family: Roboto;
                    font-size: 24px;
                    font-weight: 500;
                    line-height: 27px;
                    margin: 40px auto;
                    color: grey;
                    text-align: center;
                }

                .about-text-1 {
                    font-size: 30px;
                    line-height: 33px;
                }

                img {
                    display: block;
                    margin: 40px auto 60px;
                    width: 50px;
                    height: auto;
                }
            }

            &-title-wrap{
                padding: 40px 0 30px;
                margin: 0 auto;
                width: 80%;
                .about-title{
                    width: 180px;
                    float: left;
                    font-family: Roboto;
                    font-size: 30px;
                    font-weight: 500;
                    color: $title-color;
                    line-height: 36px;
                    text-align: center;
                    height: 36px;
                }
                .about-hr{
                    width: calc(50% - 90px);
                    height: 18px;
                    border-bottom: 1px solid  $title-color;
                }
                .about-hr-right{
                    float: right;
                }
                .about-hr-left{
                    float: left;
                }
            }
        }
        .about-title-small {
            display: none;
        }
    }
        @media (max-width: 768px) {
            .About-page {
                max-width: $widescreen;
                margin: 0 auto;

                .about-title-small {
                    display: block;
                }

                .about {
                    width: 100%;
                    margin: 0 auto 50px;

                    .about-text {
                        width: 80%;
                        margin: 0 auto 20px;
                        span {
                            font-size: 18px;
                            line-height: 20px;
                            margin: 20px auto;
                        }
                        .about-text-1 {
                            font-size: 22px;
                            line-height: 24px;
                            text-align: center;
                        }
                        img {
                            display: block;
                            margin: 20px auto;
                            width: 25px;
                            height: auto;
                        }
                    }
                    &-title-wrap{
                        display: none;
                    }
                }
            }
        }
</style>

<script>

    import $ from 'jquery'
    export default {
        data() {
            return {
                serviceData: []
            };
        },
        methods: {
            nl2br(data){
                return data.replace(/(\r\n|\n\r|\r|\n)/g, "<br>");
            }
        },
        beforeMount: function () {
            var that = this;
            this.axios
                .get('/services/get')
                .then(function (response) {
                    that.serviceData = response.data;
                });

        }
    }
</script>
