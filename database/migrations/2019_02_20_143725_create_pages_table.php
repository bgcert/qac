<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->longText('body');
            $table->boolean('menu_item')->default(0);
            $table->integer('priority')->default(0);
            $table->timestamps();
        });

        DB::table('pages')->insert(
            [
                'title' => 'Страница 1',
                'slug' => 'stranica-1',
                'body' => '<p>Съдържание на страница 1</p>',
                'menu_item' => true,
                'priority' => 0
            ],
            [
                'title' => 'Страница 2',
                'slug' => 'stranica-2',
                'body' => '<p>Съдържание на страница 2</p>',
                'menu_item' => true,
                'priority' => 1
            ],
            [
                'title' => 'Страница 3',
                'slug' => 'stranica-3',
                'body' => '<p>Съдържание на страница 3</p>',
                'menu_item' => true,
                'priority' => 2
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
