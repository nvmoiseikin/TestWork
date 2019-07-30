<template>
    <div class="container">
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
                        <div class="nav-menu-item is-3">О нас</div>
                        <div class="nav-menu-item is-3">Решения</div>
                        <div class="nav-menu-item is-3">Услуги</div>
                        <div class="nav-menu-item is-3">Контакты</div>
                    </div>
                    <div class="nav-contacts is-6 is-parent tile">
                        <a  href="mailTo:example@gmail.com" class="nav-email is-6">example@gmail.com</a>
                        <a href="telTo:+77777777777" class="nav-tel is-7">+7 (777) 777 77 77</a>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </main>
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
    @media(max-width: 769px){
        nav{
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

    export default{
    }
</script>