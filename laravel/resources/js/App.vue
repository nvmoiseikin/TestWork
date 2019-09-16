<template>
    <div id="app" class="container">
        <nav class="nav-wrap">
            <div class="nav-insight tile is-ancestor">
                <div class="nav-insight-left is-left is-3 tile is-parent">
                    <img src="/site_img/logo.png">
                    <div class="is-pulled-right">
                        <a  href="mailTo:example@gmail.com" class="nav-email-small ">example@gmail.com</a>
                        <a href="telTo:+77777777777" class="nav-tel-small last-nav">+7 (777) 777 77 77</a>
                    </div>
                </div>
                <div class="nav-insight-right is-right is-9 is-parent tile">
                    <div class="nav-menu is-offset-1 is-6 is-parent tile">
                        <router-link to="/" class="nav-menu-item is-3" exact>О нас</router-link>
                        <router-link to="/solutions/" class="nav-menu-item is-3">Решения</router-link>
                        <router-link to="/services/" class="nav-menu-item is-3">Услуги</router-link>
                        <router-link to="/contacts/" class="nav-menu-item is-3">Контакты</router-link>
                    </div>
                    <div class="nav-contacts is-6 is-parent tile">
                        <a  href="mailTo:example@gmail.com" class="nav-email is-6">example@gmail.com</a>
                        <a href="telTo:+77777777777" class="nav-tel is-7">+7 (777) 777 77 77</a>
                    </div>
                </div>
            </div>
            <b-nav-item-dropdown   variant="link" toggle-class="text-decoration-none" no-caret class="nav-insight-small">
                <template slot="button-content"><img src="/site_img/logo.png"></template>
                <b-dropdown-item href="/">О нас <div class="float-right">></div></b-dropdown-item>
                <b-dropdown-item href="/#/solutions/">Решения <div class="float-right">></div></b-dropdown-item>
                <b-dropdown-item href="#">Услуги <div class="float-right">></div></b-dropdown-item>
                <b-dropdown-item href="#">Контакты <div class="float-right">></div></b-dropdown-item>
                <b-dropdown-item href="#"></b-dropdown-item>
                <b-dropdown-item href="#">&#x2709; example@gmail.com</b-dropdown-item>
                <b-dropdown-item href="#">&#61707; +7 (777) 777 77 77</b-dropdown-item>
            </b-nav-item-dropdown>
        </nav>
        <main>
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </main>
        <div class="contactUs-contacts-small">
            <a  href="mailTo:example@gmail.com" class="">example@gmail.com</a>
            <a href="telTo:+77777777777" class="">+7 (777) 777 77 77</a>
        </div>
        <footer row>
            <div class="col-12 col-md-4 offset-md-4 footer-copy">© 2019 Smart Division. Все права защищены.</div>
            <a href="telTo:+77777777777" class="col-0 col-md-4 footer-tel">+7 (777) 777 77 77</a>
            <a href="#" class="to-start"></a>
        </footer>
    </div>
</template>

<style lang="scss">
    @import "~bulma";
    @import url('https://fonts.googleapis.com/css?family=Roboto:200,600,500');
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
        opacity: 0
    }
    nav{
        width: 100%;
        padding: 30px 0;
        .nav-insight{
            margin: 0 auto !important;
            width: 100%;
            max-width : $widescreen;
        }
        .nav-insight-small {
            display: none;
            .float-right{
                float: right;
            }
            .dropdown-menu{
                width: 100%;
                transform: translate3d(0, 0, 0) !important;
                top: 65px !important;
                border: none;
                padding: 0 10%;
            }
            .dropdown-toggle{
                margin: 10px 10%;
            }
            .dropdown-item{
                font-family: Roboto;
                font-size: 14px;
                font-weight: 600;
                color: black;
                line-height: 20px;
                padding: 6px 50px 6px 25px;
            }
            .dropdown-item:hover{
                color: #2F8CA6;
                outline: none;
            }
        }
        .nav-insight-left{
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
        .nav-menu-item:hover, .nav-email:hover, .nav-tel:hover,
        .nav-email-small:hover, .nav-tel-small:hover{
            color: #2F8CA6;
            text-decoration: underline;
        }
        .nav-contacts{
            display: flex;
            justify-content: space-around;
            flex-wrap: nowrap;
            box-sizing: border-box;
        }

    }
    footer{
        display: flex !important;
        width: 100%;
        background-color: #283645;
        height: 80px;
        position: relative;
        .to-start{
            position: absolute;
            top: 20px;
            right: 20px;
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
        nav{
            padding: 10px 0 !important;
            position: fixed;
            left: 0;
            top: 0;
            background-color: white;
            z-index: 1000;
            .nav-insight {
                display: none;
            }
            .nav-insight-small {
                display: block;
            }
            padding-bottom: 0;
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
            margin-top: 111px;
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

                flex-wrap: wrap;
                .nav-contacts, .nav-menu{
                    width: 100%;
                }
            }
            .nav-menu{
                padding: 0 !important;
            }
        }
    }
</style>

<script>

    import BDropdown from "buefy/src/components/dropdown/Dropdown";
    export default{
        components: {BDropdown}
    }
</script>