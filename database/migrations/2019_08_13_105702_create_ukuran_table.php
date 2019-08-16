<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUkuranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukuran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ukuran')->nullable();
            $table->string('detail')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * @return void
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('ukuran');
    }
}
