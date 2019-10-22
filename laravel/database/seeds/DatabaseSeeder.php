<?php

use App\Models\Solution;
use Illuminate\Database\Seeder;
use App\Models\HomeSlider;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('HomeSeeder');
        $this->call('ServiceSeeder');
        // $this->call(UsersTableSeeder::class);
        Solution::create([
            'path'     => 'Для_дома/Управление',
            'for'      => 'Для дома',
            'title'    => 'Управление',
            'photos'   => '/site_img/homemanager0.jpg /site_img/homemanager1.jpg /site_img/smart-home.png',
            'text'    => 'В связи с неумолимо надвигающемся техническим прогрессом человечество получило немалое число систем для комфортной жизни. Но вместе с тем приобрело и кучу неприятностей, свзянных с управлением всеми системами комфорта и системами жизнеобеспечения. Посудите сами освещение, вентиляция, кондиционирование, отопление, охранные системы и системы видеонаблюдения, системы оповещения, wifi, система развлечений вот далеко неполный список того, что требует внимание пользователя, почти ежедневно. Как со всем этим справиться? Благодаря современным интегрированным системам управления уже сейчас можно сосредоточить контроль в одном смартфоне. Мы поможем выбрать решения, которые подходят именно вам.',
            'small_text'    => 'В связи с неумолимо надвигающемся техническим прогрессом человечество получило немалое число систем для комфортной жизни. Но вместе с тем приобрело и кучу неприятностей ...',
        ]);
        Solution::create([
            'path'     => 'Для_дома/Домашние_кинотеатры',
            'for'      => 'Для дома',
            'title'    => 'Домашние кинотеатры',
            'photos'   => '/site_img/hometheater0.jpg /site_img/hometheater1.jpeg /site_img/hometheater2.jpeg',
            'text'    => 'Представьте, что вы можете пригласить друзей на премьеру долгожданного кинофильма к себе домой, а не в очередной торговый центр. Вы рассаживаетесь по местам, в комнате гаснет свет и запускается фильм. Благодаря отличной картинке и детальному звуку вы становитесь участником истории на экране.
Мы поможем собрать кинотеатральную систему развлечений, согласно вашим требованиям.
',
            'small_text'    => 'Представьте, что вы можете пригласить друзей на премьеру долгожданного кинофильма к себе домой, а не в очередной торговый центр. Вы рассаживаетесь по местам ...',
        ]);
        Solution::create([
            'path'     => 'Для_дома/Wifi',
            'for'      => 'Для дома',
            'title'    => 'Wifi',
            'photos'   => '/site_img/homewifi0.jpeg /site_img/smart-home.png /site_img/smart-home.png',
            'text'    => 'Наверняка вы уже страдали от плохого wifi. Множество проблем ждут пользователя, если система wifi в доме собрана не верно. Затухание сигнала, нестабильный сигнал, потеря сети устройствами, дублирование сети - вот лишь некоторые из огромногт числа проблем с радиосвязью.
Наши специалисты имеют уникальный опыт в инсталляции бесшовного wifi. Мы можем провести радио разведку в вашем доме и указать на наиболее проблемные места, а так же предложить решения на основе проверенного временем оборудования.',
            'small_text'    => 'Наверняка вы уже страдали от плохого wifi. Множество проблем ждут пользователя, если система wifi в доме собрана не верно.',
        ]);
        Solution::create([
            'path'     => 'Для_дома/Освещение',
            'for'      => 'Для дома',
            'title'    => 'Освещение',
            'photos'   => '/site_img/homelighting0.jpeg /site_img/homelighting1.jpeg /site_img/homelighting2.jpeg',
            'text'    => 'Управление системами освещения и затемнения поможет сэкономить электроэнергию, увеличить срок службы ламп, получить доступ к уникальным сценариям, разработанных вместе с вами. Сеть выключателей и датчиков движения обеспечит максимально удобную и стабильную эксплуатацию.
Системы затемнения позволят вам получить абсолютно темную комнату даже в яркий солнечный день, всего одним нажатием. 
Чтобы не щурится ночью от яркого света и не бродить в кромешной тьме можно создать режим ночной подсветки помещений, который будет автоматически включаться ночью по датчику.',
            'small_text'    => 'Управление системами освещения и затемнения поможет сэкономить электроэнергию, увеличить срок службы ламп, получить доступ к уникальным сценариям ...',
        ]);
        Solution::create([
            'path'     => 'Для_дома/Мультирум',
            'for'      => 'Для дома',
            'title'    => 'Мультирум',
            'photos'   => '/site_img/homemultiroom0.png /site_img/homemultiroom1.jpg /site_img/homemultiroom2.jpg',
            'text'    => 'Многие из нас слушают музыку. И иногда хочется, чтобы музыка сопровождала вас в повседневных делах, если это возможно. Вы переходите из комнаты в комнату, с этажа на этаж, продолжая слушать свой любимый плей-лист. 
Легкий джаз для встречи с друзьями, новости по утрам и спокойная музыка после работы, по одному нажатию, вот лишь несколько примеров того, как можно использовать возможности мультирум.
Доступ к стриминговым сервисам дает возможность получить огромный ассортимент музыки и подкастов в отличном качестве. 
Стерео комнаты и пластики - весь этот фетишь никто не отменял и вы сможете сравнить сами что лучше лампа или цифра?',
            'small_text'    => 'Многие из нас слушают музыку. И иногда хочется, чтобы музыка сопровождала вас в повседневных делах, если это возможно. Вы переходите из комнаты в комнату ...',
        ]);
        Solution::create([
            'path'     => 'Для_бизнеса/Безопасность_и_видеонаблюдение',
            'for'      => 'Для бизнеса',
            'title'    => 'Безопасность и видеонаблюдение',
            'photos'   => '/site_img/businesssecurity0.jpeg /site_img/businesssecurity1.jpeg /site_img/businesssecurity2.jpeg',
            'text'    => 'Современные здания требуют сбалансированной системы безопасности и видеонаблюдения. Эти комплексы должны быть надежными, гибкими и удобными в управлении. Иногда требуются системы распознавания номеров автомобилей или лиц посетителей. Вы получите многоуровневый доступ к записям с видеокамер, а так же облачное хранилище данных. Система контроля доступа в помещения поможет перенаправить потоки посетителей и защитит от непрошенных гостей. И это далеко не полный список функций.',
            'small_text'    => 'Современные здания требуют сбалансированной системы безопасности и видеонаблюдения. Эти комплексы должны быть надежными, гибкими и удобными в управлении.',
        ]);
        Solution::create([
            'path'     => 'Для_бизнеса/Медиа_для_бизнса',
            'for'      => 'Для бизнеса',
            'title'    => 'Медиа для бизнеса',
            'photos'   => '/site_img/businesmedia0.jpeg /site_img/smart-home.png /site_img/smart-home.png',
            'text'    => 'Корпоративные решения по аудио видео коплексам принесут массу пользы и покажут уровень вашей компании. Хороший мультифункциональный зал - это обучение для сотрудников, совещания для команды, презентации для клиентов и т.д. Видеостены и проекторы, конференц-системы и системы перевода, аудио усиление и селекторная связь, системы затемнения и управления освещением - все это существенно облегчит ваш рабочий процесс.',
            'small_text'    => 'Корпоративные решения по аудио видео коплексам принесут массу пользы и покажут уровень вашей компании. Хороший мультифункциональный зал - это обучение...',
        ]);
        Solution::create([
            'path'     => 'Для_бизнеса/ЛВС_и_корпоративный_Wifi',
            'for'      => 'Для бизнеса',
            'title'    => 'ЛВС и корпоративный Wifi',
            'photos'   => '/site_img/businessnetworking0.jpeg /site_img/smart-home.png /site_img/smart-home.png',
            'text'    => 'Локальные вычислительные сети и корпоративный wifi.
В связи с ростом скорости передачи данных и автоматизации, происходящей как на производственых участках, так и офисных подразделениях следует помнить о качественных локальных сетях и системах бесшовного wifi. Качественно собранная ЛВС обеспечит стабильную работу всей организации, а бесшовный wifi позволит не выключаться из процесса в любой точке офиса. При этом пропускная способность сетей существенно возросла за последнее время. ',
            'small_text'    => 'Локальные вычислительные сети и корпоративный wifi. В связи с ростом скорости ...',
        ]);

    }
}
