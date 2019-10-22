<template>
    <div class="main-container">
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
                <div class="solutionsImg">
                    <div v-for="(photo, index) in photos" class="item active">
                        <img :src="photo">
                        <div v-if="index === 0" class="solutions-text-small">
                            {{solutionData.text}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="solutions-text">
                {{solutionData.text}}
            </div>
        </div>

    </div>
</template>

<style lang="scss">
    @import "~bulma";
    @import url('https://fonts.googleapis.com/css?family=Roboto:200,600,500');
    .Solutions-component-page {
        max-width: $widescreen;
        margin: 0 auto;
        .solutions-text {
            display: none;
            width: 80%;
            max-width: 800px;
            font-family: Roboto;
            font-size: 18px;
            font-weight: 500;
            color: black;
            line-height: 24px;
            margin: 25px auto 80px;
        }

        .solutions-for-small {
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
                height: 36px;
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

</style>

<script>
    import $ from 'jquery'
    export default{
        data() {
            return {
                solutionData: "",
                photos: [],
            };
        },
        methods: {

        },
        mounted: function(){
            var that = this;
            this.axios
                .get('/solutions/get/' + this.$route.params.componentName)
                .then(function(response) {
                    that.solutionData = response.data;
                    that.photos = that.solutionData.photos.split(" ");
                });

        },
        computed:{
        }
    }
</script>