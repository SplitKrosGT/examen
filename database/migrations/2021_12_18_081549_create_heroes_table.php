<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('name_hero')
                ->comment('имя героя');
            $table->text('universe')
                ->comment('вселенная героя');
            $table->text('ability')
                ->comment('способность героя');
            $table->bigInteger('age')
                ->comment('возраст героя');
            $table->text('main_villain')
                ->comment('главный злодей');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heroes');
    }
}
