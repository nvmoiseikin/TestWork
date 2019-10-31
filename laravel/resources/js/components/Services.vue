<template>
    <div class="main-container">
        <div class="main-container Services-page">
            <div class="services-title">Услуги</div>
            <div class="services-title-small">Услуги</div>
            <div v-for="(data, index) in serviceData" :class='"services-"+index'>
                <div :class='"services-" + index + "-title"'>
                    <span>{{data.title}}</span>
                    <div class="content-title-hr">
                        <div class="content-title-hr-inside"></div>
                    </div>
                </div>
                <div :class='"services-" + index + "-insight"'>
                    <img :src="data.photo" class="services-img">
                    <div :class='"services-" + index + "-small"'>
                        <div :class='"services-" + index + "-small-title"'>
                            <span>{{data.title}}</span>
                        </div>
                    </div>
                    <div class="services-text">
                        <span v-for="(textItem, index) in toJson(data.text)">
                            <p v-if="textItem.p" v-html="textItem.p"></p>
                            <ul v-if="textItem.ul">
                        <li :class='{"li":"true", "liLogo":(indexIn!=0)}' v-for="(li, indexIn) in textItem.ul" v-html="li"></li>
                    </ul>
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </div>
</template>

<style lang="scss">
    @import "~bulma";

    .Services-page {
        max-width: $widescreen;
        margin: 0 auto;

        .services-title-small {
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

        .services-title {
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

        .services-0, .services-1, .services-2, .services-3, .services-4 {
            width: 90%;
            margin: 20px auto 40px;
            &-title{
                display: none;
            }
            &-small-title {
                font-family: Roboto;
                font-size: 18px;
                font-weight: 500;
                color: #2F8CA6;
                line-height: 36px;
                text-align: left;
                height: 36px;
            }
        }



    }
    @media (min-width: 768px) {
        .Services-page {
            .services-title{
                display: block;
            }
            .services-0, .services-1, .services-2, .services-3, .services-4 {
                width: 100%;
                max-width: 1200px;
                margin: 0 auto 50px;
                .services-text{
                    width: 67%;
                    margin-left: 3%;
                    float: left;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    max-height: 240px;
                    height: min-content;
                    min-height: 240px;
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
                img {
                    width: 30%;
                    height: 20vw;
                    max-height: 240px;
                    float: left;
                }
                &-title {
                    display: flex;
                    margin-bottom: 20px;

                    span {
                        display: block;
                        width: auto;
                        max-width: 350px;
                        min-width: 240px;
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
                    margin: 0  0 0 20px;
                    flex: 1 1 200px;
                    height: auto;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-around;
                    &-inside{
                        width: 100%;
                        height: 1px;
                        border-bottom: 2px solid #2E2E2E;
                    }
                }
            }
            .services-0{
                &-insight {
                    .services-text {
                        max-height: 100000px;
                    }
                }
            }
            .services-title-small{
                display: none;
            }
            .services-0, .services-1, .services-2, .services-3, .services-4 {
                &-small{
                    display: none;
                }
            }
        }
    }
    @media (min-width: 768px) and (max-width: 1800px) {
        .Services-page {
            .services-0, .services-1, .services-2, .services-3, .services-4 {
                .services-text {
                    min-height: calc(44.8px + 10.8vw)
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
            },
            toJson(data) {
                return JSON.parse(data);
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
