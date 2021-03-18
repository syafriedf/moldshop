<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('date_in');
            $table->string('from_dep');
            $table->string('to_dep');
            $table->date('needed');
            $table->Integer('week');
            $table->string('item');
            $table->string('jenis');
            $table->Integer('jumlah');
            $table->string('problem', 1000);
            $table->string('maker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
