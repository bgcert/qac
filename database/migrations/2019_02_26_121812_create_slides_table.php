<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('cover')->nullable();
            $table->string('action');
            $table->boolean('visible')->default(1);
            $table->integer('priority')->default(0);
            $table->timestamps();
        });

        DB::table('slides')->insert([
            [
                'title' => 'Оценка на съответствието на продуктите',
                'subtitle' => 'по изискванията на европейските директиви и приложими стандарти за постигане на МАРКИРОВКА СЕ',
                'cover' => '1.jpeg',
                'action' => 'contacts',
                'visible' => true,
                'priority' => 0
            ],
            [
                'title' => 'Сертификация на продукти и системи',
                'subtitle' => 'по изискванията на международни стандарти ISO 9001, ISO 14001, OHSAS 18001, ISO 22000, ISO 27001, ISO 20000-1, ISO/IEC 13485, AQAP 2110 и др.',
                'cover' => '2.jpeg',
                'action' => 'about-us',
                'visible' => true,
                'priority' => 1
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
        Schema::dropIfExists('slides');
    }
}
