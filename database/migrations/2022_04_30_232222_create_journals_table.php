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
            $table->float('size');
            $table->float('entry_price');
            $table->float('s_l');
            $table->float('t_p');
            $table->float('exit_price');
            $table->float('commission');
            $table->float('swap');
            $table->float('profit');
           // $table->longText('desc');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
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
