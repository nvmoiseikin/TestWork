<template>
    <nav class="nav">
        <img class="nav__close" src="/site_img/close.png">
        <div class="nav__dropdownWrap w-100">
            <div class="dropdown" id="dropdownCountries">
                <div class="dropdown__header" @click="dropdownButtons('dropdownCountries')">
                    <div class="dropdown__label">Страны </div>
                    <img class="dropdown__icon" src="/site_img/dropdownClose.png">
                </div>
                <div class="dropdown__content">
                    <div class="dropdown__item">
                        Южная Америка
                        <div class="dropdown__itemInItem">Аргентина</div>
                        <div class="dropdown__itemInItem">Бразилия</div>
                        <div class="dropdown__itemInItem">Уругвай</div>
                        <div class="dropdown__itemInItem">Перу</div>
                        <div class="dropdown__itemInItem">Чили</div>
                        <div class="dropdown__itemInItem">Эквадор</div>
                    </div>
                    <div class="dropdown__item">
                        Северная Америка
                        <div class="dropdown__itemInItem">Аргентина</div>
                        <div class="dropdown__itemInItem">Бразилия</div>
                        <div class="dropdown__itemInItem">Уругвай</div>
                        <div class="dropdown__itemInItem">Перу</div>
                        <div class="dropdown__itemInItem">Чили</div>
                        <div class="dropdown__itemInItem">Эквадор</div>
                    </div>
                    <div class="dropdown__item">
                        Арктика и Антарктика
                        <div class="dropdown__itemInItem">Аргентина</div>
                        <div class="dropdown__itemInItem">Бразилия</div>
                        <div class="dropdown__itemInItem">Уругвай</div>
                        <div class="dropdown__itemInItem">Перу</div>
                        <div class="dropdown__itemInItem">Чили</div>
                        <div class="dropdown__itemInItem">Эквадор</div>
                    </div>
                    <div class="dropdown__item">
                        Африка
                        <div class="dropdown__itemInItem">Аргентина</div>
                        <div class="dropdown__itemInItem">Бразилия</div>
                        <div class="dropdown__itemInItem">Уругвай</div>
                        <div class="dropdown__itemInItem">Перу</div>
                        <div class="dropdown__itemInItem">Чили</div>
                        <div class="dropdown__itemInItem">Эквадор</div>
                    </div>
                    <div class="dropdown__item">
                        Австралия и Океания
                        <div class="dropdown__itemInItem">Аргентина</div>
                        <div class="dropdown__itemInItem">Бразилия</div>
                        <div class="dropdown__itemInItem">Уругвай</div>
                        <div class="dropdown__itemInItem">Перу</div>
                        <div class="dropdown__itemInItem">Чили</div>
                        <div class="dropdown__itemInItem">Эквадор</div>
                    </div>
                    <div class="dropdown__item">
                        Европа Россия Азия
                        <div class="dropdown__itemInItem">Аргентина</div>
                        <div class="dropdown__itemInItem">Бразилия</div>
                        <div class="dropdown__itemInItem">Уругвай</div>
                        <div class="dropdown__itemInItem">Перу</div>
                        <div class="dropdown__itemInItem">Чили</div>
                        <div class="dropdown__itemInItem">Эквадор</div>
                    </div>
                </div>
            </div>
            <div class="dropdown" id="dropdownType">
                <div class="dropdown__header" @click="dropdownButtons('dropdownType')">
                    <div class="dropdown__label">Тип путешествия</div>
                    <img class="dropdown__icon" src="/site_img/dropdownClose.png">
                </div>
                <div class="dropdown__content">
                    <div class="dropdown__item dropdown__item_thin">
                        Активный
                    </div>
                    <div class="dropdown__item dropdown__item_thin">
                        Майские
                    </div>
                    <div class="dropdown__item dropdown__item_thin">
                        На авто
                    </div>
                    <div class="dropdown__item dropdown__item_thin">
                        На корабле
                    </div>
                    <div class="dropdown__item dropdown__item_thin">
                        Новый год
                    </div>
                    <div class="dropdown__item dropdown__item_thin">
                        Поход
                    </div>
                    <div class="dropdown__item dropdown__item_thin">
                       Серфинг Эксклюзив
                    </div>
                    <div class="dropdown__item dropdown__item_thin">
                        Экскурсионный Экспедиция
                    </div>
                </div>
            </div>
            <div class="dropdown" id="dropdownDate">
                <div class="dropdown__header" @click="dropdownButtons('dropdownDate')">
                    <div class="dropdown__label">Даты</div>
                    <img class="dropdown__icon" src="/site_img/dropdownClose.png">
                </div>
                <div  class="dropdown__content">
                    <date-picker></date-picker>
                </div>
            </div>
            <div class="dropdown__search">Найти</div>
            <div class="dropdown__menu">
                ПУТЕШЕСТВИЯ <br>О НАС <br>ОТЗЫВЫ <br>БЛОГ
            </div>
            <div class="dropdown__searchTour">Подберите мне тур</div>
        </div>
    </nav>
</template>

<style lang="scss">
    @import '../../sass/variables';
    @import '../../sass/myNav';
</style>
<script>
    import $ from 'jquery';
    import DatePicker from './DatePicker.vue';
    export default{
        components: { DatePicker },
        data: function(){
            return {}
        },
        mounted: function(){
            var that = this;
           this.dropdownInDropdown();
           $(".nav__close").click(function(){
               $(".nav").removeClass("nav_active");
               this.closeAll();
           })
        },
        methods: {
            dropdownButtons: function(id){
                //this.closeAll();
                $("#" + id).find(".dropdown__icon").toggleClass("open");
                $("#" + id).find(".dropdown__content").toggleClass("active");
                $("#" + id).find(".dropdown__item").removeClass("active");
            },
            dropdownInDropdown: function() {
                $(".dropdown__item").click(function(e){
                    console.log(e, e.target, $(e.currentTarget));
                    $(".dropdown__itemInItem").removeClass("active");
                    $(e.currentTarget).find(".dropdown__itemInItem").toggleClass("active");
                })
            },
            closeAll: function(){
                $(".dropdown .active").removeClass("active")
            }
        }

    }
</script>
