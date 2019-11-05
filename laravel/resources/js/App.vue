<template>
    <div id="app" class="container">
        <nav class="nav-wrap">
            <div class="nav-insight row">
                <div class="nav-insight-left col">
                    <a href="/"><img src="/site_img/logo.png"></a>
                </div>
                <div class="nav-insight-right col row">
                    <div class="nav-menu col">
                        <router-link to="/about" class="nav-menu-item" exact>О НАС</router-link>
                        <router-link to="/solutions" class="nav-menu-item">РЕШЕНИЯ</router-link>
                        <router-link to="/services" class="nav-menu-item">УСЛУГИ</router-link>
                        <router-link to="/contacts" class="nav-menu-item">КОНТАКТЫ</router-link>
                    </div>
                </div>
                <div class="nav-contacts col row">
                    <a  href="mailTo:info@smartdivision.su" class="nav-email col-6"><span><div>&#x2709;</div>info@smartdivision.su</span></a>
                    <a href="tel:+74955041519" class="nav-tel col-6"><span><div><i class="fa fa-mobile-alt" aria-hidden="true"></i></div>+7(495)504-15-19</span></a>
                </div>

            </div>
            <b-nav-item-dropdown   variant="link" toggle-class="text-decoration-none" no-caret class="nav-insight-small">
                <template slot="button-content"><img src="/site_img/logo.png"></template>
                <b-dropdown-item href="/">ГЛАВНАЯ <div class="float-right">></div></b-dropdown-item>
                <b-dropdown-item href="/about">О НАС <div class="float-right">></div></b-dropdown-item>
                <b-dropdown-item href="/solutions">РЕШЕНИЯ <div class="float-right">></div></b-dropdown-item>
                <b-dropdown-item href="/services">УСЛУГИ <div class="float-right">></div></b-dropdown-item>
                <b-dropdown-item href="/contacts">КОНТАКТЫ <div class="float-right">></div></b-dropdown-item>
                <b-dropdown-item href="#"></b-dropdown-item>
                <b-dropdown-item href="mailTo:info@smartdivision.su"><div class="menu-icon">&#x2709;</div>info@smartdivision.su</b-dropdown-item>
                <b-dropdown-item href="tel:+74955041519"><div class="menu-icon"><i class="fa fa-mobile-alt" aria-hidden="true"></i></div>+7(495)504-15-19</b-dropdown-item>
            </b-nav-item-dropdown>
        </nav>
        <main>
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </main>
        <div class="contactUs-contacts-small">
            <a  href="mailTo:info@smartdivision.su" class="">info@smartdivision.su</a>
            <a href="tel:+74955041519" class="">+7(495)504-15-19</a>
        </div>
        <footer row>
            <div class="col-12 col-md-4 offset-md-4 footer-copy">© 2019 Smart Division. Все права защищены.</div>
            <a href="tel:+74955041519" class="col-0 col-md-3 footer-tel">+7(495)504-15-19</a>
            <a href="#" class="to-start"></a>
        </footer>
    </div>
</template>

<style lang="scss">
    @import "~bulma";
    @import url('https://fonts.googleapis.com/css?family=Roboto:200,600,500');
    @import url('https://fonts.googleapis.com/css?family=Montserrat:600,500');
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
        opacity: 0
    }
    .grecaptcha-badge {
        z-index: 99999999999999999;
    }
    .clear-fix{
        clear: both;
    }
    html{
        -webkit-tap-highlight-color: transparent;
    }
    body{
        overflow-x: hidden;
        width: 100%;
        .container{
            max-width: 1900px !important;
            padding: 0;
            width: 100%;
            margin: 0 auto;
        }
    }
    html{

        .container{
            margin: 0;
        }
    }
    nav{
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        background-color: white;
        z-index: 1000;
        padding: 15px 0;
        .nav-insight{
            margin: 0 auto !important;
            width: 100%;
            max-width : $widescreen;
            justify-content: space-between;
        }
        .nav-insight-small {
            display: none;
            .float-right{
                float: right;
            }
            .dropdown-menu{
                width: 100%;
                transform: translate3d(0, 0, 0) !important;
                top: 45px !important;
                border: none;
                padding: 0 10%;
            }
            .dropdown-toggle{
                margin: 10px 10%;
                img{
                  width: auto;
                    height: 37px;
                }
            }
            .dropdown-item{
                font-family: Roboto;
                font-size: 14px;
                font-weight: 600;
                color: black;
                line-height: 20px;
                padding: 6px 50px 6px 25px;
                .menu-icon{
                    &:first-of-type{
                        width: 17px;
                    }
                    font-size: 16px;
                    font-weight: 600;
                    width: 11px;
                    margin-right: 5px;
                    float: left;
                }
            }
            .dropdown-item:hover{
                color: #2F8CA6;
                outline: none;
            }
        }
        .nav-insight-left{;
            box-sizing: content-box;
            max-width: 200px;
            width: 200px;
            height: 55px;
            img{
                height: 55px;
                width: 200px;
            }

        }
        .nav-email-small, .nav-tel-small{
            display: none;
        }
        .nav-insight-right{
            .nav-menu{
                margin: 0 0 0 calc(0.15 * calc(100vw - 770px));
                max-width: 520px;
                display: flex;
                justify-content: space-around;
                flex-wrap: nowrap;
                box-sizing: border-box;
            }

        }
        .nav-menu-item, .nav-email, .nav-tel,
        .nav-email-small, .nav-tel-small{
            font-family: Roboto;
            font-size: 14px;
            font-weight: 600;
            text-align: end;
            color: #464646;
            line-height: 20px;
        }
        .nav-tel, .nav-email{
            font-size: 12px;
            font-weight: 500;
            line-height: 55px;
            height: 55px;
            span{
                display: inline-block;
                height: 55px;
                text-align: left;
            }
            div{
                display: block;
                float: left;
                font-size: 16px;
                font-weight: 600;
                margin-top: 0;
                padding-right: 3px;
            }
        }
        .nav-tel{
            text-align: left;
            span{
                width: 100%;
            }
        }
        .nav-email{
            padding-right: 0;
            span{
                width: 100%;
            }
        }
        .nav-menu-item{
            line-height: 55px;
        }
        .nav-menu-item:hover, .nav-email:hover, .nav-tel:hover,
        .nav-email-small:hover, .nav-tel-small:hover{
            color: #2F8CA6;
            text-decoration: underline;
        }
        .nav-contacts{
            max-width: 360px;
        }

    }
    main{
        margin-top: 103px;
        min-height: calc(100vh - 183px);
    }
    footer{
        display: flex !important;
        width: 100vw;
        background-color: #283645;
        height: 80px;
        position: relative;
        z-index: 0;
        .to-start{
            position: absolute;
            top: 20px;
            right: 80px;
            width: 40px;
            height: 40px;
            background-image: url('/site_img/prev-icon.png');
            transform: rotate(90deg);
            background-color: #2F4052;
            background-size: 25%;
            background-position: center center;
            background-repeat: no-repeat;
            border-radius: 5px;

        }
        .footer-tel, .footer-tel:hover{
            font-family: Roboto;
            font-size: 14px;
            font-weight: 400;
            color: #00BC9C;
            line-height: 20px;
            text-align: center;
            padding-top: 30px;
        }
        .footer-copy{
            font-family: Roboto;
            font-size: 10px;
            font-weight: 400;
            color: white;
            line-height: 20px;
            text-align: center;
            padding-top: 30px;
        }
    }
    .contactUs-contacts-small {
        margin: 0;
        width: 100%;
        display: none;
        text-align: center;
        background-color: #2F4052;
        padding: 20px 0;
        a {
            display: block;
            font-family: Roboto;
            font-weight: 500;
            line-height: 18px;
            font-size: 16px;
            color: #00BC9C;
            margin: 10px auto;
        }
    }

    /*** MEDIA ****/
    @media(max-width: 769px){
        .grecaptcha-badge {
            transform : scale(0.5) translate3d(-22%, -100%, 0);
            transition: none;
        }
        nav{
            padding: 0 0 !important;
            .nav-insight {
                display: none;
            }
            .nav-insight-small {
                display: block;
            }
            .nav-email, .nav-tel {
                display: none !important;
            }
            .nav-email-small, .nav-tel-small{
                display: block;
                padding: 0.25rem
            }
            .nav-insight-left{
                padding: 0.75rem 10% !important;
            }
        }
        main{
            margin-top: 73px;
            min-height: calc(100vh - 219px);
        }
        footer{
            height: 40px;
            .to-start{
                top: 10px;
                right: 10px;
                width: 20px;
                height: 20px;
            }

            .footer-copy{
                padding-top: 10px;
            }
            .footer-tel{
                display: none;
            }
        }
        .contactUs-contacts-small {
            display: block;
        }
    }
    @media(min-width: 769px) and (max-width: 1000px){
        nav{
            .nav-insight-right{
                padding-left: 0;
                flex-wrap: wrap;
                .nav-contacts, .nav-menu{
                    width: 100%;
                }
            }
            .nav-menu{
                padding: 0 !important;
            }
            .nav-email, .nav-tel{
                padding: 0;
            }
            .nav-tel{
                text-align: center;
                max-width: 130px;
            }
            .nav-email{
                min-width: 145px;
            }
        }
    }
</style>

<script>
    import $ from 'jquery'
    import BDropdown from "buefy/src/components/dropdown/Dropdown";
    export default{
        components: {BDropdown},
        data() {
            return {}
        },
        mounted() {
            document.title = 'SmartDivision';
        }
    }
</script>