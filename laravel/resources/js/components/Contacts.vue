<template>
    <div class="main-container main-container-contacts">
        <div class="Contacts-page">
            <div class="contacts-title-small">Наши контакты</div>
            <div class="contacts-title-wrap">
                <div class="contacts-hr contacts-hr-left"></div>
                <div class="contacts-title">Наши контакты</div>
                <div class="contacts-hr contacts-hr-right"></div>
                <div class="clear-fix"></div>
            </div>
            <div class="contacts-text">
                <span>124683 Москва Зеленоград 1539 88</span>
                <a  href="mailTo:example@gmail.com" class="">example@gmail.com</a>
                <a href="telTo:+74955041519" class="">+7-(495)-504-15-19</a>
            </div>
        </div>

        <div class="contactUs contacts-contactUs">
            <div class="contactUs-left"></div>
            <form action="/contactUs" method="post" role="form" class="form" id="form" @submit.prevent="validate">
                <div class="form-title">СВЯЖИТЕСЬ С НАМИ</div>
                <div class="form-item">
                    <input type="text" class="form-control" id="name" name="name" v-model="message.name" placeholder="ВВЕДИТЕ ВАШЕ  ИМЯ">
                    <span v-if="allerrors.name" class="label-danger">{{ allerrors.name[0]}}</span>
                </div>
                <div class="form-item">
                    <input type="email" class="form-control" id="email" name="email" v-model="message.email" placeholder="ВВЕДИТЕ ВАШУ ПОЧТУ">
                    <span v-if="allerrors.email" class="label-danger">{{ allerrors.email[0]}}</span>
                </div>
                <div class="form-item">
                    <textarea class="form-control" id="text" name="text" rows="4"  v-model="message.text" placeholder="ВВЕДИТЕ ТЕКСТ СООБЩЕНИЯ"></textarea>
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
    @import "~bulma";
    @import url('https://fonts.googleapis.com/css?family=Roboto:200,600,500');
    $title-color: #2F8CA6;
    $contacts-text-color: #00BC9C;
    .main-container-contacts{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: inherit;
    }
    .Contacts-page {
        max-width: $widescreen;
        margin: 0 auto;

        .contacts-title-small {
            display: none;
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
         .contacts-title-wrap{
             padding: 40px 0 30px;
             margin: 0 auto;
             width: 90%;
             max-width: 900px;
             .contacts-title{
                 width: 280px;
                 float: left;
                 font-family: Roboto;
                 font-size: 30px;
                 font-weight: 500;
                 color: $title-color;
                 line-height: 36px;
                 text-align: center;
                 height: 36px;
             }
             .contacts-hr{
                 width: calc(50% - 140px);
                 height: 18px;
                 border-bottom: 1px solid  $title-color;
             }
             .contacts-hr-right{
                 float: right;
             }
             .contacts-hr-left{
                 float: left;
             }
         }
        .contacts-text{
            width: 100%;
            margin: 40px auto 60px;
            span, a, a:hover{
                display: block;
                margin: 20px auto;
                text-decoration: none;
                width: 100%;
                font-family: Roboto;
                font-size: 32px;
                font-weight: 500;
                color: $contacts-text-color;
                line-height: 38px;
                text-align: center;
            }
        }
    }
    @media (max-width: 768px) {
        .Contacts-page {
            width: 100%;
            .contacts-title-small {
                display: block;
            }

            .contacts-title-wrap {
                display: none;
            }
            .contacts-text{
                margin: 40px auto 40px;
                span, a, a:hover{
                    font-size: 24px;
                    line-height: 27px;
                }
            }
        }
    }
</style>

<script>
    import VueRecaptcha from 'vue-recaptcha';
    import $ from 'jquery'
    export default {
        components: { VueRecaptcha },
        data() {
            return{
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
            };
        },
        beforeMount() {
            const $script = document.createElement('script')
            $script.async = true;
            $script.src = 'https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit';
            document.head.appendChild($script);
        },
        methods: {
            onSubmit(recaptchaToken) {
                this.message.recaptchaToken = recaptchaToken;
                console.log(recaptchaToken, this.message);
                this.allerrors.name = '';
                this.allerrors.email = '';
                this.allerrors.text = '';

                this.axios.post("/contactUs", this.message)

                    .then((response) => {console.log(response.data['success']); this.allerrors.success = response.data['success']})

                    .catch((error) =>{  if (error.response.data.errors) this.allerrors = error.response.data.errors; })
            },
            onCaptchaExpired () {
                this.$refs.recaptcha.reset()
            },
            validate () {
                this.$refs.recaptcha.execute()
            }
        }
    }
</script>