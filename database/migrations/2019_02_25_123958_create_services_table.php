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
            $table->string('description');
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
                'description' => 'Внедряване на международни и европейски стандарти (ISO, EN...) за качество, безопасност на храни, околна среда, ЗБУТ и др. и усъвършенстване на процесите във фирмите',
                'slug' => 'ekspertna-podkrepa-i-biznes-konsultacii',
                'body' => '<p>Страница - Експертна подкрепа и бизнес консултации</p>',
                'icon' => 'circle',
                'cover' => '1.jpeg',
                'visible' => true,
                'priority' => 0
            ],
            [
                'title' => 'Оценка на съответствието на продуктите',
                'description' => 'по изискванията на европейските директиви и приложими стандарти за постигане на маркировка СЕ',
                'slug' => 'ocenka-na-syotvetstvieto-na-produktite',
                'body' => '<p>Страница - Оценка на съответствието на продуктите</p>',
                'icon' => 'circle',
                'cover' => '2.jpeg',
                'visible' => true,
                'priority' => 0
            ],
            [
                'title' => 'Управление на проекти',
                'description' => 'за инвестиции в предприятия по европейски и международни фондове и програми',
                'slug' => 'upravlenie-na-proekti',
                'body' => '<p>Страница - Управление на проекти</p>',
                'icon' => 'circle',
                'cover' => '2.jpeg',
                'visible' => true,
                'priority' => 0
            ],
            [
                'title' => 'Практически обучения',
                'description' => 'Нашите курсове са насочени към всички нива, специалисти и процеси от системата за управление на фирмите',
                'slug' => 'prakticheski-obuchenia',
                'body' => '<p>Страница - Практически обучения</p>',
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
