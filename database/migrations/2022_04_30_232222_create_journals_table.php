<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->date('entry_date');
            $table->string('entry_time');
            $table->date('exit_date');
            $table->string('position_nr');
            $table->string('symbol');
            $table->enum('type',['sal' , 'buy']);
            $table->string('size');
            $table->float('entry_price');
            $table->float('s/l');
            $table->float('t/p');
            $table->float('exit_price');
            $table->float('profit');
            $table->longText('desc');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('journals');
    }
}
