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
                    <div class="services-text"><span v-html="nl2br(data.text)"></span> </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </div>
</template>

<style lang="scss">
    @import "~bulma";
    @import url('https://fonts.googleapis.com/css?family=Roboto:200,600,500');
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
                    height: 20vw;
                    max-height: 240px;
                    span{
                        display: block;
                        letter-spacing: 0.3px;
                        font-family: Roboto;
                        font-size: 16px;
                        font-weight: 500;
                        line-height: 19px;
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
                    margin: 0 20px;
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
