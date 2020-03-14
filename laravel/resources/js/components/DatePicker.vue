<template>
    <div class="calendar__wrap">
        <table id="calendar2" class="calendar">
            <thead>
                <tr><td>&lt;</td><td colspan="5"></td><td>&gt;</td>
                <tr><td>Пн</td><td>Вт</td><td>Ср</td><td>Чт</td><td>Пт</td><td>Сб</td><td>Вс</td></tr>
            </thead>
            <tbody></tbody>
        </table>
        <div class="calendar__title">Выберите дату не позднее которой хотите вернуться</div>
    </div>
</template>
<style lang="scss">
    @import '../../sass/variables';
    .calendar {
        width: 100%;
        text-align: center;
        border-spacing: 7px 7px;
        border-collapse: separate !important;
        &__wrap{
            margin: -15px 0 0;
            padding: 0 24px 18px;
        }
        &__title{
            @include myFont("MuseoRegular", 12px, 14px);
            margin: 21px 0 0;
        }
        td{
            text-align: center !important;
        }
        .actives{
            background: #FFD241;
        }
    }
    #calendar2 thead tr:last-child {

        @include myFont("MuseoRegular", 12px, 20px);
    }
    #calendar2 thead tr:nth-child(1) td:nth-child(2) {
        @include myFont("MuseoSemiBold", 14px, 30px);
    }
    #calendar2 thead tr:nth-child(1) td:nth-child(1):hover, #calendar2 thead tr:nth-child(1) td:nth-child(3):hover {
        cursor: pointer;
    }
    #calendar2 tbody td {
        @include myFont("MuseoRegular", 12px, 20px);
        vertical-align: center;
        border-radius: 50%;

    }
</style>



<script>
    import $ from 'jquery'
    export default{
        data: function(){
            return {
                n: 0
            }
        },
        methods: {
            Calendar2: function(id, year, month){
                var Dlast = new Date(year,month+1,0).getDate(),
                    D = new Date(year,month,Dlast),
                    DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
                    DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
                    calendar = '<tr>',
                    month=["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];
                if (DNfirst != 0) {
                    for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
                }else{
                    for(var  i = 0; i < 6; i++) calendar += '<td>';
                }
                for(var  i = 1; i <= Dlast; i++) {
                    if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
                        calendar += '<td class="actives" data-id="0">' + i;
                    }else{
                        calendar += '<td>' + i;
                    }
                    if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
                        calendar += '<tr>';
                    }
                }
                for(var  i = DNlast; i < 7; i++) calendar += '<td>&nbsp;';
                document.querySelector('#'+id+' tbody').innerHTML = calendar;
                document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
                document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
                document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
                if (document.querySelectorAll('#'+id+' tbody tr').length < 6) {  // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
                    document.querySelector('#'+id+' tbody').innerHTML += '<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;';
                }
                this.selectDate();
            },
            selectDate: function(){
                var that = this;
                $("tbody td").click(function(e){
                    console.log($(e.target))
                    var el = $(e.target);
                    var active = $("tbody td.actives")
                    if (el.hasClass("actives")){
                        el.removeClass("actives")
                    }
                    else if ($("tbody td.actives").length < 2){
                        el.addClass("actives")
                        el.attr("data-id", ++that.n)
                    }
                    else{
                        var first = (+$(active[0]).attr("data-id") < +$(active[1]).attr("data-id")) ? active[0] :active[1];
                        console.log(+$(active[0]).attr("data-id"), +$(active[1]).attr("data-id"))
                        $(first).removeClass("actives");
                        el.addClass("actives");
                        el.attr("data-id", ++that.n);
                    }
                })
            }
        },
        mounted: function(){
            var that = this;
            this.Calendar2("calendar2", new Date().getFullYear(), new Date().getMonth());
            // переключатель минус месяц
            document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(1)').onclick = function() {
                that.Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month)-1);
            };
            // переключатель плюс месяц
            document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(3)').onclick = function() {
                that.Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month)+1);
            };
        }
    }

</script>
