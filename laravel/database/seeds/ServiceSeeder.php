<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'photo' => '/site_img/service0.jpg',
            'title' => 'Проектирование',
            'text' => '[{ "p": "Проектирование - это обязательная часть в&nbsp;интеграции любых инженерных систем. Хороший проект помогает предотвратить неприятные неожиданности в&nbsp;дальнейшем. И&nbsp;оставляет возможности для&nbsp;безболезненного расширения функционала системы."},{ "ul": ["Мы готовы помочь в&nbsp;детальной проработке документации по&nbsp;интеграции&nbsp;:","систем управления (включая разработку индивидуального софта)","автоматизации","систем видео-отображения и&nbsp;проекционных систем","домашних кинотеатров","стерео-систем","охранных систем и&nbsp;систем контроля доступа","систем видео наблюдения","локально вычислительной сети и&nbsp;профессионального wifi"]}]',
        ]);

        Service::create([
            'photo' => '/site_img/service1.jpg',
            'title' => 'Монтаж',
            'text' => '[{ "p": "Монтаж - следующий шаг. Правильный монтаж оборудования и&nbsp;коммуникационных трасс исключает большое число ошибок в&nbsp;работе электронных систем."},{ "p": "Поможем с&nbsp;монтажем компонентов всех вышеуказанных систем."}]',
        ]);

        Service::create([
            'photo' => '/site_img/service2.jpg',
            'title' => 'Настройка',
            'text' => '[{ "p": "Настройка - завершающий шаг интеграции. Так же&nbsp;включает в&nbsp;себя программирование сценариев и&nbsp;уникальных функций."},{ "p": "Только точная настройка оборудования позволит пользователю получить максимальный функционал системы, а&nbsp;так же&nbsp;избавит от&nbsp;ошибок."}]',
        ]);

        Service::create([
            'photo' => '/site_img/service3.jpg',
            'title' => 'Аудит',
            'text' => '[{ "p": "Вы&nbsp;уже купили оборудование или&nbsp;только присматриваете себе систему?"},{ "p": "Мы проконсультируем по&nbsp;брендам и&nbsp;стоимости оборудования. Поможем в&nbsp;решении технических вопросов. Мы&nbsp;готовы помочь на&nbsp;любом этапе реализации проекта."}]',
        ]);
    }
}
