<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->longText('body');
            $table->string('cover');
            $table->boolean('visible')->default(1);
            $table->integer('priority')->default(0);
            $table->timestamps();
        });

        DB::table('courses')->insert([
            [
                'title' => 'Съвременни хармонизирани нормативни изисквания',
                'description' => 'Съвременни хармонизирани нормативни изисквания към бизнеса в страните членки на Европейския съюз',
                'body' => 'Специализирани тренировки за развитие на одиторските умения, работа в екип и др.',
                'cover' => '1.jpeg',
                'visible' => true,
                'priority' => 0
            ],
            [
                'title' => 'Съвременни информационни и комуникационни технологии',
                'description' => 'Съвременни информационни и комуникационни технологии. Умения за търсене на бизнес и нормативна информация в интернет пространството',
                'body' => 'Специализирани тренировки за развитие на одиторските умения, работа в екип и др.',
                'cover' => '1.jpeg',
                'visible' => true,
                'priority' => 0
            ],
            [
                'title' => 'Практическо прилагане на изискванията за безопасност на храните',
                'description' => 'Практическо прилагане на изискванията за безопасност на храните (системи за управление на безопасността на храните - НАССР и ISO 22000)',
                'body' => 'Специализирани тренировки за развитие на одиторските умения, работа в екип и др.',
                'cover' => '1.jpeg',
                'visible' => true,
                'priority' => 0
            ],
            [
                'title' => 'Сертификати и сертификация',
                'description' => 'Сертификати и сертификация (изисквания, видове и системи за сертификация)',
                'body' => 'Специализирани тренировки за развитие на одиторските умения, работа в екип и др.',
                'cover' => '1.jpeg',
                'visible' => true,
                'priority' => 0
            ],
            [
                'title' => 'Икономика на качеството',
                'description' => 'Икономика на качеството. Условия и подход за непрекъснато подобряване на системата и намаляване на загубите от лошо качество',
                'body' => 'Специализирани тренировки за развитие на одиторските умения, работа в екип и др.',
                'cover' => '1.jpeg',
                'visible' => true,
                'priority' => 0
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
