<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('icon')->nullable();
            $table->string('cover')->nullable();
            $table->longText('body');
            $table->boolean('visible')->default(1);
            $table->integer('priority')->default(0);
            $table->timestamps();
        });

        DB::table('services')->insert([
            [
                'title' => 'Експертна подкрепа и бизнес консултации',
                'slug' => 'ekspertna-podkrepa-i-biznes-konsultacii',
                'body' => '<p>Страница - Експертна подкрепа и бизнес консултации</p>',
                'icon' => 'circle',
                'cover' => '1.jpeg',
                'visible' => true,
                'priority' => 0
            ],
            [
                'title' => 'Оценка на съответствието на продуктите',
                'slug' => 'ocenka-na-syotvetstvieto-na-produktite',
                'body' => '<p>Страница - Оценка на съответствието на продуктите</p>',
                'icon' => 'circle',
                'cover' => '2.jpeg',
                'visible' => true,
                'priority' => 0
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
