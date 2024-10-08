<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            // creo la struttura della tabella
            $table->id();
            $table->string('title', 50);
            $table->text('description')->nullable();
            $table->string('thumb', 500)->nullable();
            $table->string('price', 20);
            $table->string('series', 50);
            $table->date('sale_date')->nullable();
            $table->string('type', 30);
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
};
