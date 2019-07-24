<template>
    <div class="container">
        <nav class="nav-wrap">
            <div class="nav-insight">
               <img src="/site_img/logo.png">
            </div>
        </nav>
        <div>
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<style>
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
            width: 100%;
            max-width : $widescreen;
        }
    }
</style>

<script>

    export default{
    }
</script>