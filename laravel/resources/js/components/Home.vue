<template>
  <div class="main-container">
      <div>
          <b-carousel
                  id="carouselHome"
                  :interval="6000"
                  controls
                  indicators
                  :speed="800"
                  ref="homeSlider"
          >
              <!--<popup-video></popup-video> -->
              <!-- Text slides with image -->
              <b-carousel-slide v-for="(data, index) in sliderData"  :key="index">
                  <div :class='{"home-slide w-100":"true","home-slide-height":(index!=0)}'>
                      <div class="home-slide-title">
                         {{data.title}}
                      </div>

                  </div>

              </b-carousel-slide>

          </b-carousel>
      </div>
      <div class="home-we-make">
          <div class="home-title-wrap">
              <div class="home-hr home-hr-left"></div>
              <div class="home-title">Что мы делаем</div>
              <div class="home-hr home-hr-right"></div>
              <div class="clear-fix"></div>
          </div>
          <div class="home-manager row">
              <section  class="col-4">
                  <img class="home-manager-img" src="/site_img/manager-1.png">
                  <div class="home-manager-title">Управление</div>
              </section>
              <section  class="col-4">
                  <img class="home-manager-img" src="/site_img/manager-2.png">
                  <div class="home-manager-title">Звук</div>
              </section>
              <section  class="col-4">
                  <img class="home-manager-img" src="/site_img/manager-3.png">
                  <div class="home-manager-title">Свет</div>
              </section>
              <section  class="col-4">
                  <img class="home-manager-img" src="/site_img/manager-4.png">
                  <div class="home-manager-title">Wi-fi</div>
              </section>
              <section  class="col-4">
                  <img class="home-manager-img" src="/site_img/manager-5.png">
                  <div class="home-manager-title">Безопасность</div>
              </section>
              <section  class="col-4">
                  <img class="home-manager-img" src="/site_img/manager-6.png">
                  <div class="home-manager-title">Климат</div>
              </section>
          </div>
      </div>
      <div class="home-services-wrap">
          <div class="home-title-wrap">
              <div class="home-hr home-hr-left"></div>
              <div class="home-title">Услуги</div>
              <div class="home-hr home-hr-right"></div>
              <div class="clear-fix"></div>
          </div>
          <div class="home-services row">
              <section  class="col-6">
                  <div class="home-services-insight">
                      <img class="home-service-img" src="/site_img/service-1.png">
                      <div class="home-service-text-wrap">
                          <div class="home-service-title">ПРОЕКТИРОВАНИЕ</div>
                          <div class="home-service-text">Подготовим всю необходимую документацию по интеграции инженерных систем. Спроектируем программное обеспечение для реализации уникальных проектов.</div>
                      </div>
                      <div class="clear-fix"></div>
                  </div>
              </section>
              <section  class="col-6">
                  <div class="home-services-insight">
                      <img class="home-service-img" src="/site_img/service-2.png">
                      <div class="home-service-text-wrap">
                          <div class="home-service-title">МОНТАЖ</div>
                          <div class="home-service-text">Смонтируем компоненты  систем видео отображения, аудио трансляции, видео наблюдения, домашних кинотеатров, лвс и wifi, систем безопасности и контроля доступа.</div>
                      </div>
                      <div class="clear-fix"></div>
                  </div>
              </section>
              <section  class="col-6">
                  <div class="home-services-insight">
                      <img class="home-service-img" src="/site_img/service-3.png">
                      <div class="home-service-text-wrap">
                          <div class="home-service-title">НАСТРОЙКА</div>
                          <div class="home-service-text">Настроим любое инженерное оборудование согласно требованиям производителя и поставленной задачи. Поможем в программировании систем управления  и автоматизации.</div>
                      </div>
                      <div class="clear-fix"></div>
                  </div>
              </section>
              <section  class="col-6">
                  <div class="home-services-insight">
                      <img class="home-service-img  home-service-img-margin" src="/site_img/service-4.png">
                      <div class="home-service-text-wrap">
                          <div class="home-service-title">АУДИТ</div>
                          <div class="home-service-text">Проконсультируем по принятым решениям. Поможем определиться с оборудованием. Расскажем о тенденциях на рынке.</div>
                      </div>
                      <div class="clear-fix"></div>
                  </div>
              </section>
          </div>
      </div>
      <div class="home-hr-small"></div>
      <div class="home-partners-wrap">
          <div class="home-title-wrap">
              <div class="home-hr home-hr-left"></div>
              <div class="home-title">Наши партнеры</div>
              <div class="home-hr home-hr-right"></div>
              <div class="clear-fix"></div>
          </div>
            <img src="/site_img/home-partners.png" class="home-partners">
          <b-carousel
                  id="carouselHomePartners"
                  :interval="4000"
                  class=""
                  controls
          >
              <!-- Text slides with image -->
              <b-carousel-slide>
                  <div class="w-100 home-slide">
                      <img class="home-slide-img" src="/site_img/home-partners-1.png">
                  </div>
              </b-carousel-slide>
              <b-carousel-slide>
                  <div class="w-100 home-slide">
                      <img class="home-slide-img" src="/site_img/home-partners-2.png">
                  </div>
              </b-carousel-slide>
              <b-carousel-slide>
                  <div class="w-100 home-slide">
                      <img class="home-slide-img" src="/site_img/home-partners-3.png">
                  </div>
              </b-carousel-slide>
              <b-carousel-slide>
                  <div class="w-100 home-slide">
                      <img class="home-slide-img" src="/site_img/home-partners-4.png">
                  </div>
              </b-carousel-slide>
              <b-carousel-slide>
                  <div class="w-100 home-slide">
                      <img class="home-slide-img" src="/site_img/home-partners-5.png">
                  </div>
              </b-carousel-slide>
              <b-carousel-slide>
                  <div class="w-100 home-slide">
                      <img class="home-slide-img" src="/site_img/home-partners-6.png">
                  </div>
              </b-carousel-slide>
              <b-carousel-slide>
                  <div class="w-100 home-slide">
                      <img class="home-slide-img" src="/site_img/home-partners-7.png">
                  </div>
              </b-carousel-slide>
              <b-carousel-slide>
                  <div class="w-100 home-slide">
                      <img class="home-slide-img" src="/site_img/home-partners-8.png">
                  </div>
              </b-carousel-slide>
          </b-carousel>
      </div>
      <div class="contactUs">
          <div class="contactUs-left"></div>
          <form action="/contactUs" method="post" role="form" class="form" id="form" @submit.prevent="validate">
              <div class="form-title">СВЯЖИТЕСЬ С НАМИ</div>
              <div class="form-item">
                  <input type="text" class="form-control" id="name" name="name" v-model="message.name" placeholder="ИМЯ">
                  <span v-if="allerrors.name" class="label-danger">{{ allerrors.name[0]}}</span>
              </div>
              <div class="form-item">
                  <input type="email" class="form-control" id="email" name="email" v-model="message.email" placeholder="ПОЧТА">
                  <span v-if="allerrors.email" class="label-danger">{{ allerrors.email[0]}}</span>
              </div>
              <div class="form-item">
                  <textarea class="form-control" id="text" name="text" rows="4"  v-model="message.text" placeholder="СООБЩЕНИЕ"></textarea>
                  <span v-if="allerrors.text" class="label-danger">{{ allerrors.text[0]}}</span>
              </div>
              <div class="form-group">
                  <vue-recaptcha
                          ref="recaptcha"
                          size="invisible"
                          :sitekey="sitekey"
                          @verify="onSubmit"
                          @expired="onCaptchaExpired"
                  />
              </div>
              <button type="submit" class="btn-submit">ОТПРАВИТЬ</button>
              <a href="#"><img class="home-logo-bottom" src="/site_img/logo-white.png"></a>
              <div class="clear-fix"></div>
          </form>
      </div>
  </div>
</template>
<style lang="scss">
    /*** variables ***/
    $home-title-color: #2F8CA6;
    @import "~bulma";



    /**** CAROUSELs ***/
    #carouselHome {
        width: 100%;
        .carousel-item{
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .popup-container{
            position: absolute;
            font-weight: 600;
            font-family: Montserrat;
            font-size: 30px;
            line-height: 33px;
            width: 100%;
            left: 0;
            text-align: center;
            bottom: 20%;
            color : #2F8CA6;
            z-index: 2;
        }
        .carousel-caption {
            //background: linear-gradient(to top, rgba(0,0,0,0.70), rgba(0,0,0,0.50));
            position: static;
            width: 100%;
            padding: 200px 100px 164px;
            .home-slide, &{
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                flex-direction: column;
            }
            .home-slide {
                min-height: 336px;
                max-width: 1200px;
                margin: 0 auto;
                font-weight: 600;
                font-family: Roboto;
                color: white;
                text-align: center;

                &-title {
                    width: 100%;
                    margin-left: 0;
                    font-size: 78px;
                }

                &-p {
                    font-size: 24px;
                }
            }
        }
    }
    #carouselHomePartners{
        display: none;
        max-width: 500px;
        margin: 0 auto;
        .carousel-caption{
            position : static;
            width: 100%;
            max-width: 500px;
            height: 20vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            .home-slide-img {
                width: 60%;
                height: auto;
            }
        }

    }

    .carousel-control-prev{
        opacity: 0.25;
        min-width: 100px;
        justify-content: start;
        .carousel-control-prev-icon{
            width: 60px;
            height: 60px;
            background-color: #506A85;
            background-image: url('/site_img/prev-icon.png');
            margin: 20px;
            background-size: 25%;
            background-position: center center;
            background-repeat: no-repeat;
            border-radius: 5px;
        }
    }
    .carousel-control-next{
        opacity: 0.25;
        min-width: 100px;
        justify-content: flex-end;
        .carousel-control-next-icon{
            width: 60px;
            height: 60px;
            background-color: #506A85;
            background-image: url('/site_img/next-icon.png');
            margin: 20px;
            background-size: 25%;
            background-position: center center;
            background-repeat: no-repeat;
            border-radius: 5px;
        }
    }
    .carousel-indicators{
        li, .active{
            background-color: #25D7EA;
        }
        li{
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #506A85;
        }

    }
    /**** HOME INSIGHT ****/
    .home-we-make{
        background-color: #2e2e2e;
    }
    .home-services{
        background-color: white;
    }
    .home-we-make  .home-title-wrap, .home-services-wrap  .home-title-wrap,
    .home-partners-wrap .home-title-wrap{
        padding: 40px 0 30px;
        margin: 0 auto;
        width: 90%;
        max-width: 900px;
        .home-title{
            width: 240px;
            float: left;
            font-family: Roboto;
            font-size: 30px;
            font-weight: 500;
            color: $home-title-color;
            line-height: 36px;
            text-align: center;
            height: 36px;
        }
        .home-hr{
            width: calc(50% - 120px);
            height: 18px;
            border-bottom: 1px solid  $home-title-color;
        }
        .home-hr-right{
            float: right;
        }
        .home-hr-left{
            float: left;
        }
    }
    .home-manager{
        padding:  0 0 30px;
        margin: 0 auto;
        width: 90%;
        max-width: 700px;
        section {
            display: block;

            .home-manager-title {
                display: block;
                width: 100%;
                margin: 15px auto;
                text-align: center;
                font-family: Roboto;
                font-weight: 500;
                line-height: 30px;
                font-size: 20px;
                color: $home-title-color;
                float: none;
            }

            .home-manager-img {
                width: auto;
                height: 10vw;
                max-height: 60px;
                margin: 15px auto;
                display: block;
                background-repeat: no-repeat;
                background-size: contain;
                background-position: center center;
            }
        }
    }
    .home-services{
         padding:  0 0 30px;
         margin: 0 auto;
         width: 90%;
         max-width: 900px;
         section {
             display: block;
             padding: 0;
             .home-service-text-wrap{
                 box-sizing: border-box;
                 display: block;
                 width: calc(83% - 20px);
                 padding: 15px 0 15px 15px;
                 text-align: left;
                 font-family: Roboto;
                 font-weight: 500;
                 line-height: 22px;
                 font-size: 16px;
                 color: black;
                 float: left;
                 .home-service-title{
                     color: $home-title-color;
                 }
                 .home-service-text{
                     letter-spacing: 0.3px;
                 }
             }

             .home-service-img {
                 margin: 20px 10px;
                 width: 17%;
                 height: auto;
                 display: block;
                 float: left;
             }

         }
     }

    /*** PARTNERS ****/
    .home-hr-small{
        margin: -15px 0 0 0;
        width: 100%;
        height: 0;
        border-bottom: 1px solid $home-title-color;
        display: none;
    }
    .home-partners-wrap .home-partners{
        display: block;
        width: 90%;
        height: auto;
        max-width: 800px;
        margin: 30px auto;
    }

    /**** FORM ****/
    .contactUs{
        width: 100%;
        background-color: #2F4052;
        padding: 30px 0;
        .home-logo-bottom{
            width: 200px;
            height: 50px;
            float: left;
            margin: 0 0 0 -250px;
        }
        form{
            width: 90%;
            max-width: 400px;
            margin: 0 auto;
            .form-title{
                text-align: center;
                width: 100%;
                font-family: Roboto;
                font-weight: 500;
                line-height: 18px;
                font-size: 16px;
                color: white;
            }
            .form-item{
                width: 100%;
                max-width: 400px;
                margin: 12px auto;
            }
            input, input:focus{
                width: 100%;
                height: 40px;
                background-color: #5a6268;
                border-radius: 5px;
                font-size: 14px;
                padding: 10px;
                border: none;
                outline: none;
                color: white;
                box-shadow: none;
                &::-webkit-input-placeholder {color:white;}
                &::-moz-placeholder          {color:white;}/* Firefox 19+ */
                &:-moz-placeholder           {color:white;}/* Firefox 18- */
                &:-ms-input-placeholder      {color:white;}
            }
            textarea, textarea:focus{
                width: 100%;
                background-color: #5a6268;
                border-radius: 5px;
                font-size: 14px;
                border: none;
                outline: none;
                color: white;
                box-shadow: none;
                &::-webkit-input-placeholder {color:white;}
                &::-moz-placeholder          {color:white;}/* Firefox 19+ */
                &:-moz-placeholder           {color:white;}/* Firefox 18- */
                &:-ms-input-placeholder      {color:white;}
            }
            input:focus, textarea:focus{
                text-align: left;
            }
            input, textarea{
                text-align: center;
            }
            .label-danger{
                color: darkred;
                font-family: Roboto;
                font-size: 10px;
                font-weight: 500;
            }
            .btn-submit{
                display: block;
                width: 88px;
                height: 30px;
                background: #00BC9C;
                border-radius: 3px;
                text-align: center;
                text-decoration: none;
                float: right;
                margin: 20px 0;
                border-style: none;
                font-family: Roboto;
                font-weight: 500;
                line-height: 30px;
                font-size: 12px;
                color: white;
                &:hover{
                    color: white;
                }
            }
        }
    }
    /**** MEDIA ****/
    @media (max-width: 1000px){
        .home-services{
            section {
                .home-services-insight{
                    margin: 0 auto;
                    width: 70%;
                    min-width: 250px;
                }
                .home-service-text{
                    display: none;
                }
                .home-service-text-wrap{
                    width: auto;
                    text-align: left;
                    padding: 25px 5px 0 25px;
                    line-height: 20px;
                    font-size: 16px;
                }
                .home-service-img{
                    &-margin{
                        margin-top: 10%;
                    }
                }
            }
        }
        .contactUs {
            .home-logo-bottom {
                display: none;
            }
        }
        #carouselHome .carousel-caption{
            .home-slide{
                min-height: 0;
                &-title{
                    font-size: 50px;
                }
            }
        }
    }
    @media (max-width: 768px){
        #carouselHome .carousel-caption{
            padding: 125px 100px 125px;
            .home-slide{
                &-title{
                    font-size: 30px;
                }
                &-p{
                    display: none
                }
            }
        }
        #carouselHomePartners{
            display: block;
        }
        .home-partners-wrap .home-partners{
            display: none;
        }
        .carousel-control-prev, .carousel-control-next {
            min-width: 50px;
            .carousel-control-prev-icon, .carousel-control-next-icon {
                width: 30px;
                height: 30px;
                margin: 10px;
            }
        }
        .contactUs {
            .contactUs-contacts-small {
                display: block;
            }
        }
    }
    @media (max-width: 576px){
        .home-manager{
            section {
                padding: 0;
                .home-manager-img {
                    margin: 7px auto;
                }

                .home-manager-title {
                    font-size: 12px;
                    margin: 7px auto;
                }
            }
        }
        .home-we-make .home-title-wrap, .home-services-wrap .home-title-wrap,
        .home-partners-wrap .home-title-wrap{
            padding: 20px 0 0;
            .home-title{
                font-size: 16px;
                line-height: 18px;
            }
            .home-hr{
                visibility: hidden;
            }

        }
        #carouselHome {
            .popup-container{
                font-size: 20px;
                line-height: 22px;
                width: 100vw;
                left: 0;
                text-align: center;
                bottom: 15%;
            }
            .carousel-caption {
                padding: 75px 50px 75px;

                .home-slide {
                    &-title {
                        font-size: 22px;
                    }

                    &-p {
                    }
                }
            }
        }
        #carouselHomePartners .carousel-caption{
            padding: 15px 50px 30px;
        }
        .home-services{
            section {
                .home-services-insight{
                    min-width: 140px;
                }
                .home-service-img{
                    margin: 15px 0;
                    &-margin{
                        margin-top: 20px;
                    }
                }
                .home-service-text{
                    display: none;
                }
                .home-service-text-wrap{
                    padding: 20px 5px 0 12px;
                    line-height: 12px;
                    font-size: 10px;
                }
            }
        }
        #carouselHomePartners{
            .carousel-caption{
                .home-slide-img {
                    width: 60%;
                    height: auto;
                }
            }

        }
        .home-hr-small{
            display: block;
        }
    }
</style>
<script>
    import $ from 'jquery';
    import VueRecaptcha from 'vue-recaptcha';
    import PopupVideo from './PopupVideo.vue';
    export default {
        components: { VueRecaptcha, PopupVideo },
        data(){
            return{
                sliderData: "",
                message : {
                    name: "",
                    email: "",
                    text: "",
                    recaptchaToken: ""
                },
                allerrors :  {
                    name: "",
                    email: "",
                    text: ""
                },
                windowWidth: window.innerWidth,
                sitekey: "6LdAK7wUAAAAAKlUhxY5y2r85iRu-1WjUQSMrjJs"
            }
        },
        created() {
            window.addEventListener("resize", this.matchHeight);
        },
        destroyed() {
            window.removeEventListener("resize", this.matchHeight);
        },
        methods: {
            onSubmit(recaptchaToken) {
                this.message.recaptchaToken = recaptchaToken;
                this.allerrors.name = '';
                this.allerrors.email = '';
                this.allerrors.text = '';

                this.axios.post("/contactUs", this.message)

                    .then((response) => {console.log(response.data['success']); this.allerrors.success = response.data['success']})

                    .catch((error) =>{  if (error.response.data.errors) this.allerrors = error.response.data.errors; })
            },
            matchHeight() {
                this.$refs.homeSlider.setSlide(0);
                setTimeout(() => {
                    let heightSlider =  $('#carouselHome .home-slide').eq(0)[0].clientHeight + 'px';
                    $('#carouselHome .home-slide-height').css('height', heightSlider);
                    }, 500
                );

                //console.log("resize height:" + heightSlider);
            },
            onCaptchaExpired () {
                this.$refs.recaptcha.reset()
            },
            validate () {
                this.$refs.recaptcha.execute()
            },
            mainSliderImg() {
                for (var i = 0; i < 4; i++) {

                    $('#carouselHome .carousel-item').eq(i).css("background-image", "url(" + this.sliderData[i].photo + ")");
                    $('#carouselHome .carousel-caption').eq(i).css( "background", this.sliderData[i].cover_bg);
                    $('#carouselHome .carousel-item').eq(i).css("background-position", this.sliderData[i].background_position);
                }
            },
            getData(){
                var that = this;
                this.axios
                    .get('HomeSlider/get')
                    .then(function(response) {
                        that.sliderData = response.data;
                        setTimeout(function () { that.mainSliderImg();
                    });
                })
            }
        },
        mounted() {
           this.matchHeight();
            this.getData();
        },
        beforeMount() {
            const $script = document.createElement('script')
            $script.async = true;
            $script.src = 'https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit';
            document.head.appendChild($script);
        }
    }
</script>


