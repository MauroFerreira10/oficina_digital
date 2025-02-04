<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaturasTable extends Migration
{
    public function up()
    {
        Schema::create('viaturas', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('marca');
            $table->string('modelo');
            $table->string('cor');
            $table->string('tipo');
            $table->string('estado');
            $table->string('tipo_avaria');
            $table->string('codigo_validacao', 10)->unique()->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('viaturas');
    }
}
