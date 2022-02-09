<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campios', function (Blueprint $table) {
            $table->id();
            $table->string('idlol');
            $table->string('nom');
            $table->string('desc_curta');
            $table->text('desc_llarga');
            $table->string('foto_petita');
            $table->string('foto_gran');
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
        Schema::dropIfExists('campios');
    }
}
