<template>
    <div class="main-container">
        <div class="solutions-home">
            <div class="solutions-home-title">
                <span>Для дома</span>
                <div class="content-title-hr"></div>
                <div class="clear-fix"></div>
            </div>
            <div id="carouselSolutionsHome">
                <div class="carousel-inner">
                    <router-link v-for="(data, index) in solutionData.home" :class='{"carousel-item":"true","active":(index==0)}' :to="data.path" :key="index">
                        <img :src="firstPhoto(data.photos)">
                        <div class="carousel-item-title">{{data.title}}</div>
                        <div class="carousel-item-text">{{data.small_text}}</div>
                    </router-link>
                </div>
                <div @click="prevSlide('carouselSolutionsHome')" class="arrow-left"><div class="icon-left"></div></div>
                <div @click="nextSlide('carouselSolutionsHome')" class="arrow-right"><div class="icon-right"></div></div>
            </div>
        </div>
    </div>
</template>

<style lang="scss">
    @import "~bulma";
    @import url('https://fonts.googleapis.com/css?family=Roboto:200,600,500');
</style>

<script>

    export default{
    }
</script>
