<template>
  <div class="main-container">
      <div>
          <b-carousel
                  id="carouselHome"
                  v-model="slide"
                  :interval="4000"
                  controls
                  indicators
          >
              <!-- Text slides with image -->
              <b-carousel-slide>
                  <div class="w-100 home-slide">
                      <div class="home-slide-title">
                          Проектирование
                      </div>
                      <div class="home-slide-p">
                          Подготовим всю необходимую документацию по интеграции электронных систем управления, автоматизации, домашних кинотеатров, охранных систем и систем домашнего развлечения.

                          Обязательная часть в интеграции любых систем. Детальная проработка помогает предотвратить неприятные неожиданности в дальнейшем.
                      </div>
                  </div>
              </b-carousel-slide>
              <b-carousel-slide>
                  <div class="w-100 home-slide">
                      <div class="home-slide-title">
                          Монтаж
                      </div>
                      <div class="home-slide-p">
                          Поможем с монтажем видео и аудио систем, систем управления, локальной вычислительной сети и wifi.
                          Правильный монтаж оборудования и коммуникационных трасс исключает большое число ошибок в работе электронных систем.
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
                  <img class="home-service-img" src="/site_img/service-1.png">
                  <div class="home-service-text-wrap">
                      <div class="home-service-title">ПРОЕКТИРОВАНИЕ</div>
                      <div class="home-service-text">Подготовим всю необходимую документацию по интеграции электронных систем управления, автоматизации, домашних кинотеатров, охранных систем и систем домашнего развлечения.

                          Обязательная часть в интеграции любых систем. Детальная проработка помогает предотвратить неприятные неожиданности в дальнейшем.</div>
                  </div>
              </section>
              <section  class="col-6">
                  <img class="home-service-img" src="/site_img/service-2.png">
                  <div class="home-service-text-wrap">
                      <div class="home-service-title">МОНТАЖ</div>
                      <div class="home-service-text">Поможем с монтажем видео и аудио систем, систем управления, локальной вычислительной сети и wifi.
                          Правильный монтаж оборудования и коммуникационных трасс исключает большое число ошибок в работе электронных систем.</div>
                  </div>
              </section>
              <section  class="col-6">
                  <img class="home-service-img" src="/site_img/service-3.png">
                  <div class="home-service-text-wrap">
                      <div class="home-service-title">НАСТРОЙКА</div>
                      <div class="home-service-text">Настроим оборудование для построения систем управления, видеонаблюдения, охранной сигнализации, оповещения, звукоусиления, проекционных систем и систем видеоотображения.
                          Только точная настройка оборудования позволит пользователю получить максимальный функционал системы, а так же избавит от ошибок.</div>
                  </div>
              </section>
              <section  class="col-6">
                  <img class="home-service-img" src="/site_img/service-4.png">
                  <div class="home-service-text-wrap">
                      <div class="home-service-title">АУДИТ</div>
                      <div class="home-service-text">Поможем определиться с оборудованием. Проконсультируем по принятым решениям.Проектирование важнейшая часть и тд и тп про проектирование, какое оноважное и все такое</div>
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
                  v-model="slide"
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
          <form action="/contactUs" method="post" role="form" class="form" id="form">
              <div class="form-title">Свяжитесь с нами</div>
              {{ csrf_field() }}
              <div class="form-item">
                  <div class="form-label">Ваше имя</div>
                  <input type="text" class="form-control" id="name" name="name" v-bind="{{ old('name') }}" placeholder="Введите ваше имя">
              </div>
              <div class="form-item">
                  <div class="form-label">Ваша почта</div>
                  <input type="email" class="form-control" id="email" name="email" v-bind="{{ old('email') }}" placeholder="Введите вашу почту">
              </div>
              <div class="form-item">
                  <div class="form-label">Ваш вопрос</div>
                  <textarea class="form-control" id="text" name="text" rows="4" placeholder="Введите ваш вопрос">{{ old('text') }}</textarea>
              </div>
              <button type="submit" class="btn-submit">Отправить</button>
          </form>
      </div>
  </div>
</template>
<style lang="scss">
    /*** variables ***/
    $home-title-color: #2F8CA6;
    @import "~bulma";

    .clear-fix{
        clear: both;
    }
    body{
        overflow-x: hidden;
        width: 100%;
        .container{
            max-width: $widescreen !important;
            padding: 0;
            width: 100%;
        }
    }

    /**** CAROUSELs ***/
    #carouselHome .carousel-caption{
        position : static;
        width: 100%;
        padding: 200px 100px 164px;
        background-color: #2F4052;
        .home-slide{
            font-weight: 600;
            font-family: Roboto;
            color: white;
            text-align: center;
            &-title{
                width: calc(100% + 200px);
                margin-left: -100px;
                font-size: 78px;
            }
            &-p{
                font-size: 24px;
            }
        }
    }
    #carouselHomePartners{
        display: none;
        .carousel-caption{
            position : static;
            width: 100%;
            padding: 50px;
            .home-slide-img {
                width: 50%;
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
                 line-height: 18px;
                 font-size: 16px;
                 color: black;
                 float: left;
                 .home-service-title{
                     color: $home-title-color;
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
        form{
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
                width: 90%;
                max-width: 400px;
                margin: 12px auto;
            }
            input{
                width: 100%;
                height: 40px;
                background-color: white;
                border-radius: 15px;
                font-size: 16px;
                padding: 10px;
            }
            textarea{
                width: 100%;
                background-color: white;
                border-radius: 15px;
                font-size: 16px;
                font-style: italic;
            }
        }
    }
    /**** MEDIA ****/
    @media (max-width: 1000px){
        .home-services{
            section {
                .home-service-text{
                    display: none;
                }
                .home-service-text-wrap{
                    text-align: center;
                    padding: 25px 5px 0;
                    line-height: 20px;
                    font-size: 16px;
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
                    display: none;
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
        #carouselHome .carousel-caption{
            .home-slide{
                &-title{
                    font-size: 24px;
                }
                &-p{
                }
            }
        }
        #carouselHomePartners .carousel-caption{
            padding: 15px 50px;
        }
        .home-services{
            section {
                .home-service-img{
                    margin: 15px 0;
                }
                .home-service-text{
                    display: none;
                }
                .home-service-text-wrap{
                    padding: 20px 5px 0;
                    line-height: 12px;
                    font-size: 10px;
                }
            }
        }
        #carouselHomePartners{
            .carousel-caption{
                .home-slide-img {
                    width: 40%;
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
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


